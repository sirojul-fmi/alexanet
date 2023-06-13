<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RulesModel;
use App\Models\PremisModel;
use App\Models\PacketModel;

class Rules extends BaseController
{
    private $rule = '';
    private $premis = '';
    private $packet = '';

    public function __construct()
    {
        $this->rule = new RulesModel();
        $this->premis = new PremisModel();
        $this->packet = new PacketModel();
    }

    public function index()
    {
        $data = [
            'rules' => $this->rule->findAll(),
            'premis' => $this->premis->findAll(),
            'packet' => $this->packet->findAll(),
        ];
        return view('admin/rules/index.php', $data);
    }

    public function add()
    {
        
        $lokasi = $this->premis->findAll(3, 0);
        $perangkat = $this->premis->findAll(4, 3);
        $jangkauan1 = $this->premis->findAll(3, 7);
        $jangkauan2 = $this->premis->findAll(3, 10);
        $kesimpulan = $this->packet->findAll();
        $data = [
            'lokasi' => $lokasi,
            'perangkat' => $perangkat,
            'jangkauan1' => $jangkauan1,
            'jangkauan2' => $jangkauan2,
            'kesimpulan' => $kesimpulan,
        ];
        return view('admin/rules/add.php', $data);
    }

    public function store()
    {
        $data = [
            'rule1' => $this->request->getVar('lokasi'),
            'rule2' => $this->request->getVar('perangkat'),
            'rule3' => $this->request->getVar('jangkauan1'),
            'rule4' => $this->request->getVar('jangkauan2'),
            'conclusion' => $this->request->getVar('kesimpulan'),
        ];

        try {
            $this->rule->insert($data);
            return redirect()->to(base_url('admin/rules'))->with('msg','Tambah data rules berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function edit($id = null)
    {
        $lokasi = $this->premis->findAll(4, 0);
        $perangkat = $this->premis->findAll(4, 4);
        $jangkauan1 = $this->premis->findAll(3, 8);
        $jangkauan2 = $this->premis->findAll(3, 11);
        $kesimpulan = $this->packet->findAll();
        $data = [
            'rules' => $this->rule->find($id),
            'packet' => $this->packet->findAll(),
            'premis' => $this->premis->findAll(),
            'lokasi' => $lokasi,
            'perangkat' => $perangkat,
            'jangkauan1' => $jangkauan1,
            'jangkauan2' => $jangkauan2,
            'kesimpulan' => $kesimpulan,
        ];
        return view('admin/rules/edit.php', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('rulesId');
        $data = [
            'rule1' => $this->request->getVar('lokasi'),
            'rule2' => $this->request->getVar('perangkat'),
            'rule3' => $this->request->getVar('jangkauan1'),
            'rule4' => $this->request->getVar('jangkauan2'),
            'conclusion' => $this->request->getVar('kesimpulan'),
        ];

        try {
            $this->rule->update($id, $data);
            return redirect()->to(base_url('admin/rules'))->with('msg','Update data rules berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function delete()
    {
        $id = $this->request->getVar('rulesId');

        try {
            $this->rule->delete($id);
            return redirect()->to(base_url('admin/rules'))->with('msg', 'Delete rules berhasil');
        } catch (\Exception $e) {
            echo $e;
        }
    }

    private function idOtomatis()
    {
        
    }
}
