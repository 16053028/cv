<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blop_test extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    public function __construct(){
        parent::__construct();
        $this->load->model('blop_model');
        $this->load->library('form_validation');
    }

	public function index()
	{

        $data['blob_img']   = $this->blop_model->get_all('tbl_img');
        $data['coba']   = "coba";
		$this->load->view('blop', $data);
	}

    public function upload(){
        //validate the form data 
        $this->form_validation->set_rules('pic_title', 'Picture pic_title', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('blop');
        }else{
            
            //get the form values
            $data['pic_title'] = $this->input->post('pic_title', TRUE);
            $data['pic_desc'] = $this->input->post('pic_desc', TRUE);

            

            //file upload code 
            // //set file upload settings 
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('pic_file')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('blop', $error);
            }else{
                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                $img_blop = file_get_contents($upload_data['full_path']);
                // $file_encode = base64_encode(file_get_contents($upload_data['full_path']));

                $data_insert = array(
                    'title'         => $data['pic_title'],
                    'text'          => $data['pic_desc'],
                    'img'           => $img_blop,
                    'file_type'     => $upload_data['file_type'],
                ); 

                $status = $this->blop_model->insert('tbl_img' ,$data_insert);

                unlink($upload_data['full_path']);

                redirect('debug/blop_test');
            }
            // $this->load->view('footer');
        }
        
    }

    public function get_image($id){

        $data = $this->blop_model->get_by_id('tbl_img', $id);

        // var_dump($data);

        if(empty($data)){
        header("HTTP/1.0 404 Not Found");
        }else{
            $this->output->set_header('Content-type:' . $data[0]['file_type']);
            // echo "<pre>";
            // var_dump($data);
            // echo "</pre>";
            $this->output->set_output(($data[0]['img']));

        }
        
        
    }


}
