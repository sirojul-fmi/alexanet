<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ForwardChaining extends BaseController
{
    // Langkah 1: Koneksi ke database
    private $conn = '';

    // Inisialisasi array untuk menyimpan hasil forward chaining
    private $hasil = array();

    public function __construct()
    {
        $this->conn = \Config\Database::connect();
    }

    public function forwardChaining($fact)
    {
        // Ambil data aturan dari database
        $query = $this->conn->query('SELECT * FROM rules');
        $aturan = $query->getResultArray();
        
        $terpenuhi = true;
        
        // Iterasi aturan
        // Periksa kondisi pada aturan
        foreach ($aturan as $kondisi) {
            
            // Periksa apakah kondisi terpenuhi dalam fakta awal
            foreach ($fact as $f) {
                // lakukan iterasi pada setiap fakta sampai tidak ada kondisi yang bisa diperiksa lagi
                if ($f['fact1'] == $kondisi['rule1']) { 
                    if ($f['fact2'] == $kondisi['rule2']) {
                        if ($f['fact3'] == $kondisi['rule3']) {
                            if ($f['fact4'] == $kondisi['rule4']) {
                                $terpenuhi = true;
                                $param = $kondisi['conclusion'];
                                $query = $this->conn->query("SELECT * FROM packets WHERE packet_code='$param'");
                                $result = $query->getResultArray();
                                // foreach ($result as $key => $value) {
                                    $this->hasil = $result;
                                // }
                                break;
                            }
                        }
                    }
                }
                
            }

            // Jika kondisi tidak terpenuhi, aturan tidak diterapkan
            if (!$terpenuhi) {
                $terpenuhi = false;
                break;
            }
        }

        // Jika semua kondisi terpenuhi, terapkan aksi pada aturan
        if ($terpenuhi) {
            // kembalikan nilai hasil jika kondisi terpenuhi
            return $this->hasil;
        }
        
    }

}
