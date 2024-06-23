<!-- application/views/view_data.php -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ruangan</title>
</head>

<body>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Ruangan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <!-- card table -->
                <div style="margin:20;" class="row">
                <?php foreach ($ruangan as $room) { ?>
                        <div style="align-items: center;  margin:20;" class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Room Card</div>
                                <div style="text-align: center;">
                                    <tr>
                                        <td>
                                        <th>Kode Ruangan | </th><?php echo $room->kode_ruangan; ?></td><br>
                                        <td>
                                        <th>Kapasitas Ruangan | </th><?php echo $room->Kapasitas_ruangan; ?></td><br>
                                       

                                    </tr>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?php echo base_url('index.php/dashboard/room_edit/' . $room->kode_ruangan); ?>">Edit</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                               
                            </div>

                        </div><?php } ?>
                </div>


            </div>
        </main>
</body>

</html>