<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Tbl_makar extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data makar
    function index_get() {
        $no_scan = $this->get('no_scan');
        if ($no_scan == '') {
            $makar = $this->db->get('tbl_makar')->result();
        } else {
            $this->db->where('no_scan', $no_scan);
            $makar = $this->db->get('tbl_makar')->result();
        }
        $this->response($makar, 200);
    }


    //Masukan function selanjutnya disini
}
?>