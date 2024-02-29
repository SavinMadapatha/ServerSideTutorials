<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalculatorModel extends CI_Model {

    public function add($number1, $number2)
    {
        return $number1 + $number2;
    }
}