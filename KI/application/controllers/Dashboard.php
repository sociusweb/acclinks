<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	var $time;
	function __construct() {
		parent::__construct();
		$this->load->helper('path');
		$this->load->library('authenticate');
		$sessionid = $this->authenticate->is_admin_login();
		$this->load->model('admin');
		$sec=$this->session->userdata('lastlogin_ki');
		$this->time = array(
            'time' => $sec
        );
	}
	public function index()
	{	
		$head = $this->time;
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/dashboard.php');
		$this->load->view('dashboard/footer.php');
	}
	public function slider()
	{
		$head = $this->time;
		$head['page']='slider';
		$head['page_tree']='slider';
		$data=$this->admin->getslider();
		// print_r($data);
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/slider.php',$data);
		$this->load->view('dashboard/footer.php');
	}
	public function block()
	{
		$head = $this->time;
		$head['page']='home';
		$head['page_tree']='block';
		$data['block']=$this->admin->getblock();
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/block.php',$data);
		$this->load->view('dashboard/footer.php');
	}
	public function addblock()
	{
		$head = $this->time;
		$head['page']='home';
		$head['page_tree']='addblock';
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/addblock.php');
		$this->load->view('dashboard/footer.php');
	}
	public function payment()
	{
		$head = $this->time;
		$data['payments']=$this->admin->viewpayment();
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/payment.php',$data);
		$this->load->view('dashboard/footer.php');
	}
	public function paymentdetails()
	{
		$head = $this->time;
		$id=$this->input->get('id');
		$data['paydetail']=$this->admin->detailpay($id);
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/rechargedetails.php',$data);
		$this->load->view('dashboard/footer.php');
	}
	public function product()
	{
		$head = $this->time;
		$head['page']='product';
		$head['page_tree']='view';
		$data['products']=$this->admin->viewproduct();
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/product.php',$data);
		$this->load->view('dashboard/footer.php');
	}
	public function addproduct()
	{
		$head = $this->time;
		$head['page']='product';
		$head['page_tree']='add';
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/product_add.php');
		$this->load->view('dashboard/footer.php');
	}
	public function chgpwd(){
		$username =  $this->session->userdata('usernme_ki');
		$old = $_POST['oldpassword'];
		$new = $_POST['newpassword'];
		$res=$this->admin->chgpwd($username,$old,$new);
		return $res;
	}
	
	public function addpro(){
		$data['pro_name']=$this->input->post('pro_name');
		$data['pro_brand']=$this->input->post('pro_brand');
		$data['pro_price']=$this->input->post('pro_price');
		$data['pro_color']=$this->input->post('pro_color');
		$data['pro_fe1']=$this->input->post('pro_fe1');
		$data['pro_fe2']=$this->input->post('pro_fe2');
		$data['pro_fe3']=$this->input->post('pro_fe3');
		$data['pro_fe4']=$this->input->post('pro_fe4');
		$data['pro_os']=$this->input->post('pro_os');
		$data['pro_ram']=$this->input->post('pro_ram');
		$data['pro_dimensions']=$this->input->post('pro_dime');
		$data['pro_battery']=$this->input->post('pro_battery');
		$data['pro_model']=$this->input->post('pro_model');
		$data['pro_comm']=$this->input->post('pro_comm');
		$data['pro_connectivity']=$this->input->post('pro_tech');
		$data['pro_special']=$this->input->post('pro_special');
		$data['pro_addinfo']=$this->input->post('pro_addinfo');
		$data['pro_status']=1;
		$img=$this->input->post('base');
		$i=1;
		foreach ($img as $index => $base64) {
			if (!empty($base64)) {
						//split base64 data into image and extension
						$dat = explode(';', $base64);
						$dataa = explode(',', $base64); //image
						$part = explode("/", $dat[0]); //extension

						$image = base64_decode($dataa[1]);

						$image_name = md5(uniqid(rand(), true));

						$filename = $image_name . '.' . $part[1];

						$data['pro_img'.$i] = 'assets/images/products/'.$filename;

						$path = set_realpath('assets/images/products/');

						file_put_contents($path . $filename, $image);
			      $i++;
					}
         }

		$res=$this->admin->addpro($data);
		if ($res) {
			 redirect(base_url('dashboard/addproduct?suc=1'), 'refresh');
		}
		else{
			 redirect(base_url('dashboard/addproduct?suc=2'), 'refresh');
		}
	}
	//product status update

	public function updatestatus(){
		$id=$this->input->post('id');
		$val=$this->input->post('value');
		$result=$this->admin->updateprostatus($id,$val);
	}

	// product delete

	public function productdelete(){
		$id=$this->input->post('id');
		$result=$this->admin->deleteproduct($id,$val);
		return $result;
	}

	public function editproduct(){
		$head = $this->time;
		$id=$this->input->get('id');
		$data=$this->admin->editpro($id);
		$images=array();
		for ($i=1; $i <= 8 ; $i++) {
			if (!empty($data['product'][0]['pro_img'.$i])) {
				$b64image = base64_encode(file_get_contents(base_url().$data['product'][0]['pro_img'.$i]));
				array_push($images,$b64image);
			}
		}
		$data['images']=$images;
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/product_edit.php',$data);
		$this->load->view('dashboard/footer.php');

	}
	public function proupdate(){

		$id=$this->input->post('id');
		$data['pro_name']=$this->input->post('pro_name');
		$data['pro_brand']=$this->input->post('pro_brand');
		$data['pro_price']=$this->input->post('pro_price');
		$data['pro_color']=$this->input->post('pro_color');
		$data['pro_fe1']=$this->input->post('pro_fe1');
		$data['pro_fe2']=$this->input->post('pro_fe2');
		$data['pro_fe3']=$this->input->post('pro_fe3');
		$data['pro_fe4']=$this->input->post('pro_fe4');
		$data['pro_os']=$this->input->post('pro_os');
		$data['pro_ram']=$this->input->post('pro_ram');
		$data['pro_dimensions']=$this->input->post('pro_dime');
		$data['pro_battery']=$this->input->post('pro_battery');
		$data['pro_model']=$this->input->post('pro_model');
		$data['pro_comm']=$this->input->post('pro_comm');
		$data['pro_connectivity']=$this->input->post('pro_tech');
		$data['pro_special']=$this->input->post('pro_special');
		$data['pro_addinfo']=$this->input->post('pro_addinfo');
		$data['pro_status']=1;
		$img=$this->input->post('base');
		$i=1;
		foreach ($img as $index => $base64) {

			if (!empty($base64)) {
						//split base64 data into image and extension
						$dat = explode(';', $base64);
						$dataa = explode(',', $base64); //image
						$part = explode("/", $dat[0]); //extension

						$image = base64_decode($dataa[1]);

						$image_name = md5(uniqid(rand(), true));

						$filename = $image_name . '.' . $part[1];

						$data['pro_img'.$i] = 'assets/images/products/'.$filename;

						$path = set_realpath('assets/images/products/');

						file_put_contents($path . $filename, $image);
			      $i++;
					}
			else{
				$data['pro_img'.$i] = '';
				$i++;
			}
         }


		$res=$this->admin->proupdate($data,$id);
		if ($res) {
			 redirect(base_url('dashboard/editproduct?suc=1&id='.$id), 'refresh');
		}
		else{
			 redirect(base_url('dashboard/editproduct?suc=2&id='.$id), 'refresh');
		}
	}

	public function addblocks(){

		$data['blk_heading1']=$this->input->post('heading1');
		$data['blk_heading2']=$this->input->post('heading2');
		$data['blk_description1']=$this->input->post('description1');
		$data['blk_description2']=$this->input->post('description2');
		$data['blk_link1']=$this->input->post('link1');
		$data['blk_link2']=$this->input->post('link2');	

			$config['upload_path'] = 'assets/images/blocks';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;

                     if (isset($_FILES['img1'])) {
                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['img1']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('img1')) {
                                //no file uploaded or failed upload
    							 //echo($this->upload->display_errors());
                                
                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['blk_img1'] = 'assets/images/blocks/'.$dat['upload_data']['file_name'];
                   
                            }
                      }
                      if (isset($_FILES['img2']['name'])) {

                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['img2']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('img2')) {
                                //no file uploaded or failed upload
    

                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['blk_img2'] = 'assets/images/blocks/'.$dat['upload_data']['file_name'];
                            }
                      }

                $result=$this->admin->addblockdata($data);
                if ($result) {
                	redirect(base_url('dashboard/addblock?suc=1'), 'refresh');
                }
                else{
                	redirect(base_url('dashboard/addblock?suc=2'), 'refresh');
                }
                
	}
	public function editblock(){
		$head = $this->time;
		$head['page']='home';
		$head['page_tree']='editblock';
		$id=$this->input->get('bid');
		$data=$this->admin->getblockdata($id);
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/editblock.php',$data);
		$this->load->view('dashboard/footer.php');
	}

	public function updateblock(){

		$data['blk_heading1']=$this->input->post('heading1');
		$data['blk_heading2']=$this->input->post('heading2');
		$data['blk_description1']=$this->input->post('description1');
		$data['blk_description2']=$this->input->post('description2');
		$data['blk_link1']=$this->input->post('link1');
		$data['blk_link2']=$this->input->post('link2');
		$id=$this->input->post('id');

			$config['upload_path'] = 'assets/images/blocks';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;

                     if (isset($_FILES['img1']['name'])) {
                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['img1']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('img1')) {
                                //no file uploaded or failed upload
    							 //echo($this->upload->display_errors());
                                
                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['blk_img1'] = 'assets/images/blocks/'.$dat['upload_data']['file_name'];
                   
                            }
                      }
                      if (isset($_FILES['img2']['name'])) {

                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['img2']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('img2')) {
                                //no file uploaded or failed upload
    
                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['blk_img2'] = 'assets/images/blocks/'.$dat['upload_data']['file_name'];
                            }
                      }

                $result=$this->admin->updateblock($data,$id);
                if ($result) {
                	redirect(base_url('dashboard/editblock?suc=1&bid='.$id), 'refresh');
                }
                else{
                	redirect(base_url('dashboard/editblock?suc=2&bid='.$id), 'refresh');
                }
	}

	public function addslider(){
		$head = $this->time;
		$head['page']='slider';
		$head['page_tree']='addslider';

		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/addslider.php');
		$this->load->view('dashboard/footer.php');
	}

	public function saveslider(){
			$data['sdr_title']=$this->input->post('sdr_title');
			$data['sdr_url']=$this->input->post('sdr_url');
			$data['sdr_des']=$this->input->post('sdr_des');

			$config['upload_path'] = 'assets/images/slider';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;

            	if (isset($_FILES['sdr_img']['name'])) {
                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['sdr_img']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('sdr_img')) {
                                //no file uploaded or failed upload
    							// echo($this->upload->display_errors());
                               
                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['sdr_img'] = 'assets/images/slider/'.$dat['upload_data']['file_name'];
                            }
                      }

            $result=$this->admin->updateslider($data);
                if ($result) {
                	redirect(base_url('dashboard/slider?suc=1'), 'refresh');
                }
                else{
                	redirect(base_url('dashboard/addslider?suc=2'), 'refresh');
                }
	}
	public function sliderdelete(){
		$id=$this->input->post('id');
		$result=$this->admin->deleteslide($id);
		echo $result;
	}

	public function sliderstatus(){
		$id=$this->input->post('id');
		$val=$this->input->post('value');
		$result=$this->admin->updatesliderstatus($id,$val);
	}

	public function editslide(){
		$head = $this->time;
		$head['page']='slider';
		$head['page_tree']='slider';
		$id=$this->input->get('sid');
		$data=$this->admin->getslidedata($id);
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/editslide.php',$data);
		$this->load->view('dashboard/footer.php');
	}

	public function updateslide(){

			$id=$this->input->post('id');
			$data['sdr_title']=$this->input->post('sdr_title');
			$data['sdr_url']=$this->input->post('sdr_url');
			$data['sdr_des']=$this->input->post('sdr_des');

			$config['upload_path'] = 'assets/images/slider';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;

            	if (isset($_FILES['sdr_img']['name'])) {
                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['sdr_img']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('sdr_img')) {
                                //no file uploaded or failed upload
    							 // echo($this->upload->display_errors());
                               
                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['sdr_img'] = 'assets/images/slider/'.$dat['upload_data']['file_name'];
                            }
                      }

            $result=$this->admin->sdrupdate($data,$id);
                if ($result) {
                	redirect(base_url('dashboard/editslide?suc=1&sid='.$id), 'refresh');
                }
                else{
                	redirect(base_url('dashboard/editslide?suc=2&sid='.$id), 'refresh');
                }
	}

	public function rowdelete(){
		$id=$this->input->post('id');
		$data=$this->admin->deleterow($id);
		echo $data;
	}

	public function smtp(){
		$head = $this->time;
		$data['smtp']=$this->admin->getSmtp();
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/smtp.php',$data);
		$this->load->view('dashboard/footer.php');
	}

	public function smtpConfig(){
		$data['smtp_id']=1;
		$data['smtp_host']=$this->input->post('smtp_host');
		$data['smtp_username']=$this->input->post('smtp_username');
		$data['smtp_password']=$this->input->post('smtp_password');
		$data['smtp_type']=$this->input->post('smtp_type');
		$data['smtp_port']=$this->input->post('smtp_port');
		$res=$this->admin->setSmtp($data);
		if ($res) {
            redirect(base_url('dashboard/smtp?suc=1'), 'refresh');
		}else{
            redirect(base_url('dashboard/smtp?suc=2'), 'refresh');
		}
	}
	// public function test(){
	// 	$result = $this->admin->send('jackson20000@gmail.com','noreply@socius-global.com','test subject','test message');
	// 	echo $result;
	// }


