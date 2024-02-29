<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalculatorController extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('CalculatorModel');
    if (!isset($this->CalculatorModel)) {
        die('Model not loaded'); 
        }
    }

    public function index()
    {
        $data = [];
        if ($this->input->post('submit')) {
            $number1 = $this->input->post('number1');
            $number2 = $this->input->post('number2');
            $result = $this->CalculatorModel->add($number1, $number2);
            $data['result'] = $result;
        }

        $this->load->view('calculator_view', $data);
        if (isset($result)) {
            $this->load->view('result_view', $data);
        }
    }
}