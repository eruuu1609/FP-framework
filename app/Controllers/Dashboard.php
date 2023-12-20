<?php

namespace App\Controllers;
use App\Models\Model_sepatu;
use App\Models\Model_merk;
use App\Models\Model_tipe;
use App\Models\Model_checkout;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct() {
        $this->Model_sepatu = new Model_sepatu();
        $this->Model_merk = new Model_merk();
        $this->Model_tipe = new Model_tipe();
        $this->Model_checkout = new Model_checkout();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'sepatu' => $this->Model_sepatu->allData(),
            'merk' => $this->Model_merk->allData(),
            'tipe' => $this->Model_tipe->allData(),
            'checkout' => $this->Model_checkout->allData(),
        );
        return view ('admin/v_dashboard', $data);
    }
}
