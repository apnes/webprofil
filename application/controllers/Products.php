<?php

/**
 * 
 */
class Products extends CI_Controller
{
	
	public function __construct()
	{
		# code...
		parent:: __construct();
		$this->load->model("product_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["products"] = $this->product_model->getAll();
		$this->load->view("admin/baru/data_produk",$data);
	}

	public function add ()
	{
		$products = $this->product_model;
		$validation = $this->form_validation;
		$validation->set_rules($products->rules());

		if ($validation->run()) {
			# code...
			$products->save();
			$this->session->set_flashdata('success','berhasil disimpan');
		}
		$this->load->view("admin/baru/tambah_produk");
	}

	public function edit($id=null)
	{
		if (!isset($id)) redirect("products");

		$produk = $this->product_model;
		$validation = $this->form_validation;
		$validation->set_rules($produk->rules());

		if ($validation->run()) {
			# code...
			$produk->update();
			$this->session->set_flashdata('success','berhasil disimpan');
		}

		$data["produtcs"] = $produk->getById($id);
		if (!$data["products"]) show_404();

		$this->load->view("admin/baru/edit_produk", $data);
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();
		if ($this->product_model->delete($id)) {
			# code...
			redirect(site_url('products/delete'));
		}
	}

	public function transaksi()
	{
		$this->load->view("admin/baru/laman_transaksi");

	}
	public function proses_tambah()
	{
		$data['kode_produk'] = $this->input->post('kode_produk');
		$data['nama_produk'] = $this->input->post('nama_produk');
		$data['harga'] = $this->input->post('harga');
		$this->product_model->insert_produk($data);
		redirect(site_url('data_produk'));
	}
}