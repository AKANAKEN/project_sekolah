<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Form Input Ruangan</b></center>
                <br>
                <div class="card-body">
    <?php echo form_open('Room_input_data/insert_data'); ?>
    <tr><th><label for="kode_ruangan">Kode Ruangan:</label></th>
    <td><input type="text" name="kode_ruangan"  class="form-control" id="kode_ruangan"><br></td></tr>

    <tr><th><label for="kapasitas_ruangan">Kapasitas Ruangan:</label></th>
    <td><input type="text" name="kapasitas_ruangan" class="form-control"  id="kapasitas_ruangan"><br></td></tr>

    <tr><th><input type="submit"  class="form-control" value="Submit"></th></tr>
    <?php echo form_close(); ?>
    </form>
            </div>
        </main>
    </div>
