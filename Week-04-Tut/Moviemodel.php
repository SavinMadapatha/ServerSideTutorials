<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moviemodel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    public function getMoviesByGenre($genre)
    {

        $query = $this->db->get_where('films', array('genre' => $genre));
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false; // No movies found in the specified genre
        }
    }

    public function getMoviesByRating($rating)
    {
        $query = $this->db->get_where('films', ['imdb_rating' => $rating]);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false; // No movies found with the specified rating
        }
    }

    public function getAllMovies()
    {
        $query = $this->db->get('films');
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false; // No movies found
        }
    }
}