<?php 
namespace Learn\Controllers\channel;
use Learn\Models\Course;
use \Phalcon\Exception;
class CourseController extends ControllerBase
{
	public function initialize()
	{
		parent::initialize();
		$this->view->setLayout('index');
	}
	public function createAction()
	{
		try
		{
			if($this->request->isPost())
			{
				$title        =$this->request->getPost('title','striptags');
				$code         =$this->request->getPost('code','striptags');
				$about        =$this->request->getPost('about');
				$description  =$this->request->getPost('description');
				$channelId    =$this->request->getPost('channel_id');
				$course       =new Course();
				$course->channelId   =$channelId;
				$course->title 		 =$title;
				$course->about       =$about;
				$course->description =$description;
				$course->code        =$code;
				
				if(!$course->save())
				{
					foreach ($course->getMessages() as $message) {
						$this->flash->error($mrssage);
						$this->response->redirect($_SERVER['HTTP_REFERER']);
						return;
					}
				}
				else
				{
					$this->flash->success('Course successfully added');
					return $this->response->redirect('channel/course/view');
					// $this->view->disable();
				}
			}
		}
		catch(\Exception $e)
		{
			$this->flash->error($e->getMessage());
		}
	}
	public function viewAction()
	{
		$channelId=$this->auth->getID();
		$total=Course::find(array(
			"channelId = '$channelId'"
			))->count();
		if($this->request->isPost())
		{
			$currentPage=$this->request->getPost('currentPage','int',1);
			$perPage=$this->request->getPost('perPage','int',3);
			$offset=($currentPage==1 ? 0: ($currentPage-1)*$perPage);
			$course= Course::find(array(
				"channelId= '$channelId'",
				'limit'=>array(
					'number'=>$perPage,
					'offset'=>$offset
					)
				));
			if($course)
			{
							
				echo json_encode($course->toArray());
				$this->view->disable();
				return;
			}

		}
		$this->view->setVar('total',$total);

	}
	public function updateAction()
	{
		
	}
	public function deleteAction()
	{
		if($this->request->isPost())
		{
			$cId=$this->request->getPost('cId');
			$delete=Course::findFirst($cId);
			$status=array();
			if(!$delete->delete())
			{
				$status['error']='Y';
				
					foreach ($delete->getMessages() as $message) {
						$status['msg']=$message->getMessage();
					}
				
				echo json_encode($status);
			}
			else
			{
				$status['error']='Y';
				$status['msg']='Successfully deleted';
				echo json_encode($status);
			}
			$this->view->disable();
			return;
		}
	}
	public function activateAction()
	{
		if($this->request->isPost())
		{
			$cId=$this->request->getPost('cId');
			$activate=Course::findFirst($cId);
		}
	}
}