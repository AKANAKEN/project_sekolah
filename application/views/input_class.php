
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Form Input Kelas</b></center>
                <br>
                <div class="card-body">
    <?php echo form_open('Class_data/insert_data'); ?>
    <tr><th><label for="kode_kelas">Kode Kelas:</label></th>
    <td><input type="text" name="kode_kelas"  class="form-control" id="kode_kelas"><br></td></tr>

    <tr><th><label for="wali_kelas">Wali Kelas:</label></th>
    <td><input type="text" name="wali_kelas"  class="form-control" id="wali_kelas"><br></td></tr>

    <tr><th><label for="tahun_ajaran">Tahun Ajaran:</label></th>
    <td><input type="text" name="tahun_ajaran"  class="form-control" id="tahun_ajaran"><br></td></tr>

    <tr><th><label for="jumlah_siswa">Jumlah Siswa:</label></th>
    <td><input type="text" name="jumlah_siswa"  class="form-control" id="jumlah_siswa"><br></td></tr>

    <th><th><input type="submit"  class="form-control" value="Submit"></th></tr>
    <?php echo form_close(); ?>
    </form>
            </div>
        </main>
    </div>
