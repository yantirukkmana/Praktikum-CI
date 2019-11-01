<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class model_pertama extends CI_model{

    public function getData(){
        return $this->db->get('datashop');
    }
}
