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
                Hi, Saya <span class="text-yellow-200">Bayu</span>
            </h1>

            <p class="text-xl md:text-2xl text-white/90 mb-8 animate-fade-in-up animation-delay-200 text-shadow">
                Fresh Graduate Teknik Informatika
            </p>

            <!-- Tagline -->
            <p class="text-lg text-white/80 mb-12 max-w-3xl mx-auto animate-fade-in-up animation-delay-400 text-shadow">
                I craft beautiful, responsive web applications with modern technologies.
                Passionate about creating user-centered digital experiences that make a difference.
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
                            <div class="flex space-x-4">
                                <a href="https://demo-taskmanager.com" target="_blank"
                                    class="bg-white text-gray-900 px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition-colors flex items-center space-x-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    <span>Demo</span>
                                </a>
                                <a href="https://github.com/username/taskmanager" target="_blank"
                                    class="bg-gray-900 text-white px-4 py-2 rounded-full font-medium hover:bg-gray-800 transition-colors flex items-center space-x-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                    </svg>
                                    <span>Code</span>
                                </a>
                            </div>
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
<section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 relative overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute top-20 left-10 w-72 h-72 bg-gradient-to-r from-purple-200/30 to-pink-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-gradient-to-r from-blue-200/30 to-indigo-200/30 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-16">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Technologies</span> I Work With
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-8">
            <div class="flex flex-col items-center p-4 bg-white/70 backdrop-blur-sm rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 hover:scale-105 border border-white/20">
                <div class="w-12 h-12 mb-3 text-orange-600">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0l1.09 3.36L16 2.13l-.77 3.58L19 4.24l-1.82 3.32L21 6.03l-2.74 2.94L22 10.94l-3.5 2.39L23 16.06l-4.09 1.59L23.5 20l-4.5.87L23.5 24l-4.5-.87L23 20l-4.09-1.59L23 16.06l-3.5-2.39L22 10.94l-2.74-2.94L21 6.03l-1.82-3.32L19 4.24l-.77-3.58L16 2.13l1.09-3.36L12 0z" />
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">HTML5</span>
            </div>
            <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mb-3 text-blue-600">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">CSS3</span>
            </div>
            <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mb-3 text-yellow-600">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">JavaScript</span>
            </div>

            <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mb-3 text-red-600">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M11.998.006C5.408.006.006 5.407.006 11.998c0 6.59 5.401 11.991 11.992 11.991 6.59 0 11.992-5.401 11.992-11.991C23.99 5.407 18.588.006 11.998.006zM8.936 5.585c.568-.011 1.027-.011 1.027-.011.568-.011.511-.898-.057-.875 0 0-1.708.136-2.811.136-1.045 0-2.782-.136-2.782-.136-.568-.023-.625.909-.057.875 0 0 .428 0 .994.011l1.479 4.051-2.077 6.225L1.41 9.436c.568-.011 1.027-.011 1.027-.011.568-.011.511-.898-.057-.875 0 0-1.708.136-2.811.136-.199 0-.434-.005-.688-.011C3.332 4.537 7.463 1.594 11.998 1.594c3.373 0 6.44 1.289 8.732 3.398-.055-.003-.108-.011-.165-.011-.994 0-1.708.909-1.708 1.903 0 .881.511 1.651 1.045 2.533.398.710.881 1.616.881 2.95 0 .909-.341 1.96-.795 3.428l-1.045 3.486L8.936 5.585zm10.81 2.817c.568.011.511.909-.057.875 0 0-.43 0-.994-.011l-1.479-4.051 2.077-6.225 3.242 9.659c.568-.011 1.027-.011 1.027-.011z" />
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">CodeIgniter</span>
            </div>
            <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mb-3 text-cyan-600">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C7.666,17.818,9.027,19.2,12.001,19.2c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">TailwindCSS</span>
            </div>
            <!-- 3. Bootstrap (BARU) -->
            <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mb-3 text-purple-600">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21.579 5.625c-.256-.252-.56-.44-.897-.532l-9.613-3.085c-.417-.134-.863-.134-1.28 0L.905 5.093c-.337.092-.64.28-.897.532-.256.252-.44.56-.532.897L2.148 19.1c.092.337.28.64.532.897.256.252.56.44.897.532l9.613 3.085c.417.134.863.134 1.28 0l9.613-3.085c.337-.092.64-.28.897-.532.256-.252.44-.56.532-.897L23.475 6.522c-.092-.337-.28-.64-.532-.897zM12 2.531l8.52 2.738-1.66 4.966-5.83-1.868v-3.729h-2v3.729L4.85 10.235l-1.66-4.966L12 2.531zm-6.14 7.747l1.378 4.134c.159.475.666.757 1.136.605l2.454-.836v3.729c0 .552.448 1 1 1s1-.448 1-1v-3.729l2.454.836c.47.152.977-.13 1.136-.605l1.378-4.134c.152-.455-.084-.94-.539-1.092l-5.632-1.81c-.455-.152-.94.084-1.092.539l-2.094 6.284z" />
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">Bootstrap</span>
            </div>
            <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 mb-3 text-blue-700">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5.8 11.9c0-.9.7-1.6 1.6-1.6.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6zM1.4 11.9c0-.9.7-1.6 1.6-1.6.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6zM10.2 11.9c0-.9.7-1.6 1.6-1.6.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6zM14.6 11.9c0-.9.7-1.6 1.6-1.6.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6zM19 11.9c0-.9.7-1.6 1.6-1.6.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6z" />
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-700">MySQL</span>
            </div>
        </div>
    </div>
</section>