<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function index(){
        $this->load->view('home');
    }
    public function sample(){
        $this->load->view('sample_page');
    }
    public function about(){
        $this->load->view('about');
    }
    public function services(){
        $this->load->view('services');
    }
    public function service_details(){
        $this->load->view('service_details');
    }
    public function blog(){
        $this->load->view('blog');
    }
    public function blog_details(){
        $this->load->view('blog_details');
    }
    public function gallery(){
        $this->load->view('gallery');
    }
    public function contact(){
        $this->load->view('contact');
    }
    public function donate(){
        $this->load->view('donate');
    }
    public function recivedonation(){
        $this->load->view('recivedonation');
    }
    public function joinus(){
        $this->load->view('joinus');
    }
    public function pageload(){
        $this->load->view('pageload'); // page load = 404 
    }
}