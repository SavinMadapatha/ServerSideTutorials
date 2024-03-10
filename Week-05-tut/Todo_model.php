<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_model extends CI_Model {
    public function get_todos() {
        $query = $this->db->get('todo');
        return $query->result();
    }

    public function add_todo($user_id, $action) {
        $data = [
            'session_id' => $user_id,
            'action' => $action
        ];
        $this->db->insert('todo', $data);
    }
}