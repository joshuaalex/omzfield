<?php
class Admin extends CI_Controller {

//<------------------------------------Developer Information------------------------------------->
 // Template Belbec: Adewumi  Adewale 
//Phone Number: 07031828170
//Company Name: Starcom Emerald Developer Global Enterprise
 //    Description: Geneology Development System.
 //    Author: Colorlib
 //    Version: 1.0


public function __construct()
  {
    parent::__construct();
// $user= $this->session->userdata('username');
    if (!$this->session->userdata('user_logged_in') ) {
       

  redirect('page/login','refresh');
          
  }

}



public function index($admin = 'index')
{
        if ( ! file_exists(APPPATH.'views/admin/'.$admin.'.php'))
        {
                // Whoops, we don't have a admin for that!
                show_404();
        }

        $data['title'] = 'Administrator Dashboard'; // Capitalize the first letter
        $data['section'] =   'Administrator';
        $data['page'] =   'Control Panel';
        $this->load->view('template/admin_header', $data);
        $this->load->view('admin/'.$admin, $data);
        $this->load->view('template/admin_footer' , $data);
}


//User Info Details 






        public function add_news()
                {       
                    $this->form_validation->set_rules('post_title', 'Post Title', 'trim|required');
                    $this->form_validation->set_rules('body', 'News Content', 'trim|required');
                        if ($this->form_validation->run() == FALSE) {

                            $data['title'] ='Add News';
                        $data['section'] =   'Blog';
                        $data['page'] =   'Add News';
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/add_news', $data);
                        $this->load->view('template/admin_footer' , $data);
                        } else {

                        $config['upload_path'] = './assets/post_image';
                        $config['allowed_types'] = 'gif|jpg|png|JPG|PNG|JPEG|jpeg|GIF';
                        $config['max_size']     = '0';
                        $config['max_width'] = '0';
                        $config['max_height'] = '0';
                        $config['file_name'] = $_FILES["userfile"]['name'];
                        $config['overwrite']= TRUE;

                        $this->load->library('upload', $config);

                     if ( !$this->upload->do_upload('userfile'))
                                {
                                        $error = array('error' => $this->upload->display_errors());

                                        $post_image = "no_pics.jpg";
                                }
                                else
                                {

                                   
                                        $data = array('upload_data' => $this->upload->data());
                                       
                                        $post_image = $_FILES['userfile']['name'];

                                }

                               $slug = url_title($this->input->post('post_title'));
                                $date = date('dS M,Y');
                                 $data = array(
                                 'title' => $this->input->post('post_title'),
                                 'slug' =>$slug,
                                      'body' => $this->input->post('body'),
                                      'post_image'=> $post_image,
                                      'date'=> $date
                                       
                                        );

                                    $this->db->insert('blog', $data);
                                     $this->session->set_flashdata("success_post","Post Successfully Publish");
                               
                            $data['title'] ='Add News';
                        $data['section'] =   'Blog';
                        $data['page'] =   'Add News';

                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/add_news', $data);
                        $this->load->view('template/admin_footer' , $data);
                        }
                }






     public function first_image($field)
    {
        $config['upload_path']   = './assets/image/service'; 
        $config['allowed_types'] = 'jpg|gif|jpeg|png'; 
        $config['max_size']      = 2000000; 
        $config['overwrite'] = true;
        // $config['max_width']     = 1024; 
         //$config['max_height']    = 768;  
        $this->load->library('upload', $config);
      
            if(!$this->upload->do_upload('featured_image')) {
               $error = array('error' => $this->upload->display_errors()); 
               //$this->load->view('upload', $error); 
               // //echo "err here";
               // print_r($error['error']);
               // $file_name = $error['error'];//"error";
               $file_name = "no_pics.jpg";
            }
        
            else { 
               //echo "yes";

              $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
              //print_r($upload_data);
              $file_name = $upload_data['file_name'];
            } 
      return $file_name;
    }




                public function update_profile($id=null)
                {
                        if ($id==false) {
                            redirect('admin/dashboard','refresh');
                        }

                        $this->form_validation->set_rules('name', 'Staff Name', 'trim|required');
                         $this->form_validation->set_rules('post', 'Office Title', 'trim|required');
                         $this->form_validation->set_rules('profile', 'Staff Profile', 'trim');
                            // print_r($this->Admin_model->member_profile($id))
                            $data['profile_data'] = $this->Admin_model->member_profile($id);
                       if ($this->form_validation->run() ==  FALSE) {
                            $data['title'] ='Add Memeber Profile';
                        $data['section'] =  'Member';
                        $data['page'] =   'Create Profile';
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/update_profile', $data);
                        $this->load->view('template/admin_footer' , $data);
                       } else {

                                        
                // $user =$_SESSION['username'];
                $config['upload_path'] = './assets/images/team';
                $config['allowed_types'] = 'gif|jpg|png|JPG|PNG|JPEG|jpeg|GIF';
                $config['max_size']     = '100000';
                 $config['max_width']  = '0';
                $config['max_height']  = '0';
                $config['file_name'] = $_FILES["userfile"]['name'];
                $config['overwrite']= TRUE;

                $this->load->library('upload', $config);

                     if ( !$this->upload->do_upload('userfile'))
                                {
                                        $error = array('error' => $this->upload->display_errors());

                                        $post_image = "icon.png";
                                }
                                else
                                {

                                   // $user =$_SESSION['username'];
                                        $data = array('upload_data' => $this->upload->data());
                                       
                                        $post_image = $_FILES['userfile']['name'];

                                }

                             $data = array(
                                        
                                  'name' => $this->input->post('name'),
                                  'post' => $this->input->post('post'),
                                  'profile' => $this->input->post('profile'),
                                  'level' =>$this->input->post('level'),
                                  'profile_image' => $post_image
                                );
                               $this->db->where('id', $id);
                            $this->db->update('member', $data);
                 $this->session->set_flashdata("success_profile","Profile Successfully Update");
                 $data['profile_data'] = $this->Admin_model->member_profile($id);
                           redirect('admin/staff_table','refresh');
                       }
                }


                




