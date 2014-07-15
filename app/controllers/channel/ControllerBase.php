<?php 
namespace Learn\Controllers\channel;
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;
use \Phalcon\Exception;
class ControllerBase extends Controller
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
     public function initialize()
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
            $qString=str_replace('channel','channel/'.$lang, $_GET['_url']);
            $this->response->redirect("$lang".$qString);
        }
        else
        {
            if($this->session->has('lg') && $this->session->get('lg') != $uri_lang)
            {
                $this->session->set('lg',$uri_lang);
            }
            // $qString=str_replace('channel','channel/'.$uri_lang, $_GET['_url']);
            // $this->response->redirect($qString);
        }
    }
}