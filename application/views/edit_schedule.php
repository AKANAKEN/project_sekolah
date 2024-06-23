<!-- application/views/edit_guru.php -->

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Edit Jadwal</b></center>
                <br>
                <div class="card-body">
                <form action="<?php echo base_url('index.php/schedule_data/update/'); ?>" method="post">
                    
                      
                        <tr>
                            <th><label for="id_jadwal">ID Jadwal:</label></th>
                            <td><input type="text" name="id_jadwal" id="id_jadwal" class="form-control" readonly value="<?php echo $jadwal->id_jadwal; ?>"><br></td>
                        </tr>
                        <tr>
                            <th><label for="Hari">Hari:</label></th>
                            <th> <select id="Hari" class="form-control" name="Hari">
                                <option value=" <?php echo $jadwal->Hari; ?>"><?php echo $jadwal->Hari; ?></option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select><br>
                                
                        </tr>

                        <tr>
                            <th><label for="Jam_mulai">Jam Mulai:</label></th>
                            <td><input type="time" name="Jam_mulai" id="Jam_mulai" class="form-control" value="<?php echo $jadwal->Jam_mulai; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="Jam_selesai">Jam Selesai:</label></th>
                            <td><input type="time" name="Jam_selesai" id="Jam_selesai" class="form-control" value="<?php echo $jadwal->Jam_selesai; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="kode_kelas">Kode Kelas:</label></th>
                            <td><input type="text" name="kode_kelas" id="kode_kelas" class="form-control" value="<?php echo $jadwal->kode_kelas; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="kode_ruangan">Kode Ruangan:</label></th>
                            <td><input type="text" name="kode_ruangan" id="kode_ruangan" class="form-control" value="<?php echo $jadwal->kode_ruangan; ?>"><br></td>
                        </tr>

                        <tr>
                            <th><label for="kode_mapel">Kode Mapel :</label></th>
                            <td><input type="text" name="kode_mapel" id="kode_mapel" class="form-control" value="<?php echo $jadwal->kode_mapel; ?>"><br></td>
                        </tr>
                      
                        <tr>
                            <th><label for="NIP">NIP Guru :</label></th>
                            <td><input type="text" name="NIP" id="NIP" class="form-control" value="<?php echo $jadwal->NIP; ?>"><br></td>
                        </tr>
                        

                        <th>
                        <th><input type="submit" class="form-control"  value="Submit"></th>
                        </tr>
                        <?php echo form_close(); ?>
                    

                        </form>
            </div>
        </main>
    </div>