        public function add_service()
                {       

                        $this->form_validation->set_rules('name', 'Staff Name', 'trim|required');
                         $this->form_validation->set_rules('post', 'Office Title', 'trim|required');
                         $this->form_validation->set_rules('profile', 'Staff Profile', 'trim');

                       if ($this->form_validation->run() ==  FALSE) {
                            $data['title'] ='Add Memeber Profile';
                        $data['section'] =  'Member';
                        $data['page'] =   'Create Profile';
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/add_member', $data);
                        $this->load->view('template/admin_footer' , $data);
                       } else {

                                        
                // $user =$_SESSION['username'];
                $config['upload_path'] = './assets/images/team';
                $config['allowed_types'] = 'gif|jpg|png|JPG|PNG|JPEG|jpeg|GIF';
                $config['max_size']     = '100000';
                 $config['max_width']  = '0';
                $config['max_height']  = '0';
                $config['file_name'] = $_FILES["userfile"]['name'];
                $config['overwrite']= TRUE;

                $this->load->library('upload', $config);

                     if ( !$this->upload->do_upload('userfile'))
                                {
                                        $error = array('error' => $this->upload->display_errors());

                                        $post_image = "icon.jpg";
                                }
                                else
                                {

                                   // $user =$_SESSION['username'];
                                        $data = array('upload_data' => $this->upload->data());
                                       
                                        $post_image = $_FILES['userfile']['name'];

                                }

                             $data = array(
                                        
                                  'name' => $this->input->post('name'),
                                  'post' => $this->input->post('post'),
                                  'profile' => $this->input->post('profile'),
                                  'level' =>$this->input->post('level'),
                                  'profile_image' => $post_image
                                );
                             $this->db->insert('member', $data);
                 $this->session->set_flashdata("success_services","Member Successfully Added");
                           redirect('admin/member','refresh');
                       }
                }

                public function contact_report()
                {       
                        $data['title'] = 'Contact Report';
                        $data['section'] =   'Contact';
                        $data['page'] =   'Contact Report';
                        $data['contacts'] = $this->Admin_model->contact_report();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/contact_report', $data);
                }



              


                public function blog_table()
                {       
                        $data['title'] = 'News Table';
                        $data['section'] =   'Blog';
                        $data['page'] =   'Add News';
                        $data['blogs'] = $this->Admin_model->blog_table();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/blog_table', $data);
                }


                   public function staff_table()
                {       
                        $data['title'] = 'OMZ Staff';
                        $data['section'] =   'Staff Profile';
                        $data['page'] =   'Profile';
                        $data['profile_table'] = $this->Admin_model->staff_table();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/staff_table', $data);
                }
                public function request()
                {
                    $data['title'] = 'OMZ Services';
                        $data['section'] =   'Services Request';
                        $data['page'] =   'Services';
                        $data['request'] = $this->Admin_model->services_table();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/services_contact', $data);
                }

                      public function applicant()
                {
                    $data['title'] = 'OMZ Applicant';
                        $data['section'] =   'OMZ Applicant';
                        $data['page'] =   'Application';
                        $data['applicant'] = $this->Admin_model->applicant_table();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/applicant', $data);
                }



          
                 public function settings()
                {       
                       
                       $this->form_validation->set_rules('web_name', 'Site Title', 'trim|required');
                       $this->form_validation->set_rules('web_email', 'Web Email', 'trim|required');
                       $this->form_validation->set_rules('phone1', 'Phone Number', 'trim|required|min_length[11]|max_length[15]|numeric');
                       $this->form_validation->set_rules('phone2', 'fieldlabel', 'trim|min_length[11]|max_length[15]|numeric');
                       $this->form_validation->set_rules('tech_mail', 'Techical Support', 'trim|required');
                       $this->form_validation->set_rules('address', 'Address', 'trim|required');
                       $this->form_validation->set_rules('about', 'About Us', 'trim|required|min_length[20]');
                       
                         $this->form_validation->set_rules('ideology', 'Ideology', 'trim|required|min_length[20]');
                        $this->form_validation->set_rules('mission', 'Mission ', 'trim|required|min_length[20]');
                         $this->form_validation->set_rules('vision', 'Vision', 'trim|required|min_length[20]');

                       if ($this->form_validation->run() == FALSE) {
                           $data['title'] ='Settings';
                        $data['section'] =   'General System';
                        $data['page'] =   'Website Infomation';
                        $data['info'] = $this->Admin_model->Admin_get();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/settings', $data);
                        $this->load->view('template/admin_footer' , $data);
                       } else {
                           $data['title'] ='Settings';
                        $data['section'] =   'General System';
                        $data['page'] =   'Website Infomation';
                        $this->Admin_model->admin_info();
                        $data['info'] = $this->Admin_model->Admin_get();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/settings', $data);
                        $this->load->view('template/admin_footer' , $data);
                       }
                }

