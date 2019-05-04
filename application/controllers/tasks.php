<?php
class Tasks extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tasks_model');
        $this->load->helper('url_helper');
    }
    //
    public function index()
    {
        $data['title'] = 'Tasks - index';
//var_dump($data['tasks']);
        $this->load->view('templates/head', null );
        $this->load->view('tasks/index',  $data);
        $this->load->view('templates/foot' );
    }
    public function api_index()
    {
        $data['tasks'] = $this->tasks_model->get_tasks();
        $data['title'] = 'Tasks - index';
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');        
        echo(json_encode($data['tasks']));
    }
    public function view($slug = NULL)
    {
        $data['tasks_item'] = $this->tasks_model->get_tasks($slug);
        if (empty($data['tasks_item']))
        {
                show_404();
        }        
//        $data['title'] = $data['tasks_item']['title'];        
        $data['title'] = "";        
        $this->load->view('templates/head', null );
        $this->load->view('tasks/view', $data);
        $this->load->view('templates/foot' );
    }
    public function api_view($id = NULL)
    {
        $item = $this->tasks_model->get_tasks($id );
		header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');        
        echo(json_encode($item) );
    }

    // 

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
    
        $data['title'] = 'Create a tasks item';        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content' , 'Content', 'required');
    
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/head', null );
            $this->load->view('tasks/create', $data );
            $this->load->view('templates/foot' );                        
        }
        else
        {
            $this->tasks_model->set_tasks();
            $this->load->view('news/success');
        }
    }
    //
    public function api_create(){
        $this->load->helper('form');
        $this->load->library('form_validation');                
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content' , 'Content', 'required');
        $this->tasks_model->set_tasks();
		header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
        echo(json_encode(['title' => $this->input->post('title'),'content' => $this->input->post('content') ]));
    }
    //
    public function edit($slug= NULL )
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
    
        $data['title'] = 'Update item';        
        $data['item'] = $this->tasks_model->get_tasks($slug);
        if (empty($data['item']))
        {
                show_404();
        }
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text' , 'Text', 'required');        
        if ($this->form_validation->run() === FALSE)
        {
//var_dump($slug );
//                $this->load->view('templates/header', $data);
            $this->load->view('tasks/edit', $data );
//                $this->load->view('templates/footer');
        }
        else
        {
            $this->tasks_model->update_tasks($slug );
            $this->load->view('tasks/success');
        }
    }

}
