<?php

class model_pesanan extends CI_model
{
    
    function input($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function tampil_data($data, $table)
    {
        return $this->db->get('pelanggan');
    }

    public function get($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        // $this->db->order_by('id_pesanan', 'DESC');

        $query = $this->db->get()->result();
        return $query;
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function listpesanan()
    {
        $this->db->select('*');
        $this->db->from('detail_pesanan');
        $query = $this->db->get();
        return $query;
    }

    public function cetak_nota($where)
    {
        $query = $this->db->get_where('detail_pesanan', ['nama_pelanggan'=>$where])->row_array();
        return $query;
    }

    public function getid()
    {
        $this->db->select('nama_pelanggan');
        $this->db->from('detail_pesanan');
        $this->db->order_by('id_pesanan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
    }

}