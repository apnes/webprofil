<?php

/**
 * 
 */
class Product_model extends CI_Model
{
	
	private $_table = "tb_produk";

	
	public $kode_produk;
	public $harga;
//	public $image = "default.jpg";
	public $nama_produk;

	public function rules()
	{
		return [
			['field' => 'nama_produk',
			'label' => 'Nama_produk',
			'rules' => 'required'],

			['field' => 'harga',
			'label' => 'Harga',
			'rules' => 'numeric'],

			['field' => 'kode_produk',
			'label' => 'Kode_produk',
			'rules' => 'required'],
		];

	}
	public function getAll ()
	{
		return $this->db->get($this->_table)->result();
	}
	public function getById ($id)
	{
		return $this->db->get_where($this->_table, ["kode_produk"=> $id])->row();
	}
	public function save()
	{
		$post = $this->input->post();
		
		$this->nama_produk=$post["nama_produk"];
		$this->harga=$post["harga"];
		$this->kode_produk=$post["kode_produk"];
		$this->db->insert($this->_table, $this);

	}
	public function update ()
	{
		$post = $this->input->post();
		$this->id_produk= uniqid();
		$this->nama_produk=$post["nama_produk"];
		$this->harga=$post["harga"];
		$this->kode_produk=$post["kode_produk"];
		$this->db->update($this->_table, $this,array('id_produk'=> $post['id']));
	}
	public function delete($id)
	{
		return $this->db->delete($this->_table, array("kode_produk"=>$id));
	}
	public function insert_produk($data){
		$this->db->insert('tb_produk',$data);

	}
}