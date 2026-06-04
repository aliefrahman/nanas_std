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
            'companyName' => 'Indonesia Tour Guide',
            'tagline' => 'Jelajahi Keindahan Nusantara Bersama Kami',
            'description' => 'Kami menawarkan pengalaman perjalanan terbaik di seluruh Indonesia dengan pemandu wisata profesional, rencana perjalanan yang dirancang khusus, dan layanan berkualitas tinggi.',
            'services' => [
                [
                    'title' => 'Tur Budaya & Sejarah',
                    'icon' => 'map',
                    'description' => 'Jelajahi warisan budaya dan sejarah yang kaya di seluruh Indonesia dengan panduan lokal.'
                ],
                [
                    'title' => 'Wisata Bahari',
                    'icon' => 'waves',
                    'description' => 'Nikmati keindahan wisata bahari, snorkeling, dan diving di lautan tropis Indonesia yang menawan.'
                ],
                [
                    'title' => 'Petualangan Alam',
                    'icon' => 'mountain',
                    'description' => 'Eksplorasi pegunungan, hutan tropis, dan alam liar Indonesia untuk pengalaman tak terlupakan.'
                ]
            ],
            'contact' => [
                'email' => 'info@indonesiatourguide.com',
                'phone' => '+62 812-3456-7890',
                'address' => 'Jl. Pariwisata No. 123, Jakarta, Indonesia'
            ]
        ];

        $this->view('home', $data);
    }
}
