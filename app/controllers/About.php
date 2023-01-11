<?php

class About extends Controller
{
    public function index($nama = 'Sano', $kerja = 'Mekanik')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['kerja'] = $kerja;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
