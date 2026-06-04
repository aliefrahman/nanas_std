<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    /**
     * Display the main home page of the company profile.
     */
    public function index(): void
    {
        $data = [
            'companyName' => 'Nanas.std',
            'tagline' => 'make your happy',
            'description' => 'A lightweight, standard, and minimalist PHP Native MVC (Model-View-Controller) Framework.',

        ];

        $this->view('home', $data);
    }
}
