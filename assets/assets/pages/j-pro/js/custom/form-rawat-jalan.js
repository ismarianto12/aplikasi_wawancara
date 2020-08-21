$(document).ready(function(){
			// Phone masking
			$('#phone').mask('(999) 999-9999', {placeholder:'x'});

			// Validation
			$( "#j-pro" ).justFormsPro({
				rules: {
					no_reg: {
						required: true
					},
					nama_lengkap: {
						required: true
					},
					no_nik: {
						required: true
					},
					no_kk: {
						required: true
					},
					pekerjaan: {
						required: true
					},
					jenis_kelamin: {
						required: true
					},
					tempat_lahir: {
						required: true
					},
					tanggal_lahir: {
						required: true
					},
					jenis_kasus: {
						required: true
					},
					diagnosa_penyakit: {
						required: true
					},
					kode_penyakit: {
						required: true
					},
					pengobatan: {
						required: true
					},
					rujukan: {
						required: true
					},
					lama_rawat_inap: {
						required: true
					},
				},
				messages: {
					no_reg: {
						required: "Masukkan no register"
					},
					nama_lengkap: {
						required: "Masukkan nama lengkap pasien"
					},
					no_nik: {
						required: "No NIK sesuai KTP"
					},
					no_kk: {
						required: "No KK sesuai Kartu Keluarga"
					},
					pekerjaan: {
						required: "Pilih jenis pekerjaan"
					},
					jenis_kelamin: {
						required: "Pilih jenis kelamin"
					},
					tempat_lahir: {
						required: "Tempat lahir sesuai KTP"
					},
					tanggal_lahir: {
						required: "Tanggal lahir sesuai KTP"
					},
					jenis_kasus: {
						required: "Pilih jenis kasus"
					},
					diagnosa_penyakit: {
						required: "Masukkan jenis diagnosa penyakit"
					},
					kode_penyakit: {
						required: "Masukkan kode penyakit"
					},
					pengobatan: {
						required: "Masukkan jenis pengobatan/tindakan"
					},
					rujukan: {
						required: "Pilih jenis rujukan"
					},
					lama_rawat_inap: {
						required: "Pilih berapa lama rawat inap pasien"
					},
				},
				debug: true
			});
		});