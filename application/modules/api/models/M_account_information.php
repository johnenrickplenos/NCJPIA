<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_account_information
 *
 * @author johnenrick
 */
class M_account_information extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "account_information";
    }
    public function createAccountInformation($accountID, $firstName, $middleName, $lastName, $localChapterID, $localChapterPositionID, $contactNumber, $emailAddress, $identificationFileUploadedID, $tshirtSize){
        $newData = array(
            "account_ID" => $accountID,
            "first_name" => $firstName,
            "middle_name" => $middleName,
            "last_name" => $lastName,
            "local_chapter_group_ID" => $localChapterID,
            "local_chapter_position_ID" => $localChapterPositionID,
            "contact_number" => $contactNumber,
            "email_address" => $emailAddress,
            "identification_file_uploaded_ID" => $identificationFileUploadedID,
            "tshirt_size" => $tshirtSize
            
            
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveAccountInformation($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "account_information.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateAccountInformation($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteAccountInformation($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
