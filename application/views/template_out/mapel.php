
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Data Mata Pelajaran</b></center>
                <br>
                <div class="card-body">
                <form action="<?php echo base_url('index.php/Study_input_data/update'); ?>" method="post">
                    
                         <?php echo form_open('Study_input_data/insert_data'); ?>
                        <tr>
                            <th><label for="kode_mapel">Kode Mapel:</label></th>
                            <td><input type="text" name="kode_mapel" id="kode_mapel" class="form-control" readonly value="<?php echo $mapel->kode_mapel; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="nama_mapel">Nama Mapel:</label></th>
                            <td><input type="text" name="nama_mapel" id="nama_mapel" class="form-control" readonly value="<?php echo $mapel->nama_mapel; ?>"><br></td>
                        </tr>

                        <?php echo form_close(); ?>
                        </form>
            </div>
        </main>
    </div>