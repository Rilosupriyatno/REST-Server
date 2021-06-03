<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table            = 'menu';
    protected $allowedFields    = [
        'id_menu', 'nama_makanan', 'descripsi_makanan'
    ];
    protected $returnType       = 'App\Entities\Menu';
    protected $useTimestamps    = false;
}
