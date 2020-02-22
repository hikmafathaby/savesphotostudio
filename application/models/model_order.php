<?php

class model_pesanan extends CI_model
{
	
	function input_data($data, $table)
    {
        $this->db->insert($table,$data);
    }

    function tampil_data($data, $table)
    {
        return $this->db->get('pelanggan');
    }

    function get($table)
    {
        $this->db->select('*');
        $this->db->from($table);

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

    function list_daftarPesanan()
    {
    	$this->db->select('*');
    	$this->db->from('detail_pesanan');
    	$query = $this->db->get();
    	return $query;
    }

    public function cetak_nota($where)
    {
    	$query = $this->db->get_where('detail_pesanan',['id_pelanggan'=>$where])->row_array();
    	return $query;	
    }
}

?>

//ini gak dipake dulu ya. Pakenya yang model website aja