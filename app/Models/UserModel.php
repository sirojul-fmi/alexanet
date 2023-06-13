<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id','username','password','role'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function updateData($key, $values, $data)
    {
        $builer = $this->db->table('users');
        $builer->set($data);
        $builer->where($key, $values);
        $builer->update();
    }

    public function getDataUser()
    {
        $db = db_connect();
        $username = session()->get('username');

        $query = $db->query("SELECT members.*, users.*, packets.*, customers.* 
        FROM members, users, packets, customers 
        WHERE members.user_id=users.user_id 
        AND members.customer_id=customers.customer_id 
        AND members.packet_id=packets.packet_code 
        AND users.username='$username'");

        return $query->getResultArray();
    }

}
