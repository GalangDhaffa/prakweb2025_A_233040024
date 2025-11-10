<?php
class User extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $data['judul'] = 'Daftar User';
        $data['users'] = $this->model('User_model')->getAllUser();
        $this->view('user/index', $data);
    }

    public function tambah()
    {
        $this->view('templates/header');
        $data['judul'] = 'Tambah Data User';
        $this->view('user/tambah', $data);
    }

    public function simpan()
    {

        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function edit($id)
    {
        $this->view('templates/header');
        $data['judul'] = 'Edit Data User';
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('user/edit', $data);
    }

    public function update()
    {
        if ($this->model('User_model')->ubahDataUser($_POST) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('User_model')->hapusDataUser($id) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }
}
