<?php

class M_peserta extends CI_Model
{
    private $_table = "tbl_peserta";

    public function viewPeserta()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function addPeserta()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nohp' => $this->input->post('nohp', true)
        );

        $this->db->insert($this->_table, $data);
    }

    public function delete($id_peserta)
    {
        $this->db->where('id_peserta', $id_peserta);
        $this->db->delete($this->_table);
    }

    public function edit($id_peserta)
    {
        return $this->db->get_where($this->_table, ['id_peserta' => $id])->row_array();
    }

    public function prosesedit()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp')
        );

        $this->db->where('id_peserta', $this->input->post('id_peserta'));
        $this->db->update($this->_table, $data);

    } 
}