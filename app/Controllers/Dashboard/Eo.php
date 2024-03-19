<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\TiketModel;

class Eo extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->session = session();

        if($this->session->get('user') == false)
        {
            header("Location: ". base_url());
            die();
        }

        $this->user_model = new UserModel();
        $this->event_model = new EventModel();
        $this->tiket_model = new TiketModel();
    }

    public function index()
    {
    	return view('dashboard/eo');
    }

    public function report()
    {
    	return view('dashboard/report');
    }

    public function profile()
    {
    	return view('dashboard/profile');
    }

    public function event()
    {
    	$data = array(
    		'lists' => $this->event_model->list_by_user($this->session->get('user')['user_id'])->getResultArray(),
    	);

    	return view('dashboard/event', $data);
    }

    public function event_add()
    {
    	$data = array(
    		'label' => 'Tambah Event Baru'
    	);

    	return view('dashboard/event_add', $data);
    }

    public function event_add_post()
    {
    	if (! $this->validate([
            'status'  => [
                'rules'  => 'required',
            ],
            'nama'  => [
                'rules'  => 'required',
            ],
            'lokasi'  => [
                'rules'  => 'required',
            ],
            'waktu'  => [
                'rules'  => 'required',
            ],
            'deskripsi'  => [
                'rules'  => 'required',
            ],

        ])) {
            // The validation fails, so returns the form.
            return $this->event_add();
        }

        $post = $this->validator->getValidated();

        $data = [
        	'user_id' => $this->session->get('user')['user_id'],
        	'nama' => $post['nama'],
        	'lokasi' => $post['lokasi'],
        	'deskripsi' => $post['deskripsi'],
        	'waktu' => $post['waktu'],
        	'status' => $post['status']
        ];

        if($file = $this->request->getFile('gambar')) {
            if ($file->isValid() && ! $file->hasMoved()) {
                 // Get file name and extension
                 $name = $file->getName();
                 $ext = $file->getClientExtension();

                 // Get random file name
                 $newName = $file->getRandomName(); 

                 // Store file in public/uploads/ folder
                 $file->move('../public/uploads', $newName);

                 // File path to display preview
                 $filepath = base_url()."/uploads/".$newName;
       
                 $data['gambar'] = $newName;
            }
        }

        $this->event_model->save($data);

        return redirect()->to('dashboard/eo/event');
    }

    public function event_delete($id)
    {
    	$this->event_model->delete($id);
    	return redirect()->to('dashboard/eo/event');
    }

    public function event_edit($id)
    {
    	$post = $this->event_model->find($id);

    	$data = array(
    		'label' => 'Edit Event',
    		'post' => $post
    	);

    	return view('dashboard/event_edit', $data);
    }

    public function event_edit_post($id)
    {
    	if (! $this->validate([
            'status'  => [
                'rules'  => 'required',
            ],
            'nama'  => [
                'rules'  => 'required',
            ],
            'lokasi'  => [
                'rules'  => 'required',
            ],
            'waktu'  => [
                'rules'  => 'required',
            ],
            'deskripsi'  => [
                'rules'  => 'required',
            ],

        ])) {
            // The validation fails, so returns the form.
            return $this->event_edit($id);
        }

        $post = $this->validator->getValidated();

        $data = [
        	'user_id' => $this->session->get('user')['user_id'],
        	'nama' => $post['nama'],
        	'lokasi' => $post['lokasi'],
        	'deskripsi' => $post['deskripsi'],
        	'waktu' => $post['waktu'],
        	'status' => $post['status']
        ];

        if($file = $this->request->getFile('gambar')) {
            if ($file->isValid() && ! $file->hasMoved()) {
                 // Get file name and extension
                 $name = $file->getName();
                 $ext = $file->getClientExtension();

                 // Get random file name
                 $newName = $file->getRandomName(); 

                 // Store file in public/uploads/ folder
                 $file->move('../public/uploads', $newName);

                 // File path to display preview
                 $filepath = base_url()."/uploads/".$newName;
       
                 $data['gambar'] = $newName;
            }
        }

        $this->event_model->update($id, $data);

        $this->session->setFlashdata('success', '<strong>Berhasil Ubah Data</strong>');
        return redirect()->to('dashboard/eo/event/edit/'.$id);
    }

    public function event_tiket($id)
    {
        $data = array(
            'id' => $id,
            'lists' => $this->tiket_model->list_by_event($id)->getResultArray(),
        );

        return view('dashboard/event_tiket', $data);
    }

    public function event_tiket_add($id)
    {
        $data = array(
            'id' => $id,
            'label' => 'Tambah Tiket Baru'
        );

        return view('dashboard/event_tiket_add', $data);
    }

    public function event_tiket_add_post($id)
    {
        if (! $this->validate([
            'nama'  => [
                'rules'  => 'required',
            ],
            'harga'  => [
                'rules'  => 'required',
            ],
            'total'  => [
                'rules'  => 'required',
            ],

        ])) {
            // The validation fails, so returns the form.
            return $this->event_tiket_add($id);
        }

        $post = $this->validator->getValidated();

        $data = [
            'event_id' => $id,
            'nama' => $post['nama'],
            'harga' => $post['harga'],
            'total' => $post['total']
        ];

        $this->tiket_model->save($data);

        return redirect()->to('dashboard/eo/event/tiket/'.$id);
    }

    public function event_tiket_edit($event_id, $id)
    {
        $post = $this->tiket_model->find($id);

        $data = array(
            'id' => $event_id,
            'label' => 'Edit Tiket',
            'post' => $post
        );

        return view('dashboard/event_tiket_edit', $data);
    }

    public function event_tiket_edit_post($event_id, $id)
    {
        if (! $this->validate([
            'nama'  => [
                'rules'  => 'required',
            ],
            'harga'  => [
                'rules'  => 'required',
            ],
            'total'  => [
                'rules'  => 'required',
            ],

        ])) {
            // The validation fails, so returns the form.
            return $this->event_tiket_edit($event_id, $id);
        }

        $post = $this->validator->getValidated();

        $data = [
            'nama' => $post['nama'],
            'harga' => $post['harga'],
            'total' => $post['total']
        ];

        $this->tiket_model->update($id, $data);

        return redirect()->to('dashboard/eo/event/tiket/'.$event_id);
    }

    public function event_tiket_delete($event_id, $id)
    {
        $this->tiket_model->delete($id);
        return redirect()->to('dashboard/eo/event/tiket/'.$event_id);
    }
}