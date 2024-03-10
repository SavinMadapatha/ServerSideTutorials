<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('todo_model');
        $this->load->library('session');

        if (!$this->session->userdata('unique_user_id')) {
            $unique_user_id = uniqid();
            $this->session->set_userdata('unique_user_id', $unique_user_id);
            log_message('debug', 'New unique_user_id generated and stored in session: ' . $unique_user_id);
        } else {
            log_message('debug', 'Existing unique_user_id found in session: ' . $this->session->userdata('unique_user_id'));
        }
    }

    public function index() {
        log_message(1,"test");
        $data['todos'] = $this->todo_model->get_todos();
        $this->load->view('todo_view', $data);
    }

    public function add() {
        $action = $this->input->post('todo_item');
        $user_id = $this->session->userdata('unique_user_id'); 

        if (!empty($action) && !empty($user_id)) {
            $this->todo_model->add_todo($user_id, $action);
        }
        
        redirect('todo/index');
    }
}
