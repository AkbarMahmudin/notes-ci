<?php

namespace App\Controllers;

use App\Models\Notes;

class Home extends BaseController
{
    public function index()
    {
        $notesModel = new Notes();
        $notes = $notesModel->findAll();

        // var_dump($data);
        $data = [
            'notes' => $notes
        ];

        return view('index', $data);
    }

    public function add()
    {
        return view('add-note');
    }

    public function create()
    {
        // Validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'content' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $notes = new Notes();
            $notes->insert([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);

            return redirect('/');
        }
    }

    public function get($id)
    {
        $notesModel = new Notes();
        $note = $notesModel->find($id);
        $data = [
            'note' => $note
        ];

        return view('get-note', $data);
    }

    public function update($id)
    {
        // Validasi
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'content' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $note = new Notes();
            $data = [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ];
            $note->update($id, $data);

            return redirect('/');
        }
    }

    public function delete($id)
    {
        $note = new Notes();
        $note->delete($id);

        return redirect('/');
    }
}
