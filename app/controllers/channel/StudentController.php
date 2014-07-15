<?php 
namespace Learn\Controllers\channel;
use Learn\Models\Student;
use Learn\Models\ChannelStudent;
use Learn\Models\Users;
use Learn\Models\Channel;

class StudentController extends ControllerBase
{
	public function initialize()
	{
		$this->view->setLayout('index');
		parent::initialize();
	}
	public function createAction()
	{

		try{
			if($this->request->isPost())
			{
				//Transaction begin
				$this->db->begin();
				//User values pushing to user table
				$user 	=new Users();
				$user->assign(array(
					'firstName'          =>	$this->request->getPost('first_name','striptags'),
		            'lastName'           =>	$this->request->getPost('last_name','striptags'),
		            'userName'           =>	$this->request->getPost('user_name','striptags'),
		            'email'              =>	$this->request->getPost('email','email'),
		            'password'           =>	$this->security->hash($this->request->getPost('password')),
		            'active'             =>	'Y',
		            'group_id'           => '4'
					));
				if(!$user->save())
				{
					// if save fails it gives error message to create page
					$this->db->rollback();
					foreach($user->getMessages() as $message)
					{
						$this->flash->error($message);
					}
					return;
				}
				// for getting channel id using userId 
				$userId=$this->auth->getID();
				$channelId	=	Channel::findFirst("userId ='$userId'");
				// setting userId and channelId in channelUser table
				$channel 	=	new ChannelStudent();
				$channel->assign(array(
					'channelId'	=>	$channelId->id,
					'studentId'	=>  $user->id
					));
				if(!$channel->save())
				{
					// if channel save fails it rollback to all and redirect to create page
					$this->db->roolback();
					foreach($channel->getMessages() as $message)
					{
						$this->flash->error($message);
					}
					return;
				}
				// finally commit all the changes
				$this->db->commit();
				return $this->response->redirect('channel/student/view');
			}

		}catch(\Phalcon\Exception $e)
		{
			foreach ($e->getMessages() as  $value) {
				$this->flash->error($value);
			}
		}
	}
	public function viewAction()
	{

	}
	public function deleteAction()
	{
		
	}
}