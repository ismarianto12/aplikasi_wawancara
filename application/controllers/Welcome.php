<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if ($this->uri->segment(1) == 'welcome' or $this->uri->segment(1) == 'Welcome') {
      $this->template->load('template_depan', 'Not_found', array('judul' => 'Halaman tidak ada.'));
      exit();
    };
    if ($this->session->userdata('id_user') != '' or $this->session->userdata('Login') == TRUE) {
      redirect(base_url('dasboard?login=true'));
      exit();
    };
    /*load model */
    $this->load->model('Depan_model');
    $this->load->model('Pmb_model');
    $this->load->library('form_validation');
  }
  function index()
  {
    $x = array('judul' => $this->config->item('judul_utama'));
    $this->load->view('login', $x);
  }
  /*daftar action*/




  /*login access*/
  function login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $cek = $this->db->limit(1)->get_where('login', array('username' => $username, 'password' => md5($password)));

    if ($cek->num_rows() > 0) {
      $session = [
        'username' => $cek->row()->username,
        'password' => $cek->row()->password,
        'nama' => $cek->row()->nama,
        'id_user' => $cek->row()->id_user,
        'level' => $cek->row()->level,
        'login' => TRUE,
      ];
      $this->session->set_userdata($session);

      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in"> Login Berhasil.</div>');
      redirect(base_url('/pasien'));
    } else {
      //  echo "n";

      $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Username dan passwod salah.</div>');
      redirect(base_url('/login'));
    }
  }

  function akses_login()
  {
    $x = array('judul' => 'Login Akses System.');
    $this->template->load('template_depan', 'depan/login_form', $x);
  }
  /*validasi pendaftaran user*/

  function _rules()
  {
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
    $this->form_validation->set_rules('tempatlahir', 'tempatlahir', 'trim|required');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('kota', 'kota', 'trim|required');
    $this->form_validation->set_rules('propinsi', 'propinsi', 'trim|required');
    $this->form_validation->set_rules('kodePos', 'kodepos', 'trim|required');
    $this->form_validation->set_rules('rt', 'rt', 'trim|required');
    $this->form_validation->set_rules('rW', 'rw', 'trim|required');
    $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('jenisSekolah', 'jenissekolah', 'trim|required');
    $this->form_validation->set_rules('namaSekolah', 'namasekolah', 'trim|required');
    $this->form_validation->set_rules('jurusanSekolah', 'jurusansekolah', 'trim|required');
    $this->form_validation->set_rules('tahunLulus', 'tahunlulus', 'trim|required');
    $this->form_validation->set_rules('nilaiSekolah', 'nilaisekolah', 'trim|required');
    $this->form_validation->set_rules('prodi_1', 'prodi 1', 'trim|required');
    $this->form_validation->set_rules('prodi_2', 'prodi 2', 'trim|required');
    $this->form_validation->set_rules('prodi_3', 'prodi 3', 'trim|required');
    $this->form_validation->set_rules('id_aplikan', 'id_aplikan', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
  }
  /*end validasi pendaftaran user*/

  function _404()
  {
    $this->template->load('template_depan', 'Not_found', array('judul' => 'Halaman tidak ada.'));
  }
}