// aboutsection
  public function about(){
    $head = $this->time;
	$head['page']='';
	$head['page_tree']='aboutedit';
	$data=$this->admin-> get_about_detail();
	$this->load->view('dashboard/header.php',$head);
	$this->load->view('dashboard/aboutedit',$data);
	$this->load->view('dashboard/footer.php');
}

//update about function
public function update_about(){
	$data['heading_1']=$this->input->post('heading_1');
	$data['description_1']=$this->input->post('description_1');
	$data['heading_2']=$this->input->post('heading_2');
	$data['description_2']=$this->input->post('description_2');
	$data['heading_3']=$this->input->post('heading_3');
	$data['description_3']=$this->input->post('description_3');

	$config['upload_path'] = 'assets/images/slider';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size'] = '1000000';
    $config['overwrite'] = TRUE;
    $config['remove_spaces'] = TRUE;

	if (isset($_FILES['image_1']['name'])) {
        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['image_1']['name'];
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
          if (!$this->upload->do_upload('image_1')) {
                //no file uploaded or failed upload
				// echo($this->upload->display_errors());    
            } 
            else {
                $dat = array('upload_data' => $this->upload->data());
                $data['image_1'] = 'assets/images/slider/'.$dat['upload_data']['file_name'];
            }
      }

	if (isset($_FILES['image_2']['name'])) {
    $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['image_2']['name'];
     $this->load->library('upload', $config);
     $this->upload->initialize($config);
      if (!$this->upload->do_upload('image_2')) {
            //no file uploaded or failed upload

        } else {
            $dat = array('upload_data' => $this->upload->data());
            $data['image_2'] = 'assets/images/slider/'.$dat['upload_data']['file_name'];
        }
    }

	if (isset($_FILES['image_3']['name'])) {

        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['image_3']['name'];
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
          if (!$this->upload->do_upload('image_2')) {
                //no file uploaded or failed upload

            } else {
                $dat = array('upload_data' => $this->upload->data());
                $data['image_3'] = 'assets/images/slider/'.$dat['upload_data']['file_name'];
            }
      }


    $result=$this->admin->about_update($data);
    if ($result) {
        	redirect(base_url('dashboard/about?suc=1'), 'refresh');
        }
        else{
        	redirect(base_url('dashboard/about?suc=2'), 'refresh');
        }
	}


