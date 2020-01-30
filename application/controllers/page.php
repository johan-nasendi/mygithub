<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class page extends CI_Controller {

    public function inde() {
        $this->load->view('partial/header');
        $this->load->view('profile');
        $this->load->view('partial/footer');
    }

    public function profile() {
        $this->load->view('partial/header');
        $this->load->view('profile');
        $this->load->view('partial/footer');
    }

    public function gallery (){
        $this->load->view('partial/header');
        $this->load->view('gallery');
        $this->load->view('partial/footer');
    }

    public function contact () {
        $this->load->view('partial/header');
        $this->load->view('contact');
        $this->load->view('partial/footer');
    }

    public function singup (){
        $this->load->view('partial/header');
        $this->load->view('new_form');
        $this->load->view('partial/footer');
    }
  
}
