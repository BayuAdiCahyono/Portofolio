<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-purple-400 via-pink-400 to-indigo-600">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Floating Shapes -->
        <div class="absolute top-20 left-20 w-72 h-72 bg-white/10 rounded-full mix-blend-multiply animate-float"></div>
        <div class="absolute top-40 right-20 w-96 h-96 bg-yellow-200/20 rounded-full mix-blend-multiply animate-float animation-delay-200"></div>
        <div class="absolute bottom-20 left-40 w-80 h-80 bg-blue-200/20 rounded-full mix-blend-multiply animate-float animation-delay-400"></div>

        <!-- Gradient Orbs -->
        <div class="absolute top-1/4 left-1/3 w-48 h-48 bg-gradient-to-r from-cyan-300/30 to-blue-400/30 rounded-full blur-xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/3 right-1/4 w-64 h-64 bg-gradient-to-r from-pink-300/30 to-purple-400/30 rounded-full blur-xl animate-pulse-slow animation-delay-300"></div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-white/5" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="text-center">
            <!-- Profile Image -->
            <div class="relative mb-8 inline-block">
                <div class="w-32 h-32 md:w-40 md:h-40 mx-auto rounded-full overflow-hidden border-4 border-white/30 shadow-2xl backdrop-blur-sm">
                    <img src="<?= base_url('images/profile.jpg') ?>"
                        alt="Profile Picture"
                        class="w-full h-full object-cover"
                        onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYwIiBoZWlnaHQ9IjE2MCIgdmlld0JveD0iMCAwIDE2MCAxNjAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIxNjAiIGhlaWdodD0iMTYwIiBmaWxsPSIjRjNGNEY2Ii8+CjxjaXJjbGUgY3g9IjgwIiBjeT0iNjAiIHI9IjI0IiBmaWxsPSIjOUI5QkEwIi8+CjxwYXRoIGQ9Ik04MCA5MkM2NC41IDkyIDUyIDEwNC41IDUyIDEyMFYxNjBIMTA4VjEyMEMxMDggMTA0LjUgOTUuNSA5MiA4MCA5MloiIGZpbGw9IiM5QjlCQTAiLz4KPC9zdmc+'">
                </div>
                <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white"></div>
            </div>

            <!-- Name and Title -->
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate-fade-in-up text-shadow-lg">
                Hai, Saya <span class="text-yellow-200">Bayu</span>
            </h1>

            <p class="text-xl md:text-2xl text-white/90 mb-8 animate-fade-in-up animation-delay-200 text-shadow">
                Fresh Graduate Teknik Informatika
            </p>

            <!-- Tagline -->
            <p class="text-lg text-white/80 mb-12 max-w-3xl mx-auto animate-fade-in-up animation-delay-400 text-shadow">
                Saya merancang aplikasi web yang indah dan responsif dengan teknologi modern. Saya bersemangat menciptakan pengalaman digital yang berpusat pada pengguna dan membawa perubahan.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?= base_url('/contact') ?>"
                    class="group bg-white/20 backdrop-blur-sm text-white border-2 border-white/30 px-8 py-4 rounded-full font-medium hover:bg-white hover:text-purple-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Hubungi Saya
                    <svg class="inline-block ml-2 w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
                <a href="<?= base_url('/about') ?>"
                    class="group bg-white text-purple-600 px-8 py-4 rounded-full font-medium hover:bg-white/90 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Selengkapnya
                    <svg class="inline-block ml-2 w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-80 h-80 bg-gradient-to-r from-purple-200/20 to-pink-200/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-r from-blue-200/20 to-indigo-200/20 rounded-full blur-3xl animate-pulse-slow animation-delay-200"></div>
        <div class="absolute inset-0 bg-white/20" style="background-image: radial-gradient(circle at 2px 2px, rgba(139, 92, 246, 0.1) 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Proyek</span> Unggulan
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Beberapa karya terbaik yang telah saya buat dengan teknologi modern
            </p>
        </div>

        <!-- Featured Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Project 1: E-Commerce Platform -->
            <div class="group bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-white/30">
                <!-- Project Image -->
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-blue-400 to-purple-600">
                    <img src="<?= base_url('images/projects/ecommerce.jpg') ?>"
                        alt="E-Commerce Platform"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                    <!-- Fallback Design -->
                    <div class="w-full h-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white" style="display: none;">
                        <div class="text-center">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <h3 class="text-xl font-bold">E-Commerce</h3>
                            <p class="text-sm opacity-80">Platform</p>
                        </div>
                    </div>

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                        </div>
                    </div>
                </div>

                <!-- Project Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">
                        Platform E-Commerce
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Solusi e-commerce full-stack yang dibangun dengan CodeIgniter 4 dan MySQL.
                        Fitur lengkap meliputi autentikasi pengguna, manajemen produk, keranjang belanja, dan integrasi pembayaran.
                    </p>

                    <!-- Technologies -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gradient-to-r from-blue-100 to-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium border border-indigo-200">CodeIgniter 4</span>
                        <span class="bg-gradient-to-r from-green-100 to-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-medium border border-emerald-200">MySQL</span>
                        <span class="bg-gradient-to-r from-purple-100 to-violet-100 text-violet-700 px-3 py-1 rounded-full text-sm font-medium border border-violet-200">Bootstrap</span>
                        <span class="bg-gradient-to-r from-yellow-100 to-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm font-medium border border-orange-200">JavaScript</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: Task Management App -->
            <div class="group bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-white/30">
                <!-- Project Image -->
                <div class="relative overflow-hidden h-64 bg-gradient-to-br from-green-400 to-blue-600">
                    <img src="<?= base_url('images/projects/taskmanager.jpg') ?>"
                        alt="Task Management App"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                    <!-- Fallback Design -->
                    <div class="w-full h-full bg-gradient-to-br from-green-500 to-blue-600 flex items-center justify-center text-white" style="display: none;">
                        <div class="text-center">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            <h3 class="text-xl font-bold">Task Manager</h3>
                            <p class="text-sm opacity-80">Application</p>
                        </div>
                    </div>

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                        </div>
                    </div>
                </div>

                <!-- Project Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
                        Aplikasi Manajemen Tugas
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Aplikasi manajemen tugas modern dengan update real-time. Dibangun menggunakan React frontend
                        dan PHP backend dengan RESTful API untuk pengalaman pengguna yang seamless.
                    </p>

                    <!-- Technologies -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gradient-to-r from-blue-100 to-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-sm font-medium border border-cyan-200">React</span>
                        <span class="bg-gradient-to-r from-indigo-100 to-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium border border-purple-200">PHP</span>
                        <span class="bg-gradient-to-r from-green-100 to-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm font-medium border border-teal-200">PostgreSQL</span>
                        <span class="bg-gradient-to-r from-pink-100 to-rose-100 text-rose-700 px-3 py-1 rounded-full text-sm font-medium border border-rose-200">TailwindCSS</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Projects Button -->
        <div class="text-center">
            <a href="<?= base_url('/projects') ?>"
                class="group inline-flex items-center space-x-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-4 rounded-full font-semibold hover:from-purple-700 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-2xl">
                <span>Lihat Semua Proyek</span>
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Featured Technologies -->
<section class="py-16 bg-gradient-to-b from-white to-purple-50">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center mb-12">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-pink-500">Teknologi</span>
            yang Saya Gunakan
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-9 gap-6">
            <!-- HTML5 -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">HTML5</span>
            </div>

            <!-- CSS3 -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">CSS3</span>
            </div>

            <!-- JavaScript -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">JavaScript</span>
            </div>

            <!-- CodeIgniter -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg" alt="CodeIgniter" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">CodeIgniter</span>
            </div>

            <!-- Bootstrap -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">Bootstrap</span>
            </div>

            <!-- TailwindCSS -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/tailwindcss.svg" alt="TailwindCSS" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">TailwindCSS</span>
            </div>

            <!-- Dart -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dart/dart-original.svg" alt="Dart" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">Dart</span>
            </div>

            <!-- MySQL -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">MySQL</span>
            </div>

            <!-- MongoDB -->
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="w-12 h-12 mb-3">
                <span class="text-sm font-medium text-gray-700">MongoDB</span>
            </div>
        </div>
    </div>
</section>