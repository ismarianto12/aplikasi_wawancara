<?php

/*developed by ismarianto putra
  you can visit my site in ismarianto.com
  for more complain anda more information.  
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // login_access();
        // hak_akses();
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $x['judul'] = 'Data : Pasien';
        $this->template->load('template', 'pasien/pasien_list', $x);
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Pasien_model->json();
    }

    public function detail($id)
    {
        $row = $this->Pasien_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'no_reg' => $row->no_reg,
                'nama' => $row->nama,
                'nik' => $row->nik,
                'nk' => $row->nk,
                'ttl' => $row->ttl,
                'date_created' => $row->date_created,
                'date_updated' => $row->date_updated,

                'judul' => 'Detail :  PASIEN',
            );
            $this->template->load('template', 'pasien/pasien_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('pasien'));
        }
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Tambah Pasien',
            'button' => 'Create',
            'action' => site_url('pasien/tambah_data'),
            'id' => set_value('id'),
            'no_reg' => set_value('no_reg'),
            'nama' => set_value('nama'),
            'nik' => set_value('nik'),
            'nk' => set_value('nk'),
            'ttl' => set_value('ttl'),
            'date_created' => set_value('date_created'),
            'date_updated' => set_value('date_updated'),
        );
        $this->template->load('template', 'pasien/pasien_form', $data);
    }

    public function tambah_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'no_reg' => $this->input->post('no_reg', TRUE),
                'nama' => $this->input->post('nama', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'nk' => $this->input->post('nk', TRUE),
                'ttl' => $this->input->post('ttl', TRUE), 
                 'date_created' => date('Y-m-d'),
                'date_updated' => date('Y-m-d'),
            );

            $this->Pasien_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Data Berhasil Di Tambahkan.</div>');
            redirect(site_url('pasien'));
        }
    }

    public function edit($id)
    {
        $row = $this->Pasien_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul' => 'Data PASIEN',
                'button' => 'Update',
                'action' => site_url('pasien/edit_data'),
                'id' => set_value('id', $row->id),
                'no_reg' => set_value('no_reg', $row->no_reg),
                'nama' => set_value('nama', $row->nama),
                'nik' => set_value('nik', $row->nik),
                'nk' => set_value('nk', $row->nk),
                'ttl' => set_value('ttl', $row->ttl),
                'date_created' => set_value('date_created', $row->date_created),
                'date_updated' => set_value('date_updated', $row->date_updated),
            );
            $this->template->load('template', 'pasien/pasien_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info fade-in">Data Tidak Di Temukan.</div>');
            redirect(site_url('pasien'));
        }
    }

    public function edit_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
                'no_reg' => $this->input->post('no_reg', TRUE),
                'nama' => $this->input->post('nama', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'nk' => $this->input->post('nk', TRUE),
                'ttl' => $this->input->post('ttl', TRUE),
                'date_created' => date('Y-md'),
                'date_updated' => date('Y-md'),
            );

            $this->Pasien_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade-in"><i class="fa fa-check"></i>Edit Data Berhasil.</div>');
            redirect(site_url('pasien'));
        }
    }

    public function hapus($id)
    {
        $row = $this->Pasien_model->get_by_id($id);

        if ($row) {
            $this->Pasien_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger fade-in"><i class="fa fa-check"></i>Data Berhasil Di Hapus</div>');
            redirect(site_url('pasien'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warniing fade-in">Ops Something Went Wrong Please Contact Administrator.</div>');
            redirect(site_url('pasien'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no_reg', 'no reg', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('nk', 'nk', 'trim|required');
        $this->form_validation->set_rules('ttl', 'ttl', 'trim|required');  

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pasien.xls";
        $judul = "pasien";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
        xlsWriteLabel($tablehead, $kolomhead++, "No Reg");
        xlsWriteLabel($tablehead, $kolomhead++, "Nama");
        xlsWriteLabel($tablehead, $kolomhead++, "Nik");
        xlsWriteLabel($tablehead, $kolomhead++, "Nk");
        xlsWriteLabel($tablehead, $kolomhead++, "Ttl");
        xlsWriteLabel($tablehead, $kolomhead++, "Date Created");
        xlsWriteLabel($tablehead, $kolomhead++, "Date Updated");

        foreach ($this->Pasien_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
            xlsWriteLabel($tablebody, $kolombody++, $data->no_reg);
            xlsWriteLabel($tablebody, $kolombody++, $data->nama);
            xlsWriteLabel($tablebody, $kolombody++, $data->nik);
            xlsWriteLabel($tablebody, $kolombody++, $data->nk);
            xlsWriteLabel($tablebody, $kolombody++, $data->ttl);
            xlsWriteLabel($tablebody, $kolombody++, $data->date_created);
            xlsWriteLabel($tablebody, $kolombody++, $data->date_updated);

            $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=pasien.doc");

        $data = array(
            'pasien_data' => $this->Pasien_model->get_all(),
            'start' => 0
        );

        $this->load->view('template', 'pasien/pasien_doc', $data);
    }
}
