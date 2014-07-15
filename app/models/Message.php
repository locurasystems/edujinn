<?php

namespace Learn\Models;

class Message extends \Phalcon\Mvc\Model
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
    protected $from_user;

    /**
     *
     * @var integer
     */
    protected $to_user;

    /**
     *
     * @var string
     */
    protected $visual1;

    /**
     *
     * @var string
     */
    protected $visual2;

    /**
     *
     * @var string
     */
    protected $subject;

    /**
     *
     * @var string
     */
    protected $message;

    /**
     *
     * @var string
     */
    protected $attachment;

    /**
     *
     * @var string
     */
    protected $isRead;

    /**
     *
     * @var string
     */
    protected $created_date;

    /**
     *
     * @var string
     */
    protected $isDelete;

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
     * Method to set the value of field from_user
     *
     * @param integer $from_user
     * @return $this
     */
    public function setFromUser($from_user)
    {
        $this->from_user = $from_user;

        return $this;
    }

    /**
     * Method to set the value of field to_user
     *
     * @param integer $to_user
     * @return $this
     */
    public function setToUser($to_user)
    {
        $this->to_user = $to_user;

        return $this;
    }

    /**
     * Method to set the value of field visual1
     *
     * @param string $visual1
     * @return $this
     */
    public function setVisual1($visual1)
    {
        $this->visual1 = $visual1;

        return $this;
    }

    /**
     * Method to set the value of field visual2
     *
     * @param string $visual2
     * @return $this
     */
    public function setVisual2($visual2)
    {
        $this->visual2 = $visual2;

        return $this;
    }

    /**
     * Method to set the value of field subject
     *
     * @param string $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Method to set the value of field message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Method to set the value of field attachment
     *
     * @param string $attachment
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Method to set the value of field isRead
     *
     * @param string $isRead
     * @return $this
     */
    public function setIsread($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Method to set the value of field created_date
     *
     * @param string $created_date
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;

        return $this;
    }

    /**
     * Method to set the value of field isDelete
     *
     * @param string $isDelete
     * @return $this
     */
    public function setIsdelete($isDelete)
    {
        $this->isDelete = $isDelete;

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
     * Returns the value of field from_user
     *
     * @return integer
     */
    public function getFromUser()
    {
        return $this->from_user;
    }

    /**
     * Returns the value of field to_user
     *
     * @return integer
     */
    public function getToUser()
    {
        return $this->to_user;
    }

    /**
     * Returns the value of field visual1
     *
     * @return string
     */
    public function getVisual1()
    {
        return $this->visual1;
    }

    /**
     * Returns the value of field visual2
     *
     * @return string
     */
    public function getVisual2()
    {
        return $this->visual2;
    }

    /**
     * Returns the value of field subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Returns the value of field message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Returns the value of field attachment
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Returns the value of field isRead
     *
     * @return string
     */
    public function getIsread()
    {
        return $this->isRead;
    }

    /**
     * Returns the value of field created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * Returns the value of field isDelete
     *
     * @return string
     */
    public function getIsdelete()
    {
        return $this->isDelete;
    }

    public function getSource()
    {
        return 'message';
    }

    /**
     * @return Message[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Message
     */
    public static function findFirst($parameters = array())
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'from_user' => 'from_user', 
            'to_user' => 'to_user', 
            'visual1' => 'visual1', 
            'visual2' => 'visual2', 
            'subject' => 'subject', 
            'message' => 'message', 
            'attachment' => 'attachment', 
            'isRead' => 'isRead', 
            'created_date' => 'created_date', 
            'isDelete' => 'isDelete'
        );
    }

}
