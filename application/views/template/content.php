<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
           
            <!-- <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Primary Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Warning Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="card mb-4">
               
                <div>

                   <h1 style="text-align: center;">Jadwal</h1>
                    <ol class="breadcrumb mb-4">
                    
                    </ol>
                    <div class="table-responsive">
                        <table class="table table-hover" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>ID Jadwal</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Kode Kelas</th>
                                    <th>Kode Ruangan</th>
                                    <th>NIP</th>
                                    <th>Kode Mapel</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal as $jadwal1) { ?>
                                    <tr align="center">
                                        <td><?php echo $jadwal1->id_jadwal; ?></td>
                                        <td><?php echo $jadwal1->Hari; ?></td>
                                        <td><?php echo $jadwal1->Jam_mulai; ?></td>
                                        <td><?php echo $jadwal1->Jam_selesai; ?></td>
                                        <td><a href="<?php echo base_url('index.php/Dashboard/class_view_index/' . $jadwal1->kode_kelas); ?>"><?php echo $jadwal1->kode_kelas; ?></a></td>
                                        <td><a href="<?php echo base_url('index.php/Dashboard/room_view_index/' . $jadwal1->kode_ruangan); ?>"><?php echo $jadwal1->kode_ruangan; ?></a></td>
                                        <td><a href="<?php echo base_url('index.php/Dashboard/teacher_view_index/' . $jadwal1->NIP); ?>"><?php echo $jadwal1->NIP; ?></a></td>
                                        <td><a href="<?php echo base_url('index.php/Dashboard/study_view_index/' . $jadwal1->kode_mapel); ?>"><?php echo $jadwal1->kode_mapel; ?></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
    </main>