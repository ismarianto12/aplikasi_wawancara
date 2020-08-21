 
    <body>
        <h2>Pasien List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Reg</th>
		<th>Nama</th>
		<th>Nik</th>
		<th>Nk</th>
		<th>Ttl</th>
		<th>Date Created</th>
		<th>Date Updated</th>
		
            </tr><?php
            foreach ($pasien_data as $pasien)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pasien->no_reg ?></td>
		      <td><?php echo $pasien->nama ?></td>
		      <td><?php echo $pasien->nik ?></td>
		      <td><?php echo $pasien->nk ?></td>
		      <td><?php echo $pasien->ttl ?></td>
		      <td><?php echo $pasien->date_created ?></td>
		      <td><?php echo $pasien->date_updated ?></td>	
                </tr>
                <?php
            }
            ?>
        