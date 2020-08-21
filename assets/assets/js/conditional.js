"use strict";

$(document).ready(function() {

    // -----------HALAMAN DATA PENYAKIT DETAIL-------------

    $("#seeAnotherFieldDiagnosis").change(function() {
        if ($(this).val() == "F00# Gangguan Mental Oganik (GMO)") {
            $('#f00_gmo').show();
            $("#f00_gmo").val("");

            // Hide yg lain	
            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");
            
        } 
        
        else if ($(this).val() == "F10# Gangguan Mental dan Perilaku Akibat Penggunaan Zat Psikoaktif") { 
            $('#f10').show();
            $("#f10").val("");

            // Hide yg lain		
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");
        } 
        
        else if ($(this).val() == "F20# Skizofrenia dan Gangguan Psikotik Kronik lain") { 
            $('#f20').show();
            $("#f20").val("");

            // Hide yg lain	
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");
            
        } 

        else if ($(this).val() == "F30# Gangguan Suasana Perasaan (Mood/Afektif)") { 
            $('#f30').show();
            $("#f30").val("");

            // Hide yg lain	
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");	
        }

        else if ($(this).val() == "F40# Gangguan Neurotik, Somatoform dan Gangguan Terkait Stres") { 
            $('#f40').show();
            $("#f40").val("");

            // Hide yg lain
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");	

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");	
        }

        else if ($(this).val() == "F50# Sindrom Perilaku yang Berhubungan Dengan Gangguan Fisiologis dan Faktor Fisik") { 
            $('#f50').show();
            $("#f50").val("");

            // Hide yg lain	
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");	

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");
        }

        else if ($(this).val() == "F80-90# Gangguan Perkembangan Psikologis") { 
            $('#f8090').show();
            $("#f8090").val("");

            // Hide yg lain		
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f90').hide();
            $("#f90").val("");

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");
        }

        else if ($(this).val() == "F90# Gangguan Perilaku dan Emosional Masa Kanak dan Remaja") { 
            $('#f90').show();
            $("#f90").val("");

            // Hide yg lain	
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");	
        }

        else if ($(this).val() == "Diagnosis Lainnya") { 
            $('#diagnosislainnya').show();
            $("#diagnosislainnya").val("");

            // Hide yg lain	
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");	
        }
        
        else { 
            $('#f00_gmo').hide();
            $("#f00_gmo").val("");

            $('#f10').hide();
            $("#f10").val("");

            $('#f20').hide();
            $("#f20").val("");
            
            $('#f30').hide();
            $("#f30").val(""); 

            $('#f40').hide();
            $("#f40").val("");

            $('#f50').hide();
            $("#f50").val("");

            $('#f8090').hide();
            $("#f8090").val("");

            $('#f90').hide();
            $("#f90").val("");

            $('#diagnosislainnya').hide();
            $("#diagnosislainnya").val("");
            				
        }
    });
    $("#seeAnotherFieldDiagnosis").trigger("change");
     
    $("#seeAnotherFieldKeperawatan").change(function() {
        if ($(this).val() == "Keperawatan Lainnya") {
            $('#keperawatanlainnya').show();
            $("#keperawatanlainnya").val("");
            
        }else { 
            $('#keperawatanlainnya').hide();
            $("#keperawatanlainnya").val("");
            				
        }
    });
    $("#seeAnotherFieldKeperawatan").trigger("change");


    // -------------- HALAMAN tambah-data-rawat-jalan-detail-form-pasung ---------------

    $("#seeAnotherFieldTanggalPasung").change(function() {
        if ($(this).val() == "Ya") {
            $('#tangalpasungkembali').show();
            $("#tangalpasungkembali").val("");
            
        }else { 
            $('#tangalpasungkembali').hide();
            $("#tangalpasungkembali").val("");
            				
        }
    });
    $("#seeAnotherFieldTanggalPasung").trigger("change");

});

