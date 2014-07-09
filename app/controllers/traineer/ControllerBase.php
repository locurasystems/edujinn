<?php 
namespace Learn\Controllers\traineer;
use \Phalcon\Controller;
class ControllerBase extends Controller
{
	public function beforeExecuteRoute()
	{

	}
	public function afterExecuteRoute()
    {
        $this->view->setViewsDir($this->view->getViewsDir().'traineer/');
    }

}