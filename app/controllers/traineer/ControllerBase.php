<?php 
namespace Learn\Controllers\traineer;
use \Phalcon\Mvc\Controller;
class ControllerBase extends Controller
{
	public function beforeExecuteRoute()
	{

	}
	public function afterExecuteRoute()
    {
        $this->view->setViewsDir($this->view->getViewsDir().'traineer/');
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