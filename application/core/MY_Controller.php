<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();	  // parameters for view components
    protected $id;				  // identifier for our content
    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct()
    {
        parent::__construct();
        $this->data = array();
        $this->errors = array();
        $this->data['title'] = 'Stock Ticker';
        if($this->session->userdata('Player') !== null)
        {
            $this->data['loginout'] = 'Log Out';
            $this->data['loghref'] = '/account/logout';
        }
        else
        {
            $this->data['loginout'] = 'Log In';
            $this->data['loghref'] = '/account';
        }
        $this->data['sidemenu'] = $this->parser->parse('_sidemenu', $this->data, true);
    }   
//    //generates sidebar menu depending on what role of current user
//    function makemenu() {
//        $userRole = $this->session->userdata('userrole');
//        $choices = array();
//        $choices[] = array('name' => 'Home', 'link' => '/');
//        if($userRole == ROLE_ADMIN) {
//            
//        } else if($userRole == ROLE_USER) {
//            
//        }
//    }
    /**
     * Render this page
     */
    function render()
    {
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        // finally, build the browser page!
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }
}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */