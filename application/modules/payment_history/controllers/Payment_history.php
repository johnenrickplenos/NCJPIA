<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of portal
 *
 * @author johnenrick
 */
class Payment_histry extends FE_Controller{
    //put your code here
    function index(){
        $this->loadPage("delegate_list", array("delegate_list_script", "delegate_list_summary_script", "serving_script"), array("message" => false));
        $this->load->view("system_application/system");
        $this->load->view("system_application/system_script");
    }
    function test(){
        $this->loadPage("test_form", array(), array("message" => false));
    }
}
