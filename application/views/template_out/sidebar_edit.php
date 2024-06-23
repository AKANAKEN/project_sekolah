<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="../../dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div> -->

                    <!-- Hitung  -->
                    <div class="sb-sidenav-menu-heading">Data input & View</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Kelas
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href=".././class_tabel">Data Kelas</a>
                            <a class="nav-link" href=".././class_input_tabel">Input Data</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_guru" aria-expanded="false" aria-controls="collapseLayouts_guru">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Guru
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts_guru" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion_guru">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href=".././class_teacher">Data Guru</a>
                            <a class="nav-link" href=".././class_input_teacher">Input Data</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_room" aria-expanded="false" aria-controls="collapseLayouts_room">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Ruangan
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts_room" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion_room">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href=".././room_data">Data Ruangan</a>
                            <a class="nav-link" href=".././room_input_data">Input Data</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_study" aria-expanded="false" aria-controls="collapseLayouts_study">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Mata Pelajaran
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts_study" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion_study">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href=".././study_data">Data Mata Pelajaran</a>
                            <a class="nav-link" href=".././study_input_data">Input Data</a>
                        </nav>
                    </div>
                    
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_schedule" aria-expanded="false" aria-controls="collapseLayouts_schedule">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Jadwal Pelajaran
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts_schedule" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion_schedule">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href=".././schedule_data">Data Jadwal Pelajaran</a>
                            <a class="nav-link" href=".././schedule_input">Input Data</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_student" aria-expanded="false" aria-controls="collapseLayouts_student">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Siswa
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts_student" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion_student">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href=".././student_data">Data Siswa</a>
                            <a class="nav-link" href=".././student_input">Input Data</a>
                        </nav>
                    </div>

                              
                    
                    

                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="<?php echo base_url('assets/charts.html') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>