<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_local_chapter
 *
 * @author johnenrick
 */
class M_local_chapter extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "local_chapter";
    }
    public function createLocalChapter($description, $chapterType, $address, $region){
        $newData = array(
            "description" => $description,
            "chapter_type" => $chapterType,
            "address" => $address,
            "region" => $region
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveLocalChapter($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "local_chapter.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateLocalChapter($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteLocalChapter($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
