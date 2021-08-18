<?php 
//<------------------------------------Developer Information------------------------------------->
 // Template MOZField: Adewumi  Adewale 
//Phone Number: +2347031828170
//Company Name: Starcom Emerald Developer Global Enterprise
 //    Description: WEB APPLICATION {M.V.C} Development System.
 //    Author: STARCOM EMERALD DEVELOPER
 //    Version: 1.0

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

  function __construct()
  {
        parent::__construct();

        $data['info'] = $this->Page_model->home_info();
        if ($data['info']['theme']==false) {
          # code...
          die("Website is Down");
        }

        // $this->tree_change();
  }

  public function index($page='index')
	{
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

			// $data['footer_post'] = $this->Page_model->foot_post();
			        $data['title'] = 'Plumbing, Air Conditioning, Electrical'; // Capitalize the first letter
              // print_r($this->Page_model->home_info());
              $data['info'] = $this->Page_model->home_info();
              $data['blogs'] = $this->Page_model->blog_table();
              $data['teams'] = $this->Page_model->team_table();
                    $this->load->view('template/header', $data);
			           $this->load->view('pages/'.$page, $data);
                    $this->load->view('template/footer', $data);
	}

  public function about()
  {
    $data['title'] = 'About Us'; // Capitalize the first letter
               $data['info'] = $this->Page_model->home_info();
                    $this->load->view('template/header', $data);
                 $this->load->view('pages/about', $data);
                    $this->load->view('template/footer', $data); 
  }

  public function plumbing()
  {
    $data['title'] = 'Plumbing Services'; // Capitalize the first letter
     $data['page'] ='Plumbing Services';
      $data['service'] ='Services';
              $data['info'] = $this->Page_model->home_info();
                    $this->load->view('template/header', $data);
                 $this->load->view('pages/plumbing_service', $data);
                    $this->load->view('template/footer', $data); 
  }

  public function electrical()
  {
    $data['title'] = 'Electrical Services'; // Capitalize the first letter
     $data['page'] ='Electrical';
      $data['service'] ='Services';
              $data['info'] = $this->Page_model->home_info();
                    $this->load->view('template/header', $data);
                 $this->load->view('pages/electrical_services', $data);
                    $this->load->view('template/footer', $data); 
  }

  public function air()
  {
    $data['title'] = 'Air Condition Services'; // Capitalize the first letter
     $data['page'] ='Air Conditional';
    $data['service'] ='Services';
            $data['info'] = $this->Page_model->home_info();
                  $this->load->view('template/header', $data);
               $this->load->view('pages/air_condition', $data);
                  $this->load->view('template/footer', $data); 
  }

  public function payment()
  {
    $data['title'] = 'Pay Online'; // Capitalize the first letter
    $data['page'] ='Pay Online';
    $data['service'] ='Payment';
    $data['info'] = $this->Page_model->home_info();
    $this->load->view('template/header', $data);
    $this->load->view('pages/payment', $data);
    $this->load->view('template/footer', $data); 
  }

  public function faq()
  {
    $data['title'] = 'Frequently Asked Questions'; // Capitalize the first letter
    $data['info'] = $this->Page_model->home_info();
    $this->load->view('template/header', $data);
    // $this->load->view('pages/faq', $data);
    $this->load->view('pages/coming', $data);
    $this->load->view('template/footer', $data); 
  }

  public function admin_logout()
  {


    
    
        
    $data['info'] = $this->Page_model->home_info();
    $this->session->unset_userdata('user_logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata("logout","You have succesfully log out");
      
              redirect('page/login','refresh');
  }

  public function careers()
  {
    $data['title'] = 'Careers'; // Capitalize the first letter
    $data['page'] ='Team Careers';
    $data['service'] ='Careers';
    $data['info'] = $this->Page_model->home_info();
    $this->load->view('template/header', $data);
    $this->load->view('pages/careers', $data);
    $this->load->view('template/footer', $data); 
  }

  public function login()
  {
    if ($this->session->userdata('user_logged_in') ) {
      redirect('dashboard','refresh');
    }

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
                
      $data['title'] = 'Login Page'; // Capitalize the first letter
      $data['info'] = $this->Page_model->home_info();
      $this->load->view('template/header', $data);
      // $this->load->view('pages/faq', $data);
      $this->load->view('pages/login', $data);
      $this->load->view('template/footer', $data); 

    } else {
      $username =  strtolower($this->input->post('username'));
      $password =  strtolower($this->input->post('password'));
      $pass = md5($password);

      $user_id = $this->Page_model->user_login($username,$pass);

      if ($user_id) {
        $user_data =array(
          'user_id' => $user_id,
          'username' => $username,
          'password' => $password,
          'user_logged_in' => TRUE
        );
        $this->session->set_userdata($user_data);
        $data['title'] = 'Dashboard';
        '<script>alert("Welcome to Belbec Dashboard")</script>';
        redirect('admin/dashboard','refresh',$data);
      }else{

        $this->session->set_flashdata("login_failed","Invalid Username or Password");                                
        $data['title'] = 'Login Page'; // Capitalize the first letter
        $data['info'] = $this->Page_model->home_info();
        $this->load->view('template/header', $data);
        // $this->load->view('pages/faq', $data);
        $this->load->view('pages/login', $data);
        $this->load->view('template/footer', $data); 
      }
    }
  }

  public function staff_info($id=null)
  {

    if ($id==false) {
      redirect('our_team','refresh');
    }
          $data['staff'] = $this->Page_model->staff($id); 
              $data['title'] = 'Meet Team '; // Capitalize the first letter
             $data['info'] = $this->Page_model->home_info();
                    $this->load->view('template/header', $data);
                 $this->load->view('pages/staff_info', $data);
                    $this->load->view('template/footer', $data); 
  }

  public function blog()
  {
    $data['title'] = 'Blog'; // Capitalize the first letter
    $data['page'] ='Blog';
    $data['service'] ='Latest News';
    $data['blogs'] = $this->Page_model->blog();
    $data['info'] = $this->Page_model->home_info();
    $this->load->view('template/header', $data);
    $this->load->view('pages/blog', $data);
    $this->load->view('template/footer', $data); 
  }

  public function team()
  {
    $data['title'] = 'Our Team'; // Capitalize the first letter
    $data['info'] = $this->Page_model->home_info();
    $data['staffs'] = $this->Page_model->staff_info();
    $data['boards'] = $this->Page_model->board_info();
    $this->load->view('template/header', $data);
    $this->load->view('pages/team', $data);
    $this->load->view('template/footer', $data); 
  }

  public function view_blog($slug=null)
  {
    if (empty($slug)|| $this->Page_model->post($slug)==false) {
            // redirect('Page/error','refresh');
          }

         $data['title'] = 'Latest News'; // Capitalize the first letter
               $data['info'] = $this->Page_model->home_info();
                $data['blog'] = $this->Page_model->post($slug);
                    $this->load->view('template/header', $data);
                    $this->load->view('pages/single_blog', $data);
                    $this->load->view('template/footer', $data);
  }

  public function error()
  {
    $data['title'] = 'Latest News'; // Capitalize the first letter
                 $data['info'] = $this->Page_model->home_info();
                  // $data['blog'] = $this->Page_model->post($slug);
                      $this->load->view('template/header', $data);
                      $this->load->view('pages/error', $data);
                      $this->load->view('template/footer', $data);
  }

  public function coming()
  {
    $data['title'] = 'Latest News'; // Capitalize the first letter
    $data['info'] = $this->Page_model->home_info();
    // $data['blog'] = $this->Page_model->post($slug);
    $this->load->view('template/header', $data);
    $this->load->view('pages/coming', $data);
    $this->load->view('template/footer', $data);
  }

  public function contact()
  {
    $data['title'] = 'Contact Us'; // Capitalize the first letter
    $data['page'] ='Contact Us';
    $data['service'] ='Contact';

    $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');
    $this->form_validation->set_rules('phone', 'Mobile Number', 'trim|numeric');
    $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
    $this->form_validation->set_rules('message', 'Message', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
        $data['title'] = 'Contact Us'; // Capitalize the first letter
        $data['info'] = $this->Page_model->home_info();
        $this->load->view('template/header', $data);
        $this->load->view('pages/contact', $data);
        $this->load->view('template/footer', $data);
    } else {
        $this->Page_model->contact_us();
        $data['title'] = 'Contact Us'; // Capitalize the first letter
        $data['info'] = $this->Page_model->home_info();
        $this->load->view('template/header', $data);
        $this->load->view('pages/contact', $data);
        $this->load->view('template/footer', $data);
    }
  }

  public function service()
  {
    $data['title'] = 'Request Services'; // Capitalize the first letter
    $data['page'] ='Request Services';
    $data['service'] ='';
    $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');
    $this->form_validation->set_rules('phone', 'Mobile Number', 'trim|numeric');
    $this->form_validation->set_rules('state', 'State', 'trim|required');
    $this->form_validation->set_rules('address', 'Location Address', 'trim|required');
    $this->form_validation->set_rules('product', 'Services Needs', 'trim|required');
    $this->form_validation->set_rules('servicecategory', 'Services Category', 'trim|required');
    $this->form_validation->set_rules('apartment', 'Apartment', 'trim|required');
    $this->form_validation->set_rules('apartmenttype', 'Apartment Type', 'trim|required');
    $this->form_validation->set_rules('services', 'Services Needed', 'trim|required');
    $this->form_validation->set_rules('date_desire', 'Date Desired', 'trim|required');
    $this->form_validation->set_rules('time_desire', 'Time Desired', 'trim|required');
    // $this->form_validation->set_rules('address', 'Location Address', 'trim|required');
     
     
    
    $this->form_validation->set_rules('message', 'Message', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = 'Contact Us'; // Capitalize the first letter
      $data['info'] = $this->Page_model->home_info();
      $this->load->view('template/header', $data);
      $this->load->view('pages/create_service', $data);
      $this->load->view('template/footer', $data);
    } else {                      
      $data= array(
          'name' => $this->input->post('name'),
           'email' => $this->input->post('email'),
            // 'phone' => $this->input->post('phone'),
            'phone' => $this->input->post('phone'),
            'state' => $this->input->post('state'),
            'services' => $this->input->post('services'),
             'address' => $this->input->post('address'),
            'message' => $this->input->post('message'),
            'date_desire' => $this->input->post('date_desire'),
            'time_desire' => $this->input->post('time_desire')
      );

     
      $this->db->insert('services', $data);
      $name = $this->input->post('name');
      $this->session->set_flashdata('success_request', 'Thank You, Dear Customer for your Request. You will get the feedback soon.');

      // $this->Page_model->services();
      $data['title'] = 'Contact Us'; // Capitalize the first letter
      $data['info'] = $this->Page_model->home_info();
      $this->load->view('template/header', $data);
      $this->load->view('pages/create_service', $data);
      $this->load->view('template/footer', $data);
    }
  }

  public function apply()
  {

    $data['title'] = 'Request Services'; // Capitalize the first letter
    $data['page'] ='Request Services';
    $data['service'] ='';
    $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
    $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|required');
    $this->form_validation->set_rules('phone', 'Mobile Number', 'trim|numeric');
    $this->form_validation->set_rules('state', 'State', 'trim|required');
    $this->form_validation->set_rules('gender', 'Applicant Gender', 'trim|required');
    $this->form_validation->set_rules('country', 'Applicant Country', 'trim|required');
    $this->form_validation->set_rules('services', 'Services Needed', 'trim|required');
    $this->form_validation->set_rules('disability', 'Applicant Status', 'trim|required');
    $this->form_validation->set_rules('experience', 'Applicant Experience Year', 'trim|required');
    $this->form_validation->set_rules('message', 'Applicant Experience', 'trim|required');
    $this->form_validation->set_rules('address', 'Applicant Location Address', 'trim|required');
       
       
    if ($this->form_validation->run() == FALSE) {
      $data['title'] = 'Join The team'; // Capitalize the first letter
      $data['info'] = $this->Page_model->home_info();
      $this->load->view('template/header', $data);
      $this->load->view('pages/apply', $data);
      $this->load->view('template/footer', $data);
   
    } else {

      $config['upload_path'] = './assets/cv';
      $config['allowed_types'] = 'pdf|doc|txt';
      $config['max_size']     = '0';
      $config['file_name'] = $_FILES["userfile"]['name'];
      $config['overwrite']= TRUE;
      
      $this->load->library('upload', $config);

      if ( !$this->upload->do_upload('userfile'))
      {
        $error = array('error' => $this->upload->display_errors());

        // $post_image = "no_pics.jpg";
        echo "<script>alert('Upload the CV')</script>";
        redirect('page/apply','refresh');
      }else{
        $data = array('upload_data' => $this->upload->data());
        $cv = $_FILES['userfile']['name'];
      }


                  
      $data= array(
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname'),
          'email' => $this->input->post('email'),
          'gender' => $this->input->post('gender'),
          'country' => $this->input->post('country'),
          'phone' => $this->input->post('phone'),
          'state' => $this->input->post('state'),
          'services' => $this->input->post('services'),
          'address' => $this->input->post('address'),
          'message' => $this->input->post('message'),
          'experience' => $this->input->post('experience'),
          'disability' => $this->input->post('disability'),
          'image'=>$cv
      );

       
      $this->db->insert('applicant', $data);
      $name = $this->input->post('name');
      $this->session->set_flashdata('success_request', 'Thank You, Dear Applicant for your Information Submission. You will get the feedback soon.');

      // $this->Page_model->services();
      $data['title'] = 'Join The team'; // Capitalize the first letter
      $data['info'] = $this->Page_model->home_info();
      $this->load->view('template/header', $data);
      $this->load->view('pages/apply', $data);
      $this->load->view('template/footer', $data);
     
    }  
  }

  public function single_blog()
  {
    $data['title'] = 'Blog'; // Capitalize the first letter
    $data['page'] ='Blog';
    $data['service'] ='News';
    $data['info'] = $this->Page_model->home_info();
    $this->load->view('template/header', $data);
    $this->load->view('pages/single_blog', $data);
    $this->load->view('template/footer', $data); 
  }

}