<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Edit Guru</b></center>
                <br>
                <div class="card-body">
                <form action="<?php echo base_url('index.php/Class_teacher/update/'); ?>" method="post">
             
                    
                        <tr>
                            <th><label for="NIP">NIP:</label></th>
                            <td><input type="text" name="NIP" id="NIP"  class="form-control" readonly value="<?php echo $guru->NIP; ?>"><br></td>
                        </tr>
                        <tr>
                            <th><label for="nama_guru">Nama Guru:</label></th>
                            <th><input type="text" name="nama_guru" id="nama_guru"  class="form-control" value="<?php echo $guru->nama_guru; ?>"></th><br>
                        </tr>

                        <tr>
                            <th><label for="Alamat_guru">Alamat Guru:</label></th>
                            <td><input type="text" name="Alamat_guru" id="Alamat_guru"  class="form-control" value="<?php echo $guru->Alamat_guru; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="JK">Jenis Kelamin:</label></th>
                            <td><select name="JK"  class="form-control" id="JK">
                                    <option value="<?php echo $guru->JK; ?> "><?php echo $guru->JK; ?></option>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select><br></td></tr>
                        </tr>

                        <tr>
                            <th><label for="Tanggal_Lahir_guru">Tanggal Lahir guru :</label></th>
                            <td><input type="date" name="Tanggal_Lahir_guru" id="Tanggal_Lahir_guru" class="form-control"  value="<?php echo $guru->Tanggal_Lahir_guru; ?>"><br></td>
                        </tr>

                        <th>
                        <th><input type="submit"  class="form-control" value="Submit"></th>
                        </tr>
                        <?php echo form_close(); ?>
                   

                    </form>
            </div>
        </main>
    </div>
