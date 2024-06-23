<!-- application/views/view_data.php -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Pelajaran</title>
</head>

<body>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data mapel</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

            



                <!-- card table -->
                <div class="row m-4">
                <?php foreach ($mapel as $std) { ?>
                        <div style="align-items: center;  margin:20;" class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Study Card</div>
                                <div style="text-align: center;">
                                    <tr>
                                        <td>
                                        <th>Kode Mapel | </th><?php echo $std->kode_mapel; ?></td><br>
                                        <td>
                                        <th>Nama Mapel | </th><?php echo $std->nama_mapel; ?></td><br>
                                      

                                    </tr>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <p>----------------</p>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>

                        </div><?php } ?>
                </div>



            </div>
        </main>
</body>

</html>