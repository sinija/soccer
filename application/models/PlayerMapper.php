<?php

class Application_Model_PlayerMapper
{
  protected $_dbTable;

  public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception("Invalid table data $dbTable provided");
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable("Application_Model_DbTable_Player");
        }
        return $this->_dbTable;
    }

    public function find($id, Application_Model_Player $guestbook)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $guestbook->setId($row->id)
                  ->setName($row->name)
                  ->setImage($row->image)
                  ->setIsActive($row->isActive);
    }
 
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new Application_Model_Player();
            $entry->setId($row->id)
                  ->setName($row->name)
                  ->setImage($row->image)
                  ->setIsActive($row->isActive);
            $entries[] = $entry;
        }
        return $entries;
    }
}

