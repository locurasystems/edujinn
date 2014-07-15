<?php 
namespace Learn\Languages;
use Phalcon\Mvc\User\Component;
use Phalcon\Mvc\Dispatcher;
class Language extends Component
{
	private function _getTranslation()
    {
    	$di = new \Phalcon\DI();
    	$di->set('dispatcher', function(){
        $eventsManager = new Phalcon\Events\Manager();
	    $dispatcher = new \Phalcon\Mvc\Dispatcher();
	    $dispatcher->setEventsManager($eventsManager);
	    return $dispatcher;
		}, true);
		$language=$this->dispatcher->getParam('lg');
       // echo $language;exit;
        if(false !== stream_resolve_include_path($language.".php"))
        {
            require $language.".php";
        }
        else
        {
            require "en.php";
        }

        return new \Phalcon\Translate\Adapter\NativeArray(array(
            'content'=>$message));
    }
    public function T($data)
    {
    	$t=$this->_getTranslation();
    	return $t->_($data);
    }
}