<?php

namespace Learn\Models;

class Notification extends \Phalcon\Mvc\Model
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
    protected $event_id;

    /**
     *
     * @var integer
     */
    protected $type_id;

    /**
     *
     * @var string
     */
    protected $text;

    /**
     *
     * @var string
     */
    protected $isdisplay;

    /**
     *
     * @var string
     */
    protected $createdAt;

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
     * Method to set the value of field event_id
     *
     * @param integer $event_id
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->event_id = $event_id;

        return $this;
    }

    /**
     * Method to set the value of field type_id
     *
     * @param integer $type_id
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Method to set the value of field text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Method to set the value of field isdisplay
     *
     * @param string $isdisplay
     * @return $this
     */
    public function setIsdisplay($isdisplay)
    {
        $this->isdisplay = $isdisplay;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field event_id
     *
     * @return integer
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Returns the value of field type_id
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Returns the value of field text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the value of field isdisplay
     *
     * @return string
     */
    public function getIsdisplay()
    {
        return $this->isdisplay;
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
        return 'notification';
    }

    /**
     * @return Notification[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return Notification
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
            'event_id' => 'eventId', 
            'type_id' => 'typeId', 
            'text' => 'text', 
            'isdisplay' => 'isdisplay', 
            'createdAt' => 'createdAt'
        );
    }
     public function initialize()
    {
        $this->belongsTo('typeId','\Learn\Models\NotificationType','id',array(
            'alias'=>'type'));
        $this->belongsTo('eventId',"\Learn\Models\\".'$)
    }


}