$(document).ready(function() {
	var max_fields      = 3; 
	var wrapper   		= $(".input-tambah"); 
	var add_button      = $("#tambah-form"); 
	
	var x = 1; 
	$(add_button).click(function(e){ 
		e.preventDefault();
		if(x < max_fields){ 
			x++; 
            $(wrapper).append('<div><div class="row j-content"><div class="j-unit col-md-6"> <label>Nama Obat :</label><br><br><input type="text" placeholder="Nama Obat" class="form-control" name="nb[]"></div><div class="j-unit col-md-6"><label>Jumlah Obat :</label><br><br><label class="j-input j-select"><select name="jb"><option value="" selected="">Jumlah Obat</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="4">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select><i></i></label></div></div>');
            // $(wrapper).append('<div><input type="text" placeholder="Jumlah Obat" name="jb[]"/><a href="#" class="remove_field">Remove</a></div>');
		}
	});
	
	$(wrapper).on("click","#remove_field", function(e){ 
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
$(document).ready(function() {
	var max_fields      = 1000; 
	var wrapper   		= $(".tambah-peserta"); 
	var add_button      = $("#tambah-peserta"); 
	
	var x = 1; 
	$(add_button).click(function(e){ 
		e.preventDefault();
		if(x < max_fields){ 
			x++; 
            $(wrapper).append('<div class="j-content"><div class="row"><div class="j-unit col-md-4"><div class="j-input"><label class="j-icon-right" for="nama_lengkap"><i class="icofont icofont-building"></i></label><input type="text" id="mytext[]" placeholder="Nama Lengkap" name="nama_lengkap" ></div></div><div class="j-unit col-md-4"><div class="j-input"><label class="j-icon-right" for="no_nik"><i class="icofont icofont-building"></i></label><input type="text" id="mytext[]" placeholder="NIK" name="no_nik"><br>&nbsp;<input type="radio" name="tidak_ada_nik" id="">&nbsp;Tidak Punya NIK ?<br>&nbsp;</div><br>&nbsp;</div><div class="j-unit col-md-4"></div><div class="j-unit col-md-4"><label class="j-icon-right" for="umur"><i class="icofont icofont-building"></i></label><input type="text" id="mytext[]" placeholder="Umur" name="umur" ></div><div class="j-unit col-md-4"><label class="j-input j-select"><select name="jenis_kelamin" id="mytext[]"><option value="" selected>Perempuan</option><option value="laki-laki">Laki-laki</option><option value="perempuan">Perempuan</option></select><i></i></label></div></div>');
            // $(wrapper).append('<div><input type="text" placeholder="Jumlah Obat" name="jb[]"/><a href="#" class="remove_field">Remove</a></div>');
		}
	});
	
	$(wrapper).on("click","#remove_field", function(e){ 
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
$(document).ready(function() {
	var max_fields      = 1000; 
	var wrapper   		= $(".tambah-peserta_pk"); 
	var add_button      = $("#tambah-peserta_pk"); 
	
	var x = 1; 
	$(add_button).click(function(e){ 
		e.preventDefault();
		if(x < max_fields){ 
			x++; 
            $(wrapper).append('<div class="j-content"><div class="row"><div class="j-unit col-md-4"><div class="j-input"><label class="j-icon-right" for=""><i class="icofont icofont-building"></i></label><input type="text" id="mytext[]" placeholder="Nama Kelompok" name="nama_kelompok" ></div></div><div class="j-unit col-md-4"><div class="j-input"><label class="j-icon-right" for=""><i class="icofont icofont-building"></i></label><input type="text" id="mytext[]" placeholder="Jenis Kelompok" name="jenis_kelompok"></div></div><div class="j-unit col-md-4"><label class="j-icon-right" for=""><i class="icofont icofont-building"></i></label><input type="text" id="mytext[]" placeholder="Jumlah Kelompok" name="jumlah_kelompok"></div>');
            // $(wrapper).append('<div><input type="text" placeholder="Jumlah Obat" name="jb[]"/><a href="#" class="remove_field">Remove</a></div>');
		}
	});
	
	$(wrapper).on("click","#remove_field", function(e){ 
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});