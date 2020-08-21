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
					no_ktp: {
						required: true
					},
					no_kk: {
						required: true
					},
					tempat_lahir: {
						required: true
					},
					tanggal_lahir: {
						required: true
					},
					jenis_kelamin: {
						required: true
					},
					alamat: {
						required: true
					},
					kabupaten: {
						required: true
					},
					kota: {
						required: true
					},
					provinsi: {
						required: true
					}
				},
				messages: {
					no_reg: {
						required: "Masukkan no register"
					},
					nama_lengkap: {
						required: "Masukkan nama sesuai KTP"
					},
					no_ktp: {
						required: "Masukkan no KTP sesuai KTP"
					},
					no_kk: {
						required: "Masukkan no KK sesuai KK"
					},
					tempat_lahir: {
						required: "Masukkan tempat lahir sesuai KTP"
					},
					tanggal_lahir: {
						required: "Masukkan tanggal lahir sesuai KTP"
					},
					jenis_kelamin: {
						required: "Pilih jenis kelamin sesuai KTP"
					},
					alamat: {
						required: "Masukkan alamat sesuai KTP"
					},
					kabupaten: {
						required: "Masukkan sesuai KTP"
					},
					kota: {
						required: "Masukkan sesuai KTP"
					},
					provinsi: {
						required: "Masukkan sesuai KTP"
					}
				},
				debug: true
			});
		});