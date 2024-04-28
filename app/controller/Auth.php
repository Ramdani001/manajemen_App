<?php

class Auth extends Controller {
    public function index($id = 0){
        
        // $data['id_person'] = $id;
        $data['title'] = "Dashboard";

        $data['person'] = $this->model('User_model')->getUser();

        $this->view('partials/header', $data);

        // Content
        $this->view('component/Sidebar', $data);
        $this->view('dashboard', $data);
        // Content


        $this->view('partials/header', $data);
    }

    // Route Pge lain
    public function pageLain(){
        $data['title'] = "Page lain";


        $this->view('partials/header', $data);
        // Content
        $this->view('partials/bungkusAwal');
            $this->view('component/Sidebar', $data);
            $this->view('component/Navbar', $data);
            $this->view('tambah', $data);
        $this->view('partials/bungkusAkhir');

        // $this->view('tambah', array_merge($data, ['sidebar_data' => $this->view('component/Sidebar', $data, true)]));


        // Content

        $this->view('partials/header', $data);
    }

}