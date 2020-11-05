<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function __construct(){
//parent::__construct();	 
date_default_timezone_set("Asia/Bangkok");
}

class Homepage extends CI_Controller {

/**
 * Index Page for this controller.
 *
 * Maps to the following URL
 * 		http://example.com/index.php/welcome
 *	- or -
 * 		http://example.com/index.php/welcome/index
 *	- or -
 * Since this controller is set as the default controller in
 * config/routes.php, it's displayed at http://example.com/
 *
 * So any other public methods not prefixed with an underscore will
 * map to /index.php/welcome/<method_name>
 * @see https://codeigniter.com/user_guide/general/urls.html
 */

public function index(){
$data = array();
$this->template->load('template','frontend/home',$data);
}

function about(){
$data = array();
$this->template->load('template','frontend/about',$data);
}

function team(){
$data = array();
$this->template->load('template','frontend/team',$data);
}

function testimonials(){
$data = array();
$this->template->load('template','frontend/testimonials',$data);
}

function services(){
$data = array();
$this->template->load('template','frontend/services',$data);
}

function portfolio(){
$data = array();
$this->template->load('template','frontend/portfolio',$data);
}

function pricing(){
$data = array();
$this->template->load('template','frontend/pricing',$data);
}

function blog(){
$data = array();
$this->template->load('template','frontend/blog',$data);
}

function contact(){
$data = array();
$this->template->load('template','frontend/contact',$data);
}

function daftar(){
$data = array();
$this->template->load('template','frontend/daftar',$data);
}


}
