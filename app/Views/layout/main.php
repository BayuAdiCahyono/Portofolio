<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Portfolio' ?></title>
    <meta name="description" content="Professional portfolio showcasing web development projects and skills">
    <meta name="author" content="Your Name">

    <!-- TailwindCSS -->
    <link href="<?= base_url('src/output.css') ?>" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
</head>

<body class="font-inter bg-gray-50 text-gray-900">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-md shadow-sm z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Brand -->
                <div class="flex-shrink-0">
                    <a href="<?= base_url('/') ?>" class="text-2xl font-bold text-indigo-600 hover:text-indigo-700 transition-colors">
                        Portfolio
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="<?= base_url('/') ?>"
                            class="nav-link <?= ($active_menu ?? '') === 'home' ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' ?> 
                                  px-3 py-2 text-sm font-medium transition-colors border-b-2 border-transparent hover:border-indigo-600">
                            Home
                        </a>
                        <a href="<?= base_url('/about') ?>"
                            class="nav-link <?= ($active_menu ?? '') === 'about' ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' ?> 
                                  px-3 py-2 text-sm font-medium transition-colors border-b-2 border-transparent hover:border-indigo-600">
                            About
                        </a>
                        <a href="<?= base_url('/projects') ?>"
                            class="nav-link <?= ($active_menu ?? '') === 'projects' ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' ?> 
                                  px-3 py-2 text-sm font-medium transition-colors border-b-2 border-transparent hover:border-indigo-600">
                            Projects
                        </a>
                        <a href="<?= base_url('/contact') ?>"
                            class="nav-link <?= ($active_menu ?? '') === 'contact' ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' ?> 
                                  px-3 py-2 text-sm font-medium transition-colors border-b-2 border-transparent hover:border-indigo-600">
                            Contact
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="<?= base_url('/') ?>" class="mobile-nav-link <?= ($active_menu ?? '') === 'home' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?> block px-3 py-2 text-base font-medium transition-colors">Home</a>
                <a href="<?= base_url('/about') ?>" class="mobile-nav-link <?= ($active_menu ?? '') === 'about' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?> block px-3 py-2 text-base font-medium transition-colors">About</a>
                <a href="<?= base_url('/projects') ?>" class="mobile-nav-link <?= ($active_menu ?? '') === 'projects' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?> block px-3 py-2 text-base font-medium transition-colors">Projects</a>
                <a href="<?= base_url('/contact') ?>" class="mobile-nav-link <?= ($active_menu ?? '') === 'contact' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?> block px-3 py-2 text-base font-medium transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16 min-h-screen">
        <?php
        switch ($active_menu ?? 'home') {
            case 'about':
                echo view('pages/about', isset($education) ? compact('education', 'skills') : []);
                break;
            case 'projects':
                echo view('pages/projects', isset($projects) ? compact('projects') : []);
                break;
            case 'contact':
                echo view('pages/contact');
                break;
            default:
                echo view('pages/home');
                break;
        }
        ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Portfolio</h3>
                    <p class="text-gray-400">Pengembang web yang bersemangat menciptakan solusi modern dan responsif.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="<?= base_url('/') ?>" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="<?= base_url('/about') ?>" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="<?= base_url('/projects') ?>" class="text-gray-400 hover:text-white transition-colors">Projects</a></li>
                        <li><a href="<?= base_url('/contact') ?>" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400">&copy; 2024 Portfolio. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?= base_url('js/app.js') ?>"></script>
</body>

</html>