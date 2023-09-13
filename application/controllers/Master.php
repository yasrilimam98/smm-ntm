<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!is_login()) {
            redirect('Auth');
        }
        $this->user_id = $this->session->userdata('user_id');
    }
    public function items()
    {
        $data['title'] = 'Master Items';
        $this->template->views('master/items', $data);
    }
    public function supplier()
    {
        $data['title'] = 'Master Supplier';
        $this->template->views('master/supplier', $data);
    }
    public function machine()
    {
        $data['title'] = 'Master Machine';
        $this->template->views('master/machine', $data);
    }
    public function material()
    {
        $data['title'] = 'Master Material';
        $this->template->views('master/material', $data);
    }
    public function billOfMaterial()
    {
        $data['title'] = 'Master Bill Of Material';
        $this->template->views('master/billOfMaterial', $data);
    }
}
