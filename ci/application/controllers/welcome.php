<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->search();
	}

    public function search()
    {

        $this->load->view('front/search_book_view');
    }

    public function form_submit()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('callno', 'name', 'required');
        $this->form_validation->set_message('required', 'Please full fill the call reference!!!!!!');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->search();
        }
        else
        {
            $this->load->model('get_model');
            $submit_data = $this->input->post(NULL, TRUE);
            $this->show($submit_data['lang'],$submit_data['callno']);
        }
    }

	public function show($lang,$callno)
	{
		$this->load->model('get_model');
        $data = $this->get_model->get_all();
        $test = $this->test_get($lang,$callno);
        $data['blink']['floor'] = $test['blink']['floor']; 
        $data['blink']['number'] = $test['blink']['number']; 
        $data['blink']['zone'] = $test['blink']['zone']; 

        if($test['blink']['floor']=='2'){
        	$this->load->view('/front/floor2/header_front_view',$data);
			$this->load->view('/front/floor2/left_left_front_view',$data);
			$this->load->view('/front/floor2/left_right_front_view',$data);
			$this->load->view('/front/floor2/pic_front_view',$data);
			$this->load->view('/front/floor2/right_front_view',$data);
			//$this->load->view('/front/floor2/down_front_view',$data);
        }
        else{
        	$this->load->view('/front/floor3/header_front_view',$data);
			$this->load->view('/front/floor3/left_front_view',$data);
            $this->load->view('/front/floor3/top_front_view',$data);
			$this->load->view('/front/floor3/pic_front_view',$data);
            $this->load->view('/front/floor3/down_front_view',$data);
            $this->load->view('/front/floor3/right_front_view',$data);

        }
	}

    public function test_get($lang,$callno)
    {
        $this->load->model('get_model');
        $data = $this->get_model->get_shelf($lang,$callno);
        return $data;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */