<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_hbd extends CI_Model
{
    private $_table  = "orang";

    public $id_orang;
    public $nama_orang;
    public $tgl_lahir;

    public function rules()
    {
        return [
            ['field' => 'nama_orang',
            'label' => 'Nama Orang',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_orang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_orang = ucwords($post['nama_orang']);
        $this->tgl_lahir  = $post['tgl_lahir'];

        $this->db->insert($this->_table, $this);
    }    

    public function update()
    {
        $post = $this->input->post();

        $this->id_orang   = $post['id_orang'];
        $this->nama_orang = ucwords($post['nama_orang']);
        $this->tgl_lahir  = $post['tgl_lahir'];

        $this->db->update($this->_table, $this, array('id_orang' => $post['id_orang']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_orang" => $id));
	}
}
