<?php 
namespace Learn\Controllers\admin;
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

class ControllerBase extends Controller
{
    
	public function beforeExecuteRoute()
	{

		if(!$this->auth->getIdentity())
		{
			return $this->response->redirect('session/signin');
		}
		if($this->auth->getGroup()!='admin')
		{
                     
			$profile=$this->auth->getGroup();
			$this->flash->error('You don\'t have right to access admin');
			return $this->response->redirect($profile);
		}
	}
	public function afterExecuteRoute()
    {
        $this->view->setViewsDir($this->view->getVIewsDir() . 'admin/');
        /*
        check post through csrf security or not
        */
        if($this->request->isPost())
        {
            if (!$this->security->checkToken())
            {
                $this->flash->error('Document Expired');
                // $this->view->disable();
                return $this->response->redirect($_SESSION['Referer']);
            }
        }
    }
     public function initialize1()
    {
        $uri_lang=$this->dispatcher->getParam('lg');
        if(!isset($uri_lang))
        {
            // $this->session->destory();
            if($this->session->has('lg'))
            {
                $lang=$this->session->get('lg');
            }
            else
            {
                $lang=substr($this->request->getBestLanguage(),0,2);
                switch($lang)
                {
                    case "uk": break;
                    case "en": break;
                    default: $lang = "en";
                }
                $this->session->set('lg',$lang);
            }
             $qString=substr($_SERVER["QUERY_STRING"], 5);
            $this->response->redirect("$lang".$qString);
        }
        else
        {
            if($this->session->has('lg') && $this->session->get('lg') != $uri_lang)
            {
                $this->session->set('lg',$uri_lang);
            }
        }
    }
}