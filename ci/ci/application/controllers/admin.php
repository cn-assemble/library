<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
    * @see http://codeigniter.com/user_guide/general/urls.html
    */
    function __construct()
    {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $this->edit_floor_3();
    }

    public function edit_floor_2(){
        $this->load->model('get_model');
        $data = $this->get_model->get_all_admin();

        $this->load->view('/back/floor2/header_back_view',$data);
        $this->load->view('/back/floor2/left_left_back_view',$data);
        $this->load->view('/back/floor2/left_right_back_view',$data);
        $this->load->view('/back/floor2/pic_back_view',$data);
        $this->load->view('/back/floor2/right_back_view',$data);
        $this->load->view('/back/floor2/down_back_view',$data);
        $this->load->view('/back/floor2/down_back_view_swap',$data);
    }

    public function edit_floor_3(){
        $this->load->model('get_model');
        $data = $this->get_model->get_all_admin();

        $this->load->view('/back/floor3/header_back_view',$data);
        $this->load->view('/back/floor3/left_back_view',$data);
        $this->load->view('/back/floor3/top_back_view',$data);
        $this->load->view('/back/floor3/right_back_view',$data);
        $this->load->view('/back/floor3/pic_back_view',$data);
        $this->load->view('/back/floor3/down_back_view',$data);
        $this->load->view('/back/floor3/down_back_view_swap',$data);
    }

    public function update(){
        extract($_POST);
        $this->load->model('update_model');
        $this->update_model->update($number,$min,$max,$zone,$system,$oldnumber);
    }

    public function add(){
        extract($_POST);
        $this->load->model('update_model');
        $this->update_model->add($number,$min,$max,$zone,$system,$floor);
    }

    public function delete(){
        extract($_POST);
        $this->load->model('update_model');
        $this->update_model->delete($number,$zone,$floor);
    }

    public function swap_submit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('numberA', 'Number of A', 'required');
        $this->form_validation->set_rules('floorA', 'Floor of A', 'required');
        $this->form_validation->set_rules('numberB', 'Number of B', 'required');
        $this->form_validation->set_rules('floorB', 'Floor of B', 'required');
        if($this->form_validation->run() == FALSE)
        {
            $this->edit();
        }
        else
        {
            $this->load->model('swap_model');
            $submit_data = $this->input->post(NULL, TRUE);
            if ($this->swap_model->swap_data($submit_data))
            {
                echo 'Swap data successfully.';
                $this->edit();
            }
            else
            {
                echo 'Swap data UNSUCCESSFULLY ! PLEASE TRY IT AGAIN!!.';
                $this->edit();
            }
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */