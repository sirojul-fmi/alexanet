<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\ForwardChaining;
use App\Models\CustomerModel;
use App\Models\PemesananModel;
use App\Models\PremisModel;

class Guest extends BaseController
{
    private $fc = '';
    private $premis = '';
    private $customerModel = '';
    private $pemesananModel = '';

    public function __construct()
    {
        $this->fc = new ForwardChaining();
        $this->premis = new PremisModel();
        $this->customerModel = new CustomerModel();
        $this->pemesananModel = new PemesananModel();
    }

    public function fChaining()
    {
        $fact1 = $this->request->getPost("rule1");
        $fact2 = $this->request->getPost("rule2");
        $fact3 = $this->request->getPost("rule3");
        $fact4 = $this->request->getPost("rule4");

        $fact = [[
            "fact1" => $fact1,
            "fact2" => $fact2,
            "fact3" => $fact3,
            "fact4" => $fact4,
        ]];
        
        $result = $this->fc->forwardChaining($fact);
        // var_dump($result);
        return json_encode($result);
    }

    public function index()
    {
        return view('guest/index.php');
    }

    public function detailProfile()
    {
        return view('guest/detail_profile.php');
    }

    public function detailInformasi()
    {
        return view('guest/detail_informasi.php');
    }

    public function pemesanan()
    {
        $data = [
            'premis' => $this->premis->findAll(),
            'jangkauan1' => $this->premis->findAll(3,7),
            'jangkauan2' => $this->premis->findAll(3,10),
        ];
        return view('guest/pemesanan.php',$data);
    }

    public function submitPesanan()
    {
        $customer_id = uniqid("CUS");
        $invoice = uniqid("REG");
        $pemesanan = [
            'invoice' => $invoice,
            'customer_id' => $customer_id,
            'packet_id' => $this->request->getVar('kodePaket'),
            'status' => 'pending',
            'keterangan' => ucwords($this->request->getVar('keterangan')),
        ];
        
        $customer = [
            'customer_id' => $customer_id,
            'nama' => ucwords($this->request->getVar('namaPelanggan')),
            'nohp' => $this->request->getVar('nohp'),
            'alamat' => $this->request->getVar('alamat'),
            'foto_rumah' => $this->request->getVar('fotoRumah'),
        ];

        try {
            $this->customerModel->insert($customer);
            $this->pemesananModel->insert($pemesanan);

            return redirect()->to(base_url("pemesanan-berhasil?reg=$invoice"))->with('msg','Pengajuan pemasangan WiFi berhasil');
        } catch (\Exception $e) {
            echo "Error " . $e;
        }
    }

    public function pesanBerhasil()
    {
        return view('guest/pemesanan_berhasil.php');
    }

}
