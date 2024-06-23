<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Form Input Siswa</b></center>
                <br>
                <div class="card-body">
    <?php echo form_open('Student_input/insert_data'); ?>
    <tr><th><label for="NIS">NIS:</label></th>
    <td><input type="text" name="NIS"  class="form-control"  id="NIS"><br></td></tr>

    <tr><th><label for="nama_siswa">Nama Siswa:</label></th>
    <td><input type="text" name="nama_siswa"  class="form-control" id="nama_siswa"><br></td></tr>

    <tr><th><label for="Alamat">Alamat:</label></th>
    <td><input type="text" name="Alamat"  class="form-control" id="Alamat"><br></td></tr>

    <tr><th><label for="Tanggal_lahir">Tanggal Lahir:</label></th>
    <td><input type="date" name="Tanggal_lahir"  class="form-control" id="Tanggal_lahir"><br></td></tr>
    
    <tr><th><label for="jenis_kelamin">Jenis Kelamin:</label></th>
    <td><select name="jenis_kelamin"  class="form-control" id="jenis_kelamin">
                                    <option value=" ">-Jenis Kelamin-</option>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select><br></td></tr>
    
    <tr><th><label for="kode_kelas">Kode Kelas:</label></th>
    <td><input type="text" name="kode_kelas" class="form-control"  id="kode_kelas"><br></td></tr>

    <tr><th><input type="submit"  class="form-control" value="Submit"></th></tr>
    <?php echo form_close(); ?>
    </form>
            </div>
        </main>
    </div>

