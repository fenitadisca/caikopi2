<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Form Nomor Induk Koperasi';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['form'] = $this->db->get('identity_koperasi')->result_array();

        $this->form_validation->set_rules('form/index', 'Form/index', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('form/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('identity_koperasi', ['form' => $this->input->post('form/index')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('form/index');
        }
    }

    public function susunan()
    {
        $data['title'] = 'Form Susunan Organisasi';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['form/susunan'] = $this->db->get('susunan_organisasi')->result_array();

        $this->form_validation->set_rules('form/susunan', 'Form/susunan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('form/susunan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('susunan_organisasi', ['form/susunan' => $this->input->post('form/susunan')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('form/susunan');
        }
    }

    public function insert()
    {
        
        
       if($this->input->post('nik')){
            $this->db->insert('identity_koperasi', $this->input->post());
            redirect('form/index');
        } 
      
        if(isset($_POST['submit'])){ 
            // var_dump($_POST);
            $this->db->insert('susunan_organisasi', $this->input->post());
            redirect('form/susunan');
        }  
    }
}