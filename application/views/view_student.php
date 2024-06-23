<!-- application/views/view_guru.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
</head>

<body>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Siswa</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

            

                <!-- card table -->
                <div class="row m-4">
                <?php foreach ($siswa as $s) { ?>
                        <div style="align-items: center;  margin:20;" class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Class Card</div>
                                <div style="text-align: center;">
                                    <tr>
                                        <td>
                                        <th>NIS | </th><?php echo $s->NIS; ?></td><br>
                                        <td>
                                        <th>Nama Siswa | </th><?php echo $s->nama_siswa; ?></td><br>
                                        <td>
                                        <th>Alamat Siswa | </th><?php echo $s->Alamat; ?></td><br>
                                        <td>
                                        <th>Jenis Kelamin | </th><?php echo $s->jenis_kelamin; ?></td><br>
                                        <td>
                                        <th>Tanggal Lahir | </th><?php echo $s->Tanggal_lahir; ?></td><br>
                                        <td>
                                        <th>Kode Kelas | </th><?php echo $s->kode_kelas; ?></td><br>

                                    </tr>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?php echo base_url('index.php/dashboard/student_edit_tabel/' . $s->NIS); ?>">Edit</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>

                        </div><?php } ?>
                </div>




            </div>
        </main>
</body>

</html>