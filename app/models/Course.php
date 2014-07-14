<?php

namespace Learn\Models;
use Phalcon\Mvc\Model\Message as Message;
class Course extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $channel_id;

    /**
     *
     * @var string
     */
    protected $title;

    /**
     *
     * @var string
     */
    protected $code;

    /**
     *
     * @var string
     */
    protected $about;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $createdAt;
     /**
     *
     * @var string
     */
    protected $isActive;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field channel_id
     *
     * @param integer $channel_id
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        
        $this->channel_id = $channel_id;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Method to set the value of field about
     *
     * @param string $about
     * @return $this
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field createdAt
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedat($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
      /**
     * Method to set the value of field createdAt
     *
     * @param string $isActive
     * @return $this
     */
    public function setIsactive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }


    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field channel_id
     *
     * @return integer
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the value of field about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field createdAt
     *
     * @return string
     */
    public function getCreatedat()
    {
        return $this->createdAt;
    }

    public function getSource()
    {
        return 'course';
    }

    /**
     * @return Course[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Course
     */
    public static function findFirst($parameters = array())
    {
        return parent::findFirst($parameters);
    }
    public function initialize()
    {
        $this->isActive='Y';
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id'          => 'id', 
            'channel_id'  => 'channelId', 
            'title'       => 'title', 
            'code'        => 'code', 
            'about'       => 'about', 
            'description' => 'description', 
            'createdAt'   => 'createdAt',
            'isActive'    =>  'isActive'
        );
    }

    /*
    Before Deleting condition
    */
    public function beforeDelete()
    {
        if($this->isActive == 'Y')
        {
             $message = new Message('faild', 'isActive', 'Active', '501');
             $this->appendMessage($message);
             return false;
        }
        return true;
    }

}
