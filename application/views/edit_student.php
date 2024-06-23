<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Edit Siswa</b></center>
                <br>
                <div class="card-body">
                <form action="<?php echo base_url('index.php/Student_input/update/'); ?>" method="post">
                

                        <tr>
                            <th><label for="NIS">NIS:</label></th>
                            <td><input type="text" name="NIS" id="NIS"  class="form-control" readonly value="<?php echo $siswa->NIS; ?>"><br></td>
                        </tr>
                        <tr>
                            <th><label for="nama_siswa">Nama Siswa:</label></th>
                            <th><input type="text" name="nama_siswa" id="nama_siswa"  class="form-control" value="<?php echo $siswa->nama_siswa; ?>"></th><br>
                        </tr>

                        <tr>
                            <th><label for="Alamat">Alamat:</label></th>
                            <td><input type="text" name="Alamat" id="Alamat"  class="form-control" value="<?php echo $siswa->Alamat; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="jenis_kelamin">Jenis Kelamin:</label></th>
                            <td><select name="jenis_kelamin" id="jenis_kelamin" class="form-control" >
                                    <option value="<?php echo $siswa->jenis_kelamin; ?>"><?php echo $siswa->jenis_kelamin; ?></option>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                               <br>
                            </td>
                        </tr>

                        <tr>
                            <th><label for="Tanggal_lahir">Tanggal Lahir:</label></th>
                            <td><input type="date" name="Tanggal_lahir" id="Tanggal_lahir"  class="form-control" value="<?php echo $siswa->Tanggal_lahir; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="kode_kelas">Kode Kelas:</label></th>
                            <td><input type="text" name="kode_kelas" id="kode_kelas"  class="form-control" value="<?php echo $siswa->kode_kelas; ?>"><br></td>
                        </tr>

                        <th>
                        <th><input type="submit"  class="form-control" value="Submit"></th>
                        </tr>
                        <?php echo form_close(); ?>
                 

                    </form>
            </div>
        </main>
    </div>
