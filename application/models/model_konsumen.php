<?php  
/**
 * 
 */
class model_konsumen extends CI_Model
{
	
	function cek_user($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user');
		return $query;
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function ambil_data($table)
	{
		return $this->db->get($table)->result();
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update($where, $data, $table)
	{
		$this->db->update($table, $data, array('id_pesanan' => $where));
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}

?>