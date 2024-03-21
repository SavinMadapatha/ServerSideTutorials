<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Definitions extends CI_Controller {

    // this function loads the view
	public function index()
	{
		$this->load->view('definition_view');
	}

    // this function returns the definitions for the user input word
    public function get_definition() {
        $word = $this->input->post('word');
        
        // to test just returns a message
        $definition = "Definition of '{$word}' not available.";
        
        echo $definition;
    }
}
