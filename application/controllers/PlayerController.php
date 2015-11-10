<?php

class PlayerController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
      $player = new Application_Model_PlayerMapper();
      $this->view->player = $player->fetchAll();
    }


}

