 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>No Reg</td><td><?php echo $no_reg; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Nik</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nk</td><td><?php echo $nk; ?></td></tr>
	    <tr><td>Ttl</td><td><?php echo $ttl; ?></td></tr>
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td>Date Updated</td><td><?php echo $date_updated; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pasien') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>