<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <div class='panel-heading'><?= ucfirst($judul) ?></div>
                        <div class="card-block">
                            <div class='panel-body'>
                                <form action="<?php echo $action; ?>" method="post" class='form-horizontal form-bordered'>
                                    <div class='form-body'>
                                        ** ) Harap Isikan data yang di butuhkan pada form.
                                        <br /><br /><br /><br />
                                        <div class="form-group">
                                            <label for="varchar" class='control-label col-md-3'><b>No Reg<?php echo form_error('no_reg') ?></b></label>
                                            <div class='col-md-9'>
                                                <input type="text" class="form-control" name="no_reg" id="no_reg" placeholder="No Reg" value="<?php echo $no_reg; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="varchar" class='control-label col-md-3'><b>Nama<?php echo form_error('nama') ?></b></label>
                                            <div class='col-md-9'>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="varchar" class='control-label col-md-3'><b>Nik<?php echo form_error('nik') ?></b></label>
                                            <div class='col-md-9'>
                                                <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="varchar" class='control-label col-md-3'><b>Nk<?php echo form_error('nk') ?></b></label>
                                            <div class='col-md-9'>
                                                <input type="text" class="form-control" name="nk" id="nk" placeholder="Nk" value="<?php echo $nk; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="varchar" class='control-label col-md-3'><b>Ttl<?php echo form_error('ttl') ?></b></label>
                                            <div class='col-md-9'>
                                                <input type="text" class="form-control" name="ttl" id="ttl" placeholder="Ttl" value="<?php echo $ttl; ?>" />
                                            </div>
                                        </div>
                                         
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />


                                        <div class='form-actions'>
                                            <div class='row'>
                                                <div class='col-md-12'>
                                                    <div class='row'>
                                                        <div class='col-md-offset-3 col-md-9'>
                                                            <button type="submit" class="btn btn-info"><i class='fa fa-check'></i><?php echo $button ?></button>
                                                            <a href="<?php echo site_url('pasien') ?>" class="btn btn-default"><i class='fa fa-share'></i>Cancel</a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>