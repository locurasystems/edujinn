<?php  
namespace Learn\Controllers\student;
use \Phalcon\Mvc\Controller;
class ControllerBase extends Controller
{
	public function beforeExecuteRoute()
	{

	}
	public function afterExecuteRoute()
    {
        $this->view->setViewsDir($this->view->getViewsDir().'student/');
    }
}