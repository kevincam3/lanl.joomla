<<<<<<< HEAD
<?php
namespace TCM\Component\RSFilesReports\Administrator\View\Categories;

use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;
use function defined;

defined('_JEXEC') or die;

class HtmlView extends BaseHtmlView
{
	public function display($tpl = null)
	{
		ToolBarHelper::title(Text::_('Categories Report'), 'categories');
		echo '<div id="app"></div>';
	}
}
=======
<?php
namespace TCM\Component\RSFilesReports\Administrator\View\Categories;

use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;
use function defined;

defined('_JEXEC') or die;

class HtmlView extends BaseHtmlView
{
	public function display($tpl = null)
	{
		ToolBarHelper::title(Text::_('Categories Report'), 'categories');
		echo '<div id="app"></div>';
	}
}
>>>>>>> 9fcd091 (fixed the data fetch issues for views and downlaod and other featureas)
