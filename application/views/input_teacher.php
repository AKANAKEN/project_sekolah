<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card card-register mx-auto mt-5">
                <center><b>Input Data Guru</b></center>
                <br>
                <div class="card-body">
    <?php echo form_open('Class_teacher_input/insert_data'); ?>
    <tr><th><label for="NIP">NIP:</label></th>
    <td><input type="text" name="NIP"  class="form-control" id="NIP"><br></td></tr>

    <tr><th><label for="nama_guru">Nama Guru:</label></th>
    <td><input type="text" name="nama_guru"  class="form-control" id="nama_guru"><br></td></tr>

    <tr><th><label for="Alamat_guru">Alamat:</label></th>
    <td><input type="text" name="Alamat_guru"  class="form-control" id="Alamat_guru"><br></td></tr>

    <tr><th><label for="JK">Jenis Kelamin:</label></th>
    <td><select name="JK"  class="form-control" id="JK">
                                    <option value=" ">-Jenis Kelamin-</option>
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select><br></td></tr>
    
    <tr><th><label for="Tanggal_Lahir_guru">Tanggal Lahir Guru:</label></th>
    <td><input type="date" name="Tanggal_Lahir_guru" class="form-control"  id="Tanggal_Lahir_guru"><br></td></tr>

    <tr><th><input type="submit"  class="form-control" value="Submit"></th></tr>
    <?php echo form_close(); ?>
    </form>
            </div>
        </main>
    </div>

