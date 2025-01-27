<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(['url', 'form']);
        $this->load->library('form_validation');
    }

    public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $this->load->view('users/index', $data);
    }

    public function create() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() === TRUE) {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
            ];
            $this->User_model->insert_user($data);
            redirect('users');
        } else {
            $this->load->view('users/create');
        }
    }

    public function edit($id) {
        $data['user'] = $this->User_model->get_user($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() === TRUE) {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
            ];
            $this->User_model->update_user($id, $data);
            redirect('users');
        } else {
            $this->load->view('users/edit', $data);
        }
    }

    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('users');
    }
}
