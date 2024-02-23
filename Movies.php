<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {
    public function index()
    {
        $this->load->view('form');
    }

    public function search()
    {
        // Load the model
        $this->load->model('Moviemodel');
    
        // Retrieve the search type and query from the form submission
        $searchType = $this->input->post('searchType', TRUE);
        $searchQuery = $this->input->post('searchQuery', TRUE);
    
        if ($searchType == 'genre') {
            $data['movies'] = $this->Moviemodel->getMoviesByGenre($searchQuery);
        } else if ($searchType == 'rating') {
            $data['movies'] = $this->Moviemodel->getMoviesByRating($searchQuery);
        } else {
            $data['movies'] = false; 
        }
        
        // Load the view and pass the movies data
        $this->load->view('search_results', $data);
    }

    public function allmovies()
    {
        $this->load->model('Moviemodel');
        $data['movies'] = $this->Moviemodel->getAllMovies();
        
        $this->load->view('allmovies', $data);
    }

}