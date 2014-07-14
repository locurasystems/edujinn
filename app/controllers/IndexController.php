<?php 
namespace Learn\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;
class IndexController extends ControllerBase
{
	protected function _getTranslation()
	{
    	$language = $this->dispatcher->getParam('lg');
    	
    	if(file_exists("../app/language/".$language.".php"))
    	{
    		require "../app/language/".$language.".php";
    	}
    	else
    	{
    		require "../app/language/en.php";
    	}
    	return new \Phalcon\Translate\Adapter\NativeArray(array(
    		'content'=>$message));
	}
	public function indexAction()
	{
	
	}
	public function notFoundAction()
	{
		
	}
	public function testAction()
	{
		$l=$this->_getTranslation();
		echo $l->_('welcome');
		$this->view->disable();
	}
}