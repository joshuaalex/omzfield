<?php 
//<------------------------------------Developer Information------------------------------------->
 // Template Belbec: Adewumi  Adewale 
//Phone Number: 07031828170
//Company Name: Starcom Emerald Developer Global Enterprise
 //    Description: Geneology Development System.
 //    Author: Colorlib
 //    Version: 1.0

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model {
    
  public function __construct()
  {
    $this->load->database();
  }

  public function home_info()
  {
  	$query = $this->db->get('web_info');
    return $query->row_array();
  }

  public function user_login($username,$pass)
  {
    $this->db->select('*');
    $this->db->where('username', $username);
    $this->db->where('password', $pass);
  
    $result = $this->db->get('admin');
    if ($result->num_rows()==1) {
      return $result->row(0)->id;
    }else{
      return false;
    }
  }
  
  public function contact_us()
  {
    $data= array(
        'name' => $this->input->post('name'),
         'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'subject' => $this->input->post('subject'),
          'message' => $this->input->post('message')
    );

   
    $this->db->insert('contact_us', $data);
    $name = $this->input->post('name');
    $this->session->set_flashdata('success_contact_save', 'Thank You,<strong>  '.$name.' </strong> for your Message.');
  }

  public function blog_table()
  {
    $query = $this->db->get('blog');
    $this->db->order_by('id', 'DESC');
    $this->db->limit(3);
    return $query->result_array();
  }

  public function team_table()
  {
    $query = $this->db->get('member');
    $this->db->limit(3);
    return $query->result_array();
  }

  public function post($slug)
  {
    $query = $this->db->query("SELECT * FROM blog where  slug = '$slug'");
    return $query->row_array();
  }

  public function staff_info()
  {
    $query = $this->db->query("SELECT * FROM member where  level = 'staff'");      
    return $query->result_array();
  }

  public function staff($id)
  {
    $query = $this->db->query("SELECT * FROM member where  id = '$id'");
    return $query->row_array();
  }

  public function blog()
  {
    $query = $this->db->get('blog');
    $this->db->order_by('id', 'DESC');
    return $query->result_array();
  }
  
  public function board_info()
  {
    $query = $this->db->query("SELECT * FROM member where  level = 'board'");
    return $query->result_array();
  }

}
