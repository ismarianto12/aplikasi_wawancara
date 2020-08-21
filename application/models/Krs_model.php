<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Krs_model extends CI_Model
{

    public $table = 'krs';
    public $id = 'id_krs';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_krs,kode_mk,kelas,mata_kuliah,sks,sesi,jam_mulai,jam_selesai,tanggal');
        $this->datatables->from('krs');
        //add this line for join
        //$this->datatables->join('table2', 'krs.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('krs/detail/$1'),'<i class="fa fa-book"></i>Read','class="btn btn-info btn-xs edit"')."  ".anchor(site_url('krs/edit/$1'),'<i class="fa fa-edit"></i> Update','class="btn btn-success btn-xs edit"')."<a href='#' class='btn btn-danger btn-xs delete' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> Delete</a>", 'id_krs');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_krs', $q);
	$this->db->or_like('kode_mk', $q);
	$this->db->or_like('kelas', $q);
	$this->db->or_like('mata_kuliah', $q);
	$this->db->or_like('sks', $q);
	$this->db->or_like('sesi', $q);
	$this->db->or_like('jam_mulai', $q);
	$this->db->or_like('jam_selesai', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_krs', $q);
	$this->db->or_like('kode_mk', $q);
	$this->db->or_like('kelas', $q);
	$this->db->or_like('mata_kuliah', $q);
	$this->db->or_like('sks', $q);
	$this->db->or_like('sesi', $q);
	$this->db->or_like('jam_mulai', $q);
	$this->db->or_like('jam_selesai', $q);
	$this->db->or_like('tanggal', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

 