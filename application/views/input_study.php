<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Form Input Data Mata Pelajaran</b></center>
                <br>
                <div class="card-body">

    <?php echo form_open('Study_input_data/insert_data'); ?>
    <!-- <tr><th><label for="kode_mapel">Kode Mapel:</label></th>
    <td><input type="text" name="kode_mapel"  class="form-control" id="kode_mapel"><br></td></tr> -->

    <tr><th><label for="nama_mapel">Nama Mapel:</label></th>
    <td><input type="text" name="nama_mapel"  class="form-control" id="nama_mapel"><br></td></tr>

    <tr><th><input type="submit"  class="form-control" value="Submit"></th></tr>
    <?php echo form_close(); ?>
    </form>
            </div>
        </main>
    </div>
