<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_account_payment extends API_Controller {
    /*
     * Access Control List
     * 1    - createAccountPayment
     * 2    - retrieveAccountPayment
     * 4    - updateAccountPayment
     * 8    - deleteAccountPayment
     * 16   - batchCreateAccountPayment
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("m_account_payment");
        $this->APICONTROLLERID = 1;
    }
    public function createAccountPayment(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->form_validation->set_rules('assessment_item_ID', 'Assessment Item', 'required');
            $this->form_validation->set_rules('account_ID', 'Acount ID', 'required');
            $this->form_validation->set_rules('amount', 'Amount', 'required');
            $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'required');
            $this->form_validation->set_rules('description', 'Payment Mode', 'required');
            
            if($this->form_validation->run()){
                $result = $this->m_account_payment->createAccountPayment(
                        $this->input->post("assessment_item_ID"),
                        $this->input->post("account_ID"),
                        $this->input->post("amount"),
                        $this->input->post("payment_mode"),
                        user_id(),
                        $this->input->post("description")
                        );
                if($result){
                    $this->actionLog($result);
                    $this->responseData($result);
                }else{
                    $this->responseError(3, "Failed to create");
                }
            }else{
                if(count($this->form_validation->error_array())){
                    $this->responseError(102, $this->form_validation->error_array());
                }else{
                    $this->responseError(100, "Required Fields are empty");
                }
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function createGroupAccountPayment(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->form_validation->set_rules('assessment_item_ID', 'Assessment Item', 'required');
            $this->form_validation->set_rules('local_chapter_group_ID', 'Local Group', 'required');
            $this->form_validation->set_rules('amount', 'Amount', 'required');
            $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            
            if($this->form_validation->run()){
                $this->load->model("M_account");
                $groupMember = $this->M_account->retrieveAccount(0, NULL, 0, NULL, NULL, array(
                    "account_local_chapter_group__local_chapter_group_ID" => $this->input->post("local_chapter_group_ID")
                ));
                
                $result = true;
                if($groupMember){
                    foreach($groupMember as $groupMemberValue){
                        $amount = 5600;
                        if($groupMemberValue["local_chapter_position_ID"]*1 == 1 || $groupMemberValue["local_chapter_position_ID"]*1 == 2 || $groupMemberValue["local_chapter_position_ID"]*1 == 3 ){
                            $amount = 5700;
                        }
                        $this->m_account_payment->createAccountPayment(
                            $this->input->post("assessment_item_ID"),
                            $groupMemberValue["ID"],
                            $amount,
                            $this->input->post("payment_mode"),
                            user_id(),
                            $this->input->post("description")
                        );
                    }
                }else{
                    $result = false;
                }
                
                if($result){
                    $this->actionLog($result);
                    $this->responseData($result);
                }else{
                    $this->responseError(3, "Failed to create");
                }
            }else{
                if(count($this->form_validation->error_array())){
                    $this->responseError(102, $this->form_validation->error_array());
                }else{
                    $this->responseError(100, "Required Fields are empty");
                }
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function retrieveAccountPayment(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            $result = $this->m_account_payment->retrieveAccountPayment(
                    $this->input->post("retrieve_type"),
                    $this->input->post("limit"),
                    $this->input->post("offset"), 
                    $this->input->post("sort"),
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($this->input->post("limit")){
                $this->responseResultCount($this->m_account_payment->retrieveAccountPayment(
                    1,
                    NULL,
                    NULL,
                    NULL,
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    ));
            }
            if($result){
                $this->actionLog(json_encode($this->input->post()));
                $this->responseData($result);
            }else{
                $this->responseError(2, "No Result");
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function updateAccountPayment(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            
            $result = $this->m_account_payment->updateAccountPayment(
                    $this->input->post("ID"),
                    $this->input->post("condition"),
                    $this->input->post("updated_data")
                    );
            if($result){
                $this->actionLog(json_encode($this->input->post()));
                $this->responseData($result);
            }else{
                $this->responseError(3, "Failed to Update");
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
    public function deleteAccountPayment(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_account_payment->deleteAccountPayment(
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($result){
                $this->actionLog(json_encode($this->input->post()));
                $this->responseData($result);
            }else{
                $this->responseError(3, "Failed to delete");
            }
        }else{
            $this->responseError(1, "Not Authorized");
        }
        $this->outputResponse();
    }
}
