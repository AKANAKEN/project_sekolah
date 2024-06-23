

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Form Input Jadwal</b></center>
                <br>
                <div class="card-body">
                    <form action="<?php echo site_url('schedule_input_data/insert_data') ?>" method="post">
                        <div>
                            <label for="Hari">Hari</label>
                            <select id="Hari" class="form-control" name="Hari">
                                <option value=" ">-input Hari-</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div>
                            <label for="jam_mulai">Jam Mulai</label>
                            <input type="time" id="jam_mulai" class="form-control" name="jam_mulai">
                        </div>
                        <div>
                            <label for="jam_selesai">Jam Selesai</label>
                            <input type="time" id="jam_selesai" class="form-control" name="jam_selesai">
                        </div>
                        <div>
                            <label for="kode_kelas">Kode Kelas</label>
                            <input type="text" id="kode_kelas" class="form-control" name="kode_kelas">

                        </div>
                        <div>
                            <label for="kode_ruangan">Kode Ruangan</label>
                            <input type="text" id="kode_ruangan" class="form-control" name="kode_ruangan">

                        </div>
                        <div>
                            <label for="nip">NIP Guru</label>
                            <input type="text" id="nip" class="form-control" name="nip">

                        </div>
                        <div>
                            <label for="kode_mapel">Kode Mapel</label>
                            <input type="text" id="kode_mapel" class="form-control" name="kode_mapel">

                        </div>


                        <button type="submit">Simpan</button>
                        </form>
            </div>
        </main>
    </div>