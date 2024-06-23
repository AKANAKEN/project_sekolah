<!-- application/views/view_data.php -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>

<body>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Kelas</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <!-- card table -->
                <div class="row m-4">
                    <?php foreach ($classes as $class) { ?>
                        <div style="align-items: center;  margin:20;" class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Class Card</div>
                                <div style="text-align: center;">
                                    <tr>
                                        <td>
                                        <th>Kode Kelas | </th><?php echo $class->kode_kelas; ?></td><br>
                                        <td>
                                        <th>Wali Kelas | </th><?php echo $class->wali_kelas; ?></td><br>
                                        <td>
                                        <th>Tahun Ajaran | </th><?php echo $class->tahun_ajaran; ?></td><br>
                                        <td>
                                        <th>Jumlah Siswa | </th><?php echo $class->jumlah_siswa; ?></td><br>

                                    </tr>

                                    
                                </div>
                                
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?php echo base_url('index.php/Dashboard/class_edit_tabel/' . $class->kode_kelas); ?>">View Data</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>

                        </div><?php } ?>
                </div>



            </div>
        </main>
</body>

</html>