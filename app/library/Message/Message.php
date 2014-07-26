<?php 
namespace Learn\Message;
$host='localhost';
$username='root';
$password='';
$database='db_learn';

$con=mysql_connect($host,$username,$password);
if(!$con)
{
	die('Not connected: '.mysql_error());
}
$db=mysql_select_db($database,$con);
if(!$db)
{
	die("Cant\'t use $database: ".mysql_error());
}
class Message 
{

	/**
	*@param string $to if multiple then comma(,) seperated
	*@param string $subject 
	*@param string $to
	*@param string $name
	*/
	public function send($from,$to,$subject,$message)
	{
		
		if($from)
		{
			$sql="SELECT * FROM `users` where id=$from";
			$res=mysql_query($sql);
			$res=mysql_fetch_row($res);

			if(!$res)
			{
				throw new \Exception('From User Not found');
			}
			
			/*convert $to string into array*/
			$toArr=explode(',',$to);

			if($toArr)
			{
				foreach ($toArr as $toId) {
					if($toId)
					{
						$sql="SELECT * from `users` where id=$toId";
						$toUser=mysql_query($sql);
						$toUser=mysql_fetch_row($toUser);
						if(!$toUser)
						{
							throw new \Exception('ToUser Not found');
						}
						/* table name and notifications */
						$table='message';
						$notification_table='notification';
						$insert=array(
							'from_user' =>$from,
							'to_user'   =>$toId,
							'subject'   =>$subject,
							'message'   =>$message,
							'visual1'   =>'Y',
							'visual2'   =>'Y',
							'isRead'    =>'0',
							'isDelete'  =>'N'
							);
						$push=$this->mysql_insert($table,$insert);
						$messageId=mysql_insert_id();
						if($notification_table)
						{
							$insert_notification=array(
								'event_id'=>)
						}
						
					}
				}
			}
		}
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
	private function createNotifications($from)
	{

	}
	private function mysql_insert($table,$insert)
	{
		$values=array_map('mysql_real_escape_string',array_values($insert));
		$keys=array_keys($insert);
		return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`',$keys).'`) VALUES (\''.implode('\',\'',$values).'\')');
	}
	

}