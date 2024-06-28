<?php
namespace TCM\Component\RSFilesReports\Api\Controller;

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\ApiController;
use Joomla\CMS\Response\JsonResponse;

\defined('_JEXEC') or die;

class MenuController extends ApiController
{
    protected $contentType = 'menu';

    protected $default_view = 'menu';

    public function __construct()
    {
        parent::__construct();
    }

    public function getMenu(): void
    {
        try
        {
            
            $input = $this->app->input;
            $startDate = $input->get('startDate', '1970-01-01', 'string');
            $endDate = $input->get('endDate', date('Y-m-d') . ' 23:59:59', 'string');
            $sortBy = $input->get('sortBy', '', 'string');
    
    
            $db = Factory::getContainer()->get('DatabaseDriver');
            $query = $db->getQuery(true);
    
            $query
                ->select($db->quoteName(['menu_id', 'menu_title', 'country', 'hits']))
                ->from($db->quoteName('lanl4_rsfiles_menuhits'))
                ->where($db->quoteName('created_at') . ' BETWEEN ' . $db->quote($startDate) . ' AND ' . $db->quote($endDate));
    
            if ($sortBy === 'mostViewed') {
                $query->order($db->quoteName('hits') . ' DESC');
            }
    
            $db->setQuery($query);
            $menuViews = $db->loadObjectList();
    
    
            echo new JsonResponse($menuViews);
            $this->app->close();
        }
        catch (\Exception $e)
        {
            echo new JsonResponse(null, $e->getMessage(), true);
            $this->app->close();
        }
    }
}