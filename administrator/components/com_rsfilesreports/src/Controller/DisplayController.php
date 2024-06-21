<<<<<<< HEAD
<?php

namespace TCM\Component\RSFilesReports\Administrator\Controller;

use Joomla\CMS\MVC\Controller\BaseController;
use function defined;

defined('_JEXEC') or die;


class DisplayController extends BaseController
{
	protected $default_view = 'documents';

	public function display($cachable = false, $urlparams = []): BaseController
	{

		$document = $this->app->getDocument();
		$wa = $document->getWebAssetManager();
		$wa->usePreset('com_rsfilesreports.assets');
		return parent::display($cachable, $urlparams);
	}
}
=======
<?php

namespace TCM\Component\RSFilesReports\Administrator\Controller;

use Joomla\CMS\MVC\Controller\BaseController;
use function defined;

defined('_JEXEC') or die;


class DisplayController extends BaseController
{
	protected $default_view = 'documents';

	public function display($cachable = false, $urlparams = []): BaseController
	{

		$document = $this->app->getDocument();
		$wa = $document->getWebAssetManager();
		$wa->usePreset('com_rsfilesreports.assets');
		return parent::display($cachable, $urlparams);
	}
}
>>>>>>> 9fcd091 (fixed the data fetch issues for views and downlaod and other featureas)