//service

  public function service(){
    $head = $this->time;
	$head['page']='';
	$head['page_tree']='serviceedit';
	$data=$this->admin-> get_service_detail();
	$this->load->view('dashboard/header.php',$head);
	$this->load->view('dashboard/services',$data);
	$this->load->view('dashboard/footer.php');
}

public function update_service(){

    $data['service_head1']=$this->input->post('service_head1');
	$data['service_des1']=$this->input->post('service_des1');

	$data['service_head2']=$this->input->post('service_head2');
	$data['service_des2']=$this->input->post('service_des2');

	$data['service_head3']=$this->input->post('service_head3');
	$data['service_des3']=$this->input->post('service_des3');

	$data['service_head4']=$this->input->post('service_head4');
	$data['service_des4']=$this->input->post('service_des4');

	$data['service_head5']=$this->input->post('service_head5');
	$data['service_des5']=$this->input->post('service_des5');

	$data['service_head6']=$this->input->post('service_head6');
	$data['service_des6']=$this->input->post('service_des6');

	$data['service_head7']=$this->input->post('service_head7');
	$data['service_des7']=$this->input->post('service_des7');

	$data['service_head8']=$this->input->post('service_head8');
	$data['service_des8']=$this->input->post('service_des8');

	$data['service_head9']=$this->input->post('service_head9');
	$data['service_des9']=$this->input->post('service_des9');

	$data['service_head10']=$this->input->post('service_head10');
	$data['service_des10']=$this->input->post('service_des10');

    $result=$this->admin->service_update($data);
    if ($result) {
        	redirect(base_url('dashboard/service?suc=1'), 'refresh');
        }
        else{
        	redirect(base_url('dashboard/service?suc=2'), 'refresh');
        }
	}

