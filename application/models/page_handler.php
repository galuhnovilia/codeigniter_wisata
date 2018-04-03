<?php
class Page_handler extends CI_Model {
    Public function isLoggedin(){
        return $this->session->userdata("username");
    }
    public function member_page(){
        if ($this->isLoggedin())
        {
            return true;
        } else {
            redirect(base_url(),"refresh");
        }
    }
}