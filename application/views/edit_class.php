<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Form Input Data Kelas</b></center>
                <br>
                <div class="card-body">
                <form action="<?php echo base_url('index.php/Class_data/update'); ?>" method="post">
                
                        
                        <tr>
                            <th><label for="kode_kelas">Kode Kelas:</label></th>
                            <td><input type="text" name="kode_kelas" id="kode_kelas" class="form-control" readonly value="<?php echo $classes->kode_kelas; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="wali_kelas">Wali Kelas:</label></th>
                            <td><input type="text" name="wali_kelas" id="wali_kelas" class="form-control" value="<?php echo $classes->wali_kelas; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="tahun_ajaran">Tahun Ajaran:</label></th>
                            <td><input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" value="<?php echo $classes->tahun_ajaran; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="jumlah_siswa">Jumlah Siswa:</label></th>
                            <td><input type="number" name="jumlah_siswa" id="jumlah_siswa" class="form-control" value="<?php echo $classes->jumlah_siswa; ?>"><br></td>
                        </tr>

                        <th>
                        <th><input type="submit" class="form-control"  value="Submit"></th>
                        </tr>
                        <?php echo form_close(); ?>
                  
                   
                    </form>
            </div>
        </main>
    </div>
