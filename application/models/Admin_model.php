<?php 
//<------------------------------------Developer Information------------------------------------->
 // Template Belbec: Adewumi  Adewale 
//Phone Number: 07031828170
//Company Name: Starcom Emerald Developer Global Enterprise
 //    Description: Geneology Development System.
 //    Author: Colorlib
 //    Version: 1.0

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


            public function Admin_get()
			{
					// $query = $this->db->query("SELECT * FROM  product_quantity where  product_category = 'food-stuff' && product_status='1'");
					// return $query->result_array();

					$this->db->select('*');
					
					$this->db->from('web_info');

					//$this->db->join('product_quantity','product.product_id = product_quantity.product_id');
					$this->db->where('id', 1);
					$query = $this->db->get(); 
					 return $query->row_array();
		 

			}


			 public function admin_info()
        {
			        	
				$data = array(
			               
			                'web_name' =>$this->input->post('web_name'),
			                'web_email' =>$this->input->post('web_email'),
			                'phone1' =>$this->input->post('phone1'),
			                'tech_mail' =>$this->input->post('tech_mail'),
			                'phone2' =>$this->input->post('phone2'),
			                'address' =>$this->input->post('address'),
			                 'about' =>$this->input->post('about'),
			                  'mission' =>$this->input->post('mission'),
			                   'ideology' =>$this->input->post('ideology'),
			                   'vision' =>$this->input->post('vision'),
			                'linkedin' =>$this->input->post('linkedin'),
			                'twitter' =>$this->input->post('twitter'),
			                'facebook' =>$this->input->post('facebook'),
			                'pin_instrest' =>$this->input->post('pin_instrest')
			            );

			            $this->db->where('id', 1);
			                $this->db->update('web_info', $data);
			                $this->session->set_flashdata("success_info","Website Information Succesfully Updated");

        }



        public function blog_table()
			{
				$query = $this->db->get('blog');
				$this->db->limit(3);
			return $query->result_array();
			}


        public function staff_table()
			{
				$query = $this->db->get('member');
			return $query->result_array();
			}


			public function member_profile($id)
			{
				$query = $this->db->query("SELECT * FROM member where  id = '$id'");
                         return $query->row_array(); 
			}

			

				public function contact_report()
				{
					$query = $this->db->get('contact_us');
			return $query->result_array();
				}
				public function services_table()
				{
				$query = $this->db->get('services');
			return $query->result_array();
				}

				public function applicant_table()
				{
				$query = $this->db->get('applicant');
				$this->db->order_by('id', 'desc');
					return $query->result_array();
				}

}



?>