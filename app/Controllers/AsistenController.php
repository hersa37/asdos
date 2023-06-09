<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AsistenModel;

class AsistenController extends BaseController
{
    private function hasSession(): bool
    {
        $session = session();
        return $session->has('pengguna');
    }

    public function index()
    {
        //check if session exists
        if (! $this->hasSession()) {
            return view('login/loginpage');
        }

        $model = model(AsistenModel::class);
        $data = [
            'mahasiswa' => $model->index(),
        ];
        return view('asisten/AsistenView', $data);
    }

    public function simpan()
    {
        if (! $this->hasSession()) {
            return view('login/loginpage');
        }

        helper('form');

        if(! $this->request->getPost())
        {
            return view('asisten/simpan');
        }

        $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);

        $model = model(AsistenModel::class);

        $model->simpan($post);

        return view('asisten/success');
    }

    public function update()
    {
        if (! $this->hasSession()) {
            return view('login/loginpage');
        }

        helper('form');

        if(! $this->request->getPost())
        {
            return view('asisten/update');
        }

        $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);


        $model = model(AsistenModel::class);

        if($model->find($post['nim']) == null) {
            return view('asisten/update', [
                'errors' => ['NIM tidak ditemukan'],
            ]);
        }

        $model->update($post);

        return view('asisten/success');
    }

    public function delete()
    {
        if (! $this->hasSession()) {
            return view('login/loginpage');
        }

        helper('form');

        if(! $this->request->getPost())
        {
            return view('asisten/delete');
        }

        $nim = $this->request->getPost('nim');

        $model = model(AsistenModel::class);

        $model->where('nim', $nim)->delete($nim);

        return redirect()->to('/asisten');
    }

    public function search()
    {
        if (! $this->hasSession()) {
            return view('login/loginpage');
        }

        helper('form');

        if(! $this->request->getPost())
        {
            return view('asisten/search');
        }

        $key = $this->request->getPost('key');

        $model = model(AsistenModel::class);

        $hasil = $model->ambil($key);

        return view('asisten/search', [
            'hasil' => $hasil,
        ]);
    }
}
