<?php 
namespace Learn\Controllers\channel;
use Learn\Controllers;
use Learn\Message\Message;
class IndexController extends ControllerBase
{
	public function indexAction()
	{

	}
	public function testAction()
	{
		$msg=new Message();
		$send=$msg->send(22,2,'subject','message');
		echo $send;
		$this->view->disable();
	}
	
}