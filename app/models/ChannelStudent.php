<?php

namespace Learn\Models;

class ChannelStudent extends \Phalcon\Mvc\Model
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
    protected $channelId;

    /**
     *
     * @var integer
     */
    protected $studentId;

    /**
     *
     * @var string
     */
    protected $createdAt;

    /**
     *
     * @var string
     */
    protected $modifiedAt;

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
     * Method to set the value of field channeld
     *
     * @param integer $channelId
     * @return $this
     */
    public function setChannelid($channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Method to set the value of field studentId
     *
     * @param integer $studentId
     * @return $this
     */
    public function setStudentid($studentId)
    {
        $this->studentId = $studentId;

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
     * Method to set the value of field modifiedAt
     *
     * @param string $modifiedAt
     * @return $this
     */
    public function setModifiedat($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

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
     * Returns the value of field channeld
     *
     * @return integer
     */
    public function getChannelid()
    {
        return $this->channelId;
    }

    /**
     * Returns the value of field studentId
     *
     * @return integer
     */
    public function getStudentid()
    {
        return $this->studentId;
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

    /**
     * Returns the value of field modifiedAt
     *
     * @return string
     */
    public function getModifiedat()
    {
        return $this->modifiedAt;
    }

    public function getSource()
    {
        return 'channel_student';
    }

    /**
     * @return ChannelStudent[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return ChannelStudent
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
            'channelId' => 'channelId', 
            'studentId' => 'studentId', 
            'createdAt' => 'createdAt', 
            'modifiedAt' => 'modifiedAt'
        );
    }
    /**
    * Initialize 
    */
    public function initialize()
    {
        $this->belongsTo('studentId','Learn\Models\Users','id',array(
            'alias'=>'user'));
    }

}
