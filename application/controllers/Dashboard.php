<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_class');
        $this->load->model('M_teacher'); // Load the M_teacher model
        $this->load->model('M_room');
        $this->load->model('M_student');
        $this->load->model('M_study');
        $this->load->model('M_schedule');
        $this->load->helper('form');
    }


    // start content
    public function index()
    {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');

        $data1['classes'] = $this->M_class->get_classes();
        $data['jadwal'] = $this->M_schedule->get_all_jadwal();

        $this->load->view('template/content', $data, $data1);
        $this->load->view('template/footer');
    }


    public function class_view_index($kode_kelas = null)
    {
        // Check if $kode_kelas is null, you may want to handle this case appropriately
        if ($kode_kelas === null) {
            // Handle the case where $kode_kelas is not provided
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_class_by_id dari model M_class untuk mendapatkan satu baris data kelas
        $data['classes'] = $this->M_class->get_class_by_id($kode_kelas);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template_out/sidebar_edit', $data);
        $this->load->view('template_out/kelas', $data);
        $this->load->view('template/footer', $data);
    }


    public function room_view_index($kode_ruangan = null)
    {
        // Check if $kode_kelas is null, you may want to handle this case appropriately
        if ($kode_ruangan === null) {
            // Handle the case where $kode_kelas is not provided
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_class_by_id dari model M_class untuk mendapatkan satu baris data kelas
        $data['ruangan'] = $this->M_room->get_ruangan_by_kode_ruangan($kode_ruangan);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template_out/sidebar_edit', $data);
        $this->load->view('template_out/ruangan', $data);
        $this->load->view('template/footer', $data);
    }


    public function teacher_view_index($NIP = null)
    {
        // Check if $NIP is null, handle the case where $NIP is not provided
        if ($NIP === null) {
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_guru_by_nip dari model M_teacher untuk mendapatkan satu baris data guru
        $data['guru'] = $this->M_teacher->get_guru_by_nip($NIP);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar_edit');
        $this->load->view('template_out/guru', $data); // Ganti 'edit_teacher_class' sesuai dengan nama view Anda
        $this->load->view('template/footer');
    }

    public function study_view_index($kode_mapel = null)
    {
        // Check if $NIP is null, handle the case where $NIP is not provided
        if ($kode_mapel === null) {
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_guru_by_nip dari model M_teacher untuk mendapatkan satu baris data guru
        $data['mapel'] = $this->M_study->get_mapel_by_kode_mapel($kode_mapel);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar_edit');
        $this->load->view('template_out/mapel', $data); // Ganti 'edit_teacher_class' sesuai dengan nama view Anda
        $this->load->view('template/footer');
    }


    // end content
    public function class_tabel()
    {



        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        $data['classes'] = $this->M_class->get_classes();

        $this->load->view('view_class', $data); // ganti 'view_class' sesuai dengan nama view Anda

        $this->load->view('template/footer');
    }

    public function class_edit_tabel($kode_kelas = null)
    {
        // Check if $kode_kelas is null, you may want to handle this case appropriately
        if ($kode_kelas === null) {
            // Handle the case where $kode_kelas is not provided
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_class_by_id dari model M_class untuk mendapatkan satu baris data kelas
        $data['classes'] = $this->M_class->get_class_by_id($kode_kelas);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template_out/sidebar_edit', $data);
        $this->load->view('edit_class', $data);
        $this->load->view('template/footer', $data);
    }




    public function class_input_tabel()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        // $data['classes'] = $this->M_class->get_classes();
        $this->load->view('input_class');

        $this->load->view('template/footer');
    }



    // =================Teacher=================
    public function class_teacher()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        $data['guru'] = $this->M_teacher->get_all_guru();
        $this->load->view('view_teacher', $data);

        $this->load->view('template/footer');
    }

    public function class_edit_teacher()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar_edit');

        $data['guru'] = $this->M_teacher->get_all_guru();
        $this->load->view('edit_teacher', $data);

        $this->load->view('template/footer', $data);
    }
    public function class_teacher_edit_tabel($NIP = null)
    {
        // Check if $NIP is null, handle the case where $NIP is not provided
        if ($NIP === null) {
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_guru_by_nip dari model M_teacher untuk mendapatkan satu baris data guru
        $data['guru'] = $this->M_teacher->get_guru_by_nip($NIP);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar_edit');
        $this->load->view('edit_teacher', $data); // Ganti 'edit_teacher_class' sesuai dengan nama view Anda
        $this->load->view('template/footer');
    }


    public function class_input_teacher()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        // $data['guru'] = $this->M_teacher->get_all_guru();
        $this->load->view('input_teacher');

        $this->load->view('template/footer');
    }


    // =================Room=================
    public function room_input_data()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        // $data['guru'] = $this->M_teacher->get_all_guru();
        $this->load->view('input_room');

        $this->load->view('template/footer');
    }

    public function room_data()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        $data['ruangan'] = $this->M_room->get_all_ruangan(); // Retrieve data from the model

        $this->load->view('view_room', $data); // Pass data to the view

        $this->load->view('template/footer');
    }


    public function room_edit($kode_ruangan = null)
    {
        // Check if $kode_kelas is null, you may want to handle this case appropriately
        if ($kode_ruangan === null) {
            // Handle the case where $kode_kelas is not provided
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_class_by_id dari model M_class untuk mendapatkan satu baris data kelas
        $data['ruangan'] = $this->M_room->get_ruangan_by_kode_ruangan($kode_ruangan);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template_out/sidebar_edit', $data);
        $this->load->view('edit_room', $data);
        $this->load->view('template/footer', $data);
    }


    // =================Study=================
    public function study_input_data()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        // $data['guru'] = $this->M_teacher->get_all_guru();
        $this->load->view('input_study');

        $this->load->view('template/footer');
    }

    public function study_data()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        $data['mapel'] = $this->M_study->get_all_mapel();
        $this->load->view('view_study', $data);

        $this->load->view('template/footer');
    }

    // =================Student=================
    public function student_input()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        $this->load->view('input_student');

        $this->load->view('template/footer');
    }

    public function student_data()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        $data['siswa'] = $this->M_student->get_all_siswa();
        $this->load->view('view_student', $data);

        $this->load->view('template/footer');
    }

    public function student_edit_tabel($NIS = null)
    {
        // Check if $kode_kelas is null, you may want to handle this case appropriately
        if ($NIS === null) {
            // Handle the case where $kode_kelas is not provided
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_class_by_id dari model M_class untuk mendapatkan satu baris data kelas
        $data['siswa'] = $this->M_student->get_siswa_by_nis($NIS);

        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template_out/sidebar_edit', $data);
        $this->load->view('edit_student', $data);
        $this->load->view('template/footer', $data);
    }


    // =================Schedule=================
    public function schedule_input()
    {


        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');

        $data['classes'] = $this->M_class->get_classes();
        $data['guru'] = $this->M_teacher->get_all_guru();
        $data['ruangan'] = $this->M_room->get_all_ruangan();
        $data['mapel'] = $this->M_study->get_all_mapel();

        $this->load->view('input_schedule');

        $this->load->view('schedule/detail_data', $data);

        $this->load->view('template/footer');
    }

    public function schedule_data()
    {

        $this->load->view('template/head.php');
        $this->load->view('template/navbar');
        $this->load->view('template_out/sidebar');


        $data['jadwal'] = $this->M_schedule->get_all_jadwal();
        $this->load->view('view_schedule', $data);

        $this->load->view('template/footer');
    }

    public function schedule_edit_tabel($id_jadwal = null)
    {
        // Check if $kode_kelas is null, you may want to handle this case appropriately
        if ($id_jadwal === null) {
            // Handle the case where $kode_kelas is not provided
            // For example, redirect to an error page or show an appropriate message
        }

        // Panggil metode get_class_by_id dari model M_class untuk mendapatkan satu baris data kelas
        $data['classes'] = $this->M_class->get_classes();
        $data['guru'] = $this->M_teacher->get_all_guru();
        $data['ruangan'] = $this->M_room->get_all_ruangan();
        $data['mapel'] = $this->M_study->get_all_mapel();

        $data['jadwal'] = $this->M_schedule->get_jadwal_by_id_jadwal($id_jadwal);
        // Load view dengan data yang diperoleh dari model
        $this->load->view('template/head.php', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template_out/sidebar_edit', $data);
        $this->load->view('edit_schedule', $data);
        $this->load->view('schedule/detail_data', $data);

        $this->load->view('template/footer', $data);
    }
}
