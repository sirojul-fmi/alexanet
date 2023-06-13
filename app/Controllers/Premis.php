<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PremisModel;

class Premis extends BaseController
{
    private $premis = '';

    public function __construct()
    {
        $this->premis = new PremisModel();
    }

    public function index()
    {
        $data['premis'] = $this->premis->orderBy('id', 'ASC')->findAll();
        return view('admin/premis/index.php', $data);
    }

    public function add()
    {
        return view('admin/premis/add.php');
    }

    public function store()
    {
        $data = [
            'premis_code' => ucwords($this->request->getVar('premisCode')),
            'premis' => ucwords($this->request->getVar('premisName')),
        ];

        try {
            $this->premis->insert($data);
            return redirect()->to(base_url('admin/premis'))->with('msg', 'Input data premis berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function edit($id = null)
    {
        $data['premis'] = $this->premis->find($id);

        return view('admin/premis/edit.php', $data);
    }

    public function update()
    {   
        $id = $this->request->getVar('premisId');
        $data = [
            'premis_code' => $this->request->getVar('premisCode'),
            'premis' => $this->request->getVar('premisName'),
        ];

        try {
            $this->premis->update($id, $data);
            return redirect()->to(base_url('admin/premis'))->with('msg', 'Update data premis berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function delete()
    {
        $id = $this->request->getVar('premisId');
        try {
            $this->premis->delete($id);
            return redirect()->to(base_url('admin/premis'))->with('msg', 'Delete data premis berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