            public function user_account()
                {       
                        $data['title'] = 'Users System';
                        $data['section'] =   'Account';
                        $data['page'] =   'Users';
                        $data['users'] = $this->Admin_model->get_users();
                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/register_user', $data);
                }
          





                        
                public function sent_message()
                {
                      $data['title'] = 'Sent Message';
                        $data['section'] =   'Message Line ';
                        $data['page'] =   'Sent Message';
                        $data['admin_sent_message'] = $this->Admin_model->get_sent_message();

                        $this->load->view('template/admin_header', $data);
                        $this->load->view('admin/message', $data);
                }








               

                public function delete_blog($id)
                {
                   $this->db->where('id', $id);
                   $this->db->delete('blog');
                  redirect('Admin/blog_table','refresh');
                }

                public function delete_profile($id=null)
                {
                    if ($id==false) {
                       redirect('admin/dashboard','refresh');
                    }
                    $this->db->where('id', $id);
                   $this->db->delete('member');
                  redirect('Admin/staff_table','refresh');
                }



     
              // Check Email System from dashboard
            function register_email($name, $email, $username, $password,$sponsor_id)
  {



          //SMTP & mail configuration
          $config = array(
              'protocol'  => 'smtp',
              'smtp_host' => 'ssl://mail.belbec.com',
              'smtp_port' => 465,
              'smtp_user' => 'info@belbec.com',
              'smtp_pass' => 'Excelluck0550.',
              'mailtype'  => 'html',
              'charset'   => 'utf-8'
          );
          $this->email->initialize($config);
          $this->email->set_mailtype("html");
          $this->email->set_newline("\r\n");

      $this->email->from('info@belbec.com', 'Belbec Marketing Networking');
      $this->email->to($email);
      $this->email->subject('Welcome to Belbec Marketing Networking!');
      $msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Welcome Email from Belbec.com</title>
      <style type="text/css">
      .p {
        text-align: justify;
      }
      .name {
        color: #FE6605;
        font-weight: bold;
      }
      body .footer {
        color: #FE6605;
        font-size:12px;
        text-align:center;
      }
      </style>
      </head>

      <body>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" bgcolor="#FE6605">&nbsp;</td>
          <td colspan="2" align="center" bgcolor="#000000"><img src="https://www.belbec.com/assest/img/logo.png" /></td>
          <td align="center" bgcolor="#FE6605">&nbsp;</td>
        </tr>
        <tr>
          <td width="6%" bgcolor="#FE6605">&nbsp;</td>
          <td width="34%">&nbsp;</td>
          <td width="53%">&nbsp;</td>
          <td width="7%" bgcolor="#FE6605">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FE6605">&nbsp;</td>
          <td colspan="2" rowspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td><p>Hello <span class="name">'.$name.'</span>,</p>
                <p class="p">You have successfully Registred Account with Sponsored Id '.$sponsor_id.' . Now, you are a certified affiliate, we wish you optimum success in the business</p>
               
                <p class="p"><u><b>Account Details</b></u></p>
                <p class="p">Username: '.$username.'</p>
                <p class="p">Password: '.$password.'</p>



                <p class="p">Admin   <br /> <a href="https://www.belbec.com">www.belbec.com</a></p>

                <p class="p">Privacy is important to us. We will not sell , rent, or give your name or address to anyone provided to  belbec <a href="terms">terms and conditions</a> are strictly observed.<br />
              </p>
                
                </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><p><span class="name">Disclaimer</span>:</p>
                <p>This email was sent to '.$email.' because it was used to register on belbec.com. Kindly disregard if you have not registered on the website. Thanks</p></td>
              <td>&nbsp;</td>
            </tr>
          </table></td> 
          <td bgcolor="#FE6605">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FE6605">&nbsp;</td>
          <td bgcolor="#FE6605">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FE6605">&nbsp;</td>
          <td bgcolor="#FE6605">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" bgcolor="#FE6605">&nbsp;</td>
          <td colspan="2" align="center" bgcolor="#3f3f3f"><span class="footer">Copyright &copy; 2019. belbec.com </span></td>
          <td bgcolor="#FE6605">&nbsp;</td>
        </tr>
      </table>
      </body>
      </html>';
      $this->email->message($msg);
       $this->email->set_mailtype("html");
      $this->email->send();
  }







}


?>