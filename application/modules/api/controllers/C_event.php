<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_event extends API_Controller {
    /*
     * Access Control List
     * 1    - createEvent
     * 2    - retrieveEvent
     * 4    - updateEvent
     * 8    - deleteEvent
     * 16   - batchCreateEvent
     */
    public function __construct() {
        parent::__construct();
        $this->load->model("m_event");
        $this->APICONTROLLERID = 1;
    }
    public function createEvent(){
        $this->accessNumber = 1;
        if($this->checkACL()){
            $this->form_validation->set_rules('first_parameter', 'First Parameter', 'required');
            
            if($this->form_validation->run()){
                $result = $this->m_event->createEvent(
                        $this->input->post("first_parameter")
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
    public function retrieveEvent(){
        $this->accessNumber = 2;
        if($this->checkACL()){
            $result = $this->m_event->retrieveEvent(
                    $this->input->post("retrieve_type"),
                    $this->input->post("limit"),
                    $this->input->post("offset"), 
                    $this->input->post("sort"),
                    $this->input->post("ID"), 
                    $this->input->post("condition")
                    );
            if($this->input->post("limit")){
                $this->responseResultCount($this->m_event->retrieveEvent(
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
    public function updateEvent(){
        $this->accessNumber = 4;
        if($this->checkACL()){
            
            $result = $this->m_event->updateEvent(
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
    public function deleteEvent(){
        $this->accessNumber = 8;
        if($this->checkACL()){
            $result = $this->m_event->deleteEvent(
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
