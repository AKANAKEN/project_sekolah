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
                <h1 class="mt-4">Data Guru</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>


                <!-- card table -->
                <div class="row m-4">
                <?php foreach ($guru as $row) { ?>
                        <div style="align-items: center;  margin:20;" class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Class Card</div>
                                <div style="text-align: center;">
                                    <tr>
                                        <td>
                                        <th>NIP | </th><?php echo $row->NIP; ?></td><br>
                                        <td>
                                        <th>Nama Guru | </th><?php echo $row->nama_guru; ?></td><br>
                                        <td>
                                        <th>Alamat Guru | </th><?php echo $row->Alamat_guru; ?></td><br>
                                        <td>
                                        <th>Jenis Kelamin | </th><?php echo $row->JK; ?></td><br>
                                        <td>
                                        <th>Tanggal Lahir | </th><?php echo $row->Tanggal_Lahir_guru; ?></td><br>

                                    </tr>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?php echo base_url('index.php/Dashboard/class_teacher_edit_tabel/' . $row->NIP); ?>">Edit</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>

                        </div><?php } ?>
                </div>




            </div>
        </main>
</body>

</html>