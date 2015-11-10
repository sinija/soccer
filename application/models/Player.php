<?php

class Application_Model_Player
{

  protected $_id;
  protected $_name;
  protected $_image;
  protected $_isActive;

  public function __construct() 
  {


  }

    public function __set($name, $value)
    {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid player property');
        }
        $this->$method($value);
    }
 
    public function __get($name)
    {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid player property');
        }
        return $this->$method();
    }
 
    public function setOptions(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

  public function setId($id) {
    $this->_id = (string) $id;
    return $this;
  }

  public function getId() {
    return $this->_id;
  }

  public function setName($name) {
    $this->_name = (string) $name;
    return $this;
  }

  public function getName() {
    return $this->_name;
  }

  public function setImage($img) {
    $this->_image = (string) $img;
    return $this;
  }

  public function getImage() {
    return $this->_image;
  }

  public function setIsActive($status) {
    $this->_isActive = (string) $status;
    return $this;
  }

  public function getIsActive() {
    return $this->_isActive;
  }
}

