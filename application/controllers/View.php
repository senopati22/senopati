<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model("m_hbd");
        $this->load->library('form_validation');
        $this->load->helper('short_number');
        $this->load->helper('indonesian_date');
    }

    public function index()
    {
        $data["hbd"] = $this->m_hbd->getAll();
        $this->load->view("view", $data);
    }

    public function Orang()
    {
        $data["orang"] = $this->m_hbd->getAll();
        $this->load->view("front/list_orang", $data);
    }

    public function add()
    {
        $org = $this->m_hbd;
        $validation = $this->form_validation;
        $validation->set_rules($org->rules());

        if ($validation->run())
        {
            $post         = $this->input->post();
            $nama_orang   = $post['nama_orang'];

            $qq = $this->db->query("SELECT * from orang where nama_orang = '$nama_orang'")->row();

            if($qq <= "")
            {
                $org->save();
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success - </strong> Data Orang berhasil di-<b>TAMBAH</b>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
            }
            else
            {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Peringatan - </strong> Nama Orang <b>SUDAH ADA</b>. Silahkan beri nama orang yang lain.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
            }
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('view/orang');
       
        $org = $this->m_hbd;
        $validation = $this->form_validation;
        $validation->set_rules($org->rules());

        if ($validation->run()) {
            $org->update();
            
            $post = $this->input->post();
            $this->session->set_flashdata('sukses', 'ksdkjsd');
        }

        $data["org"] = $org->getById($id);
        if (!$data["org"]) show_404();
        
        $this->load->view("front/edit_form_orang", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_hbd->delete($id)) {
            redirect(site_url('view/orang'));
        }
    }
}
