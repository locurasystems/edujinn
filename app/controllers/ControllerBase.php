<?php
namespace Learn\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

/**
 * ControllerBase
 * This is the base controller for all controllers in the application
 */
class ControllerBase extends Controller
{
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
    protected function _getTranslation()
    {
        $language = $this->dispatcher->getParam('lg');
        
        if(file_exists("../app/language/public/".$language.".php"))
        {
            require "../app/language/public/".$language.".php";
        }
        else
        {
            require "../app/language/public/en.php";
        }
        return new \Phalcon\Translate\Adapter\NativeArray(array(
            'content'=>$message));
    }
	 public function afterExecuteRoute()
    {
        $user=$this->auth->getIdentity();
        if($user)
        {

        }

    }

    /**
     * Execute before the router so we can determine if this is a provate controller, and must be authenticated, or a
     * public controller that is open to all.
     *
     * @param Dispatcher $dispatcher
     * @return boolean
     */
    public function beforeExecuteRoute()
    {
        /*
        check post through csrf security or not
        */
        // if($this->request->isPost())
        // {
        //     if (!$this->security->checkToken())
        //     {
        //         $this->flash->notice('Document Expired');
        //         // $this->view->disable();
        //         return false;
        //     }
        // }
    }
    public function indexAction()
    {
        
        $this->view->disable();
    }
}
