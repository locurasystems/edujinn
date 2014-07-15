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
    protected $form_user;

    /**
     *
     * @var integer
     */
    protected $to_user;

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
     * Method to set the value of field form_user
     *
     * @param integer $form_user
     * @return $this
     */
    public function setFormUser($form_user)
    {
        $this->form_user = $form_user;

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
     * Returns the value of field form_user
     *
     * @return integer
     */
    public function getFormUser()
    {
        return $this->form_user;
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
            'form_user' => 'form_user', 
            'to_user' => 'to_user', 
            'type_id' => 'type_id', 
            'text' => 'text', 
            'isdisplay' => 'isdisplay', 
            'createdAt' => 'createdAt'
        );
    }

}
