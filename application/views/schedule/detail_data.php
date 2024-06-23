<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <!-- <h2>Data Guru</h2><br> -->

                <!-- <button onclick="document.getElementById('id_guru').style.display='block'" style="width:auto; height: 100px;">Data Guru</button> -->

                <div id="id_guru" class="modal">

                    <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id_guru').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h1>Data Guru</h1>
                        </div>

                        <div class="container">
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
                                                <p>------------</p>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>

                                    </div><?php } ?>
                            </div>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id_guru').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw"><a href="<?php echo base_url('index.php/dashboard/class_teacher'); ?>">Update Data</a></span>
                        </div>
                    </form>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('id_guru');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>



                <!-- ====================================================================== -->



                <!-- <h2>Modal Login Form</h2> -->

                <!-- <button onclick="document.getElementById('id_kelas').style.display='block'" style="width:auto; height: 100px;">Data Kelas</button> -->

                <div id="id_kelas" class="modal">

                    <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id_kelas').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h1>Data Kelas</h1>
                        </div>

                        <div class="container">
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
                                            <p>------------</p>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>

                                    </div><?php } ?>
                            </div>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id_kelas').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw"><a href="<?php echo base_url('index.php/dashboard/class_tabel'); ?>">Update Data</a></span>
                        </div>
                    </form>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('id_kelas');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
                <br>


                <!-- ====================================================================== -->


                <!-- <h2>Modal Login Form</h2> -->

                <!-- <button onclick="document.getElementById('id_mapel').style.display='block'" style="width:auto; height: 100px;">Data Mata Pelajaran</button> -->

                <div id="id_mapel" class="modal">

                    <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id_mapel').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h1>Data Mata Pelajaran</h1>
                        </div>

                        <div class="container">
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
                                            <p>------------</p>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>

                                    </div><?php } ?>
                            </div>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id_mapel').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw"><a href="<?php echo base_url('index.php/dashboard/study_data'); ?>">Update Data</a></span>
                        </div>
                    </form>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('id_mapel');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>




                <!-- ====================================================================== -->

                <!-- <h2>Modal Login Form</h2> -->

                <!-- <button onclick="document.getElementById('id_ruangan').style.display='block'" style="width:auto; height: 100px;">Data Ruangan</button> -->

                <div id="id_ruangan" class="modal">

                    <form class="modal-content animate" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id_ruangan').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <h1>Data Ruangan</h1>
                        </div>

                        <div class="container">
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
                                            <p>------------</p>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>

                                        </div>

                                    </div><?php } ?>
                            </div>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id_ruangan').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw"> <a href="<?php echo base_url('index.php/dashboard/room_data'); ?>">Update Data</a></span>
                        </div>
                    </form>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('id_ruangan');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>

            </div>
        </main>
    </div>




    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="card card-register mx-auto mt-5">
                    <center><b>Input Jadwal Pelajaran</b></center>
                    <br>
                    <div class="card-body">

                        <table>
                            <tr>
                                <td> <button onclick="document.getElementById('id_guru').style.display='block'" style=" height: 100px;">Data Guru</button>
                                </td>
                                <td> <button onclick="document.getElementById('id_ruangan').style.display='block'" style=" height: 100px;">Data Ruangan</button>
                                </td>
                            </tr>
                            <tr>
                                <td> <button onclick="document.getElementById('id_mapel').style.display='block'" style=" height: 100px;">Data Mapel</button>
                                </td>
                                <td><button onclick="document.getElementById('id_kelas').style.display='block'" style=" height: 100px;">Data Kelas</button>
                                </td>
                            </tr>
                        </table>






                    </div>
                </div>
            </div>
        </main>
    </div>



</body>

</html>