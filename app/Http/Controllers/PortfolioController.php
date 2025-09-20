<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Roman Ramos B.',

            'title' => 'Full Stack Web Developer',

            'email' => 'romanballesterosramos07@example.com',

            'phone' => '+639074562134',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience...',

            'profile_image' => './image/romanRamos.jpg',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'about' => [
                'name' => 'Ramos Roman',

                'title' => 'Programmer',

                'email' => 'romanballesterosramos07@gmail.com ',

                'phone' => '09054796609',

                'location' => 'Caloocan, Manila',

                'bio' => 'Currently pursuing a degree in Information Technology, passionate about coding, cybersecurity, and exploring the latest tech trends. Always looking to expand my knowledge in software development, AI, and cloud computing..',

            ],

            'projects' => [
                    [
                        'name' => 'Portfolio Website',
                        'stack' => 'Laravel, Tailwind CSS',
                        'status' => 'Completed',
                    ],
                    [
                        'name' => 'E-commerce Platform',
                        'stack' => 'Laravel, Livewire',
                        'status' => 'In Progress',
                    ],
                    [
                        'name' => 'Blog System',
                        'stack' => 'Laravel, Vue.js',
                        'status' => 'Planned',
                    ],

            ], // Project data
             'contact' => [
          
                [
                    'name' => 'GitHub',
                    'url' => 'https://github.com/yourname',
                    'status' => 'Active'
                ],
                [
                    'name' => 'LinkedIn',
                    'url' => 'https://linkedin.com/in/yourname',
                    'status' => 'Active'
                ],
                [
                    'name' => 'FaceBook',
                    'url' => 'https://www.facebook.com',
                    'status' => 'Active'            
                ]
            
                ],

            'experience' => [], // Experience data

            'education' => [], // Education data
            'social_links' =>  [
                'facebook'=> 'https://www.facebook.com/romanballesterosramos/friends',
                'phone' => '09054796609',
                'email' => 'romanballesterosramos07@gmail.com ',
                'location' => 'Caloocan, Manila',

            ] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }
    public function about(){
        $about = [
            
            'name' => 'Your Full Name',

            'title' => 'Your Job Title',

            'email' => 'your.email@example.com',

            'phone' => 'Your Phone Number',

            'location' => 'Your City, Country',

            'bio' => 'Write your bio here...',

        ];
         return view('portfolio.about', compact('about'));
    }
     public function projects()
    {
        // Array of projects
        $projects = [
            [
                'name' => 'Portfolio Website',
                'stack' => 'Laravel, Tailwind CSS',
                'status' => 'Completed',
            ],
            [
                'name' => 'E-commerce Platform',
                'stack' => 'Laravel, Livewire',
                'status' => 'In Progress',
            ],
            [
                'name' => 'Blog System',
                'stack' => 'Laravel, Vue.js',
                'status' => 'Planned',
            ],
        ];

        
        return view('portfolio.projects', compact('projects'));
    }
     public function contact()
    {
        // Array of projects
        $contact = [
          
                [
                    'name' => 'GitHub',
                    'url' => 'https://github.com/yourname',
                    'status' => 'Active'
                ],
                [
                    'name' => 'LinkedIn',
                    'url' => 'https://linkedin.com/in/yourname',
                    'status' => 'Active'
                ],
                [
                    'name' => 'FaceBook',
                    'url' => 'https://www.facebook.com/romanballesterosramos/friends',
                    'status' => 'Active'            
                ]
            
    ];
        return view('portfolio.contact', compact('contact'));
    }
}