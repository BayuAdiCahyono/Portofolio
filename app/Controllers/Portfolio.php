<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home - My Portfolio',
            'active_menu' => 'home'
        ];
        return view('layout/main', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About - My Portfolio',
            'active_menu' => 'about',
            'education' => [
                [
                    'degree' => 'Sarjana Teknik Informatika',
                    'institution' => 'Sekolah Tinggi Ilmu Komputer Cipta Karya Informatika',
                    'year' => '2021-2025',
                    'gpa' => '3.61'
                ],
                [
                    'degree' => 'MIPA',
                    'institution' => 'MA Plus Al Hadi',
                    'year' => '2017-2020',
                    'gpa' => '80.5'
                ]
            ],
            'skills' => [
                ['name' => 'PHP', 'level' => 90],
                ['name' => 'JavaScript', 'level' => 85],
                ['name' => 'Python', 'level' => 80],
                ['name' => 'CodeIgniter', 'level' => 88],
                ['name' => 'Laravel', 'level' => 75],
                ['name' => 'React', 'level' => 70],
                ['name' => 'TailwindCSS', 'level' => 85],
                ['name' => 'MySQL', 'level' => 82]
            ]
        ];
        return view('layout/main', $data);
    }

    public function projects(): string
    {
        $data = [
            'title' => 'Projects - My Portfolio',
            'active_menu' => 'projects',
            'projects' => [
                [
                    'id' => 1,
                    'title' => 'E-Commerce Platform',
                    'description' => 'Full-stack e-commerce solution built with CodeIgniter 4 and MySQL. Features include user authentication, product management, shopping cart, and payment integration.',
                    'image' => '/images/projects/ecommerce.jpg',
                    'technologies' => ['CodeIgniter 4', 'MySQL', 'Bootstrap', 'JavaScript'],
                    'github' => 'https://github.com/username/ecommerce',
                    'demo' => 'https://demo-ecommerce.com'
                ],
                [
                    'id' => 2,
                    'title' => 'Task Management App',
                    'description' => 'Modern task management application with real-time updates. Built using React frontend and PHP backend with RESTful API.',
                    'image' => '/images/projects/taskmanager.jpg',
                    'technologies' => ['React', 'PHP', 'PostgreSQL', 'TailwindCSS'],
                    'github' => 'https://github.com/username/taskmanager',
                    'demo' => 'https://demo-taskmanager.com'
                ],
                [
                    'id' => 3,
                    'title' => 'Weather Dashboard',
                    'description' => 'Interactive weather dashboard that displays current weather and forecasts for multiple cities. Features beautiful charts and responsive design.',
                    'image' => '/images/projects/weather.jpg',
                    'technologies' => ['JavaScript', 'Chart.js', 'OpenWeather API', 'CSS3'],
                    'github' => 'https://github.com/username/weather-dashboard',
                    'demo' => 'https://demo-weather.com'
                ],
                [
                    'id' => 4,
                    'title' => 'Blog Management System',
                    'description' => 'Content management system for blogs with WYSIWYG editor, category management, and SEO optimization features.',
                    'image' => '/images/projects/blog.jpg',
                    'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'TinyMCE'],
                    'github' => 'https://github.com/username/blog-cms',
                    'demo' => 'https://demo-blog.com'
                ]
            ]
        ];
        return view('layout/main', $data);
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact - My Portfolio',
            'active_menu' => 'contact'
        ];
        return view('layout/main', $data);
    }

    public function sendMessage()
    {
        // Placeholder untuk handling form submission
        // Bisa diimplementasi nanti jika diperlukan database
        return redirect()->to('/contact')->with('message', 'Thank you for your message!');
    }
}
