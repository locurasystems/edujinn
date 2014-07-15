<?php 
namespace Learn\Message;
use Phalcon\Mvc\User\Component;
use Learn\Models\Message;
use Learn\Models\Users;
use Learn\Models\Notification;
class Message extends Component
{

	/**
	*@param string $to if multiple then comma(,) seperated
	*@param string $subject 
	*@param string $to
	*@param string $name
	*/
	public function send($to,$subject,$message,$from=false)
	{
		$filter = new \Phalcon\Filter();
		if(!$from)
		{
			$from=$this->auth->getID();
		}
		$from=$filter->sanitize($from,"int");
		$from=Users::findFirst($from);
		/*Check From user available in user table*/
		if($from)
		{
			$toArr=explode(',',$to);
			if($toArr)
			{
				foreach ($toArr as $value) {
					
				}
			}
		}
		
		$to_id=Users::findFirstByUserName($to)

	}
	/**
	*@param string $from
	*/
	public function fetch($from)
	{

	}
	/**
	*@param string $from
	*/
	private function sentItems($from)
	{

	}
	/**
	*@param string $from
	*/
	private function notifications($from)
	{

	}
	
}