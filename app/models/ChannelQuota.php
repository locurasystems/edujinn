<?php

namespace Learn\Models;

class ChannelQuota extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $diskspace;

    /**
     *
     * @var string
     */
    protected $bandwidth;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $login;

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
     * Method to set the value of field diskspace
     *
     * @param string $diskspace
     * @return $this
     */
    public function setDiskspace($diskspace)
    {
        $this->diskspace = $diskspace;

        return $this;
    }

    /**
     * Method to set the value of field bandwidth
     *
     * @param string $bandwidth
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->bandwidth = $bandwidth;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field login
     *
     * @param string $login
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

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
     * Returns the value of field diskspace
     *
     * @return string
     */
    public function getDiskspace()
    {
        return $this->diskspace;
    }

    /**
     * Returns the value of field bandwidth
     *
     * @return string
     */
    public function getBandwidth()
    {
        return $this->bandwidth;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    public function getSource()
    {
        return 'channel_quota';
    }

    /**
     * @return ChannelQuota[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return ChannelQuota
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
            'diskspace' => 'diskspace', 
            'bandwidth' => 'bandwidth', 
            'user_id' => 'user_id', 
            'login' => 'login'
        );
    }

}
