$(document).ready(function(){
			// Phone masking
			$('#phone').mask('(999) 999-9999', {placeholder:'x'});

			// Validation
			$( "#j-pro" ).justFormsPro({
				rules: {
					kode_puskesmas: {
						required: true
					},
					nama_puskesmas: {
						required: true
					},
					kelurahan: {
						required: true
					},
					kecamtan: {
						required: true
					},
					kabupaten: {
						required: true
					},
					kota: {
						required: true
					},
					pelapor: {
						required: true
					},
				},
				messages: {
					kode_puskesmas: {
						required: "Masukkan kode puskesmas"
					},
					nama_puskesmas: {
						required: "Masukkan nama puskesmas"
					},
					kelurahan: {
						required: "Masukkan nama kelurahan"
					},
					kecamtan: {
						required: "Masukkan nama kecamtan"
					},
					kabupaten: {
						required: "Masukkan nama kabupaten"
					},
					kota: {
						required: "Masukkan nama kota"
					},
					pelapor: {
						required: "Masukkan nama pelapor"
					}
				},
				debug: true
			});
		});