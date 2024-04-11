<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Celebrity_Model extends CI_Model {
    private $celebrities = [
        [
            'name' => "Emma Stone",
            'age' => 35,
            'url' => 'http://www.example.com/emmastone.png',
            'films' => ['Poor Things', 'La La Land', 'The Favourite']
        ],
        [
            'name' => "Katrina Kaif",
            'age' => 35,
            'url' => 'http://www.example.com/emmastone.png',
            'films' => ['Merry Christmans', 'Doom', 'Tiger']
        ],
    ];

    public function getCelebrityByName(string $name): ?array
    {
        foreach ($this->celebrities as $celebrity) {
            if ($celebrity['name'] === $name) {
                return $celebrity;
            }
        }
        return null;
    }
}