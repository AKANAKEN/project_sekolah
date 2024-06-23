<!-- application/views/edit_class.php -->

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Data Ruangan</b></center>
                <br>
                <div class="card-body">
                <form action="<?php echo base_url('index.php/Room_data/update'); ?>" method="post">
                  
                        
                        <tr>
                            <th><label for="kode_ruangan">Kode Ruangan:</label></th>
                            <td><input type="text" name="kode_ruangan" id="kode_ruangan" class="form-control" readonly value="<?php echo $ruangan->kode_ruangan; ?>"><br></td>
                        </tr>
                        <tr>
                            <th><label for="kapasitas_ruangan">Kapasitas Ruangan:</label></th>
                            <td><input type="text" name="kapasitas_ruangan" id="kapasitas_ruangan" class="form-control" readonly value="<?php echo $ruangan->Kapasitas_ruangan; ?>"><br></td>
                        </tr>

                        <th>
                        <!-- <th><input type="submit" value="Submit"></th> -->
                        </tr>
                        <?php echo form_close(); ?>
                   
                   
                </form>
            </div>
        </main>
    </div>
