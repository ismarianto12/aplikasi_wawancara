<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pasien_model extends CI_Model
{

    public $table = 'pasien';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,no_reg,nama,nik,nk,ttl,date_created,date_updated');
        $this->datatables->from('pasien');
        //add this line for join
        //$this->datatables->join('table2', 'pasien.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('pasien/detail/$1'),'<i class="fa fa-book"></i>','class="btn waves-effect waves-light btn-primary btn-icon"')."  ".anchor(site_url('pasien/edit/$1'),'<i class="fa fa-edit"></i> ','class="btn waves-effect waves-light btn-warning btn-icon"')."<a href='#' class='btn waves-effect waves-light btn-danger btn-icon' onclick='javasciprt: return hapus($1)'><i class='fa fa-trash'></i> </a>", 'id');
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
        $this->db->like('id', $q);
	$this->db->or_like('no_reg', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nk', $q);
	$this->db->or_like('ttl', $q);
	$this->db->or_like('date_created', $q);
	$this->db->or_like('date_updated', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('no_reg', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nk', $q);
	$this->db->or_like('ttl', $q);
	$this->db->or_like('date_created', $q);
	$this->db->or_like('date_updated', $q);
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

 