// Setup phone page

public function setup()
	{
		$head = $this->time;
		$head['page']='home';
		$this->load->view('dashboard/header.php',$head);
		$this->load->view('dashboard/setup.php');
		$this->load->view('dashboard/footer.php');
	}
	public function save_setup(){
		    $data['Heading']=$this->input->post('Heading');
		    $data['discription']=$this->input->post('discription');

			$config['upload_path'] = 'assets/images/slider';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;

            	if (isset($_FILES['image']['name'])) {
                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['image']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('image')) {
                                //no file uploaded or failed upload
    							// echo($this->upload->display_errors());
                               
                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['image'] = base_url().'assets/images/slider/'.$dat['upload_data']['file_name'];
                            }
                      }

            $result=$this->admin->add_setup($data);
            //echo $result;
                if ($result) {
                	redirect(base_url('dashboard/setuplist?suc=1'), 'refresh');
                }
                else{
                	redirect(base_url('dashboard/setuplist?suc=2'), 'refresh');
                }


	}

public function setuplist(){	  
	$head = $this->time;
	$head['page']='home';
	$head['page_tree']='block';
	$data['blk']=$this->admin->getsetup();
	$this->load->view('dashboard/header.php',$head);
	$this->load->view('dashboard/setup_list.php',$data);
	$this->load->view('dashboard/footer.php');
}
public function set_edit(){
    $head = $this->time;
	$head['page']='home';
	$head['page_tree']='editblock';
	$id=$this->input->get('bid');
	$data=$this->admin->setup_data($id);
	$this->load->view('dashboard/header.php',$head);
	$this->load->view('dashboard/setup_edit.php',$data);
	$this->load->view('dashboard/footer.php');
}
public function set_update(){
    $id=$this->input->post('id');
    $data['Heading']=$this->input->post('Heading');
    $data['discription']=$this->input->post('discription');

	$config['upload_path'] = 'assets/images/slider';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size'] = '1000000';
    $config['overwrite'] = TRUE;
    $config['remove_spaces'] = TRUE;

	if (isset($_FILES['image']['name'])) {
            $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['image']['name'];
             $this->load->library('upload', $config);
             $this->upload->initialize($config);
              if (!$this->upload->do_upload('image')) {
                    //no file uploaded or failed upload
					// echo($this->upload->display_errors());
                   
                } else {
                    $dat = array('upload_data' => $this->upload->data());
                    $data['image'] = base_url().'assets/images/slider/'.$dat['upload_data']['file_name'];
                }
          }

    $result=$this->admin->update_setup($data,$id);
        if ($result) {
        	redirect(base_url('dashboard/setuplist?suc=1'), 'refresh');
        	
        }
        else{
        	redirect(base_url('dashboard/setuplist?suc=2'), 'refresh');	
        }
}

public function rowdeletes(){
	$id=$this->input->get('bid');
	$data=$this->admin->deleterows($id);
	if ($data) {
        redirect(base_url('dashboard/setuplist?suc=1'), 'refresh');
    }
    else{
          redirect(base_url('dashboard/setuplist?suc=2'), 'refresh');
    }
}



}
