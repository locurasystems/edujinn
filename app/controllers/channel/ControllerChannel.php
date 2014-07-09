<?php 
namespace Learn\Controllers\channel;
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;
use \Phalcon\Exception;
class ControllerChannel extends Controller
{
	public function beforeExecuteRoute()
	{

		if(!$this->auth->getIdentity())
		{
            // throw new Exception('The user does not exist');
			$this->response->redirect('session/signin');
            return false;

		}
		if($this->auth->getGroup() != 'channel')
		{
			$group=$this->auth->getGroup();
			$this->flash->error('You don\'t have right to access ');
			return $this->response->redirect($group);
		}
	}
	public function afterExecuteRoute()
    {
        $this->view->setViewsDir($this->view->getViewsDir() . 'channel/');
        /*
        check post through csrf security or not
        */
        // if($this->request->isPost())
        // {
        //     if (!$this->security->checkToken())
        //     {
        //         $this->flash->error('Document Expired');
        //         // $this->view->disable();
        //         return $this->response->redirect($_SESSION['Referer']);
        //     }
        // }
    }
}