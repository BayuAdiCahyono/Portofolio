<!-- Projects Hero Section -->
<section class="pt-20 pb-16 bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-72 h-72 bg-white/10 rounded-full mix-blend-multiply animate-float"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-300/20 rounded-full mix-blend-multiply animate-float animation-delay-200"></div>
        <div class="absolute top-1/2 left-1/3 w-80 h-80 bg-indigo-200/20 rounded-full mix-blend-multiply animate-float animation-delay-400"></div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0 bg-white/5" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 text-shadow-lg">Proyek Saya</h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto text-shadow">
                Kumpulan proyek yang menunjukkan keahlian dan passion saya dalam pengembangan web
            </p>
        </div>
    </div>
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="filter-btn active px-6 py-3 rounded-full bg-white text-purple-600 font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105" data-filter="all">
                Semua Proyek
            </button>
            <button class="filter-btn px-6 py-3 rounded-full bg-white/20 backdrop-blur-sm text-white font-semibold border-2 border-white/30 hover:bg-white hover:text-purple-600 transition-all duration-300 hover:scale-105" data-filter="web">
                Web Apps
            </button>
            <button class="filter-btn px-6 py-3 rounded-full bg-white/20 backdrop-blur-sm text-white font-semibold border-2 border-white/30 hover:bg-white hover:text-purple-600 transition-all duration-300 hover:scale-105" data-filter="mobile">
                Mobile
            </button>
            <button class="filter-btn px-6 py-3 rounded-full bg-white/20 backdrop-blur-sm text-white font-semibold border-2 border-white/30 hover:bg-white hover:text-purple-600 transition-all duration-300 hover:scale-105" data-filter="api">
                APIs
            </button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-96 h-96 bg-gradient-to-r from-purple-200/20 to-pink-200/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-20 w-80 h-80 bg-gradient-to-r from-blue-200/20 to-cyan-200/20 rounded-full blur-3xl animate-pulse-slow animation-delay-200"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8" id="projects-grid">
            <?php if (isset($projects) && is_array($projects)): ?>
                <?php foreach ($projects as $project): ?>
                    <div class="project-card group bg-white/70 backdrop-blur-sm rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-white/30" data-category="web">
                        <!-- Project Image -->
                        <div class="relative overflow-hidden h-64 bg-gray-200">
                            <img src="<?= htmlspecialchars($project['image']) ?>"
                                alt="<?= htmlspecialchars($project['title']) ?>"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1NiIgdmlld0JveD0iMCAwIDQwMCAyNTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjU2IiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNzUgMTAwSDIyNVYxNTZIMTc1VjEwMFoiIGZpbGw9IiNEMUQ1REIiLz4KPHBhdGggZD0iTTEwMCAxMDBIMTUwVjE1NkgxMDBWMTAwWiIgZmlsbD0iI0QxRDVEQiIvPgo8cGF0aCBkPSJNMjUwIDEwMEgzMDBWMTU2SDI1MFYxMDBaIiBmaWxsPSIjRDFENURCIi8+CjwvcnZnPg=='">

                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                                <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-4 group-hover:translate-y-0">
                                    <div class="flex space-x-4">
                                        <?php if (!empty($project['demo'])): ?>
                                            <a href="<?= htmlspecialchars($project['demo']) ?>"
                                                target="_blank"
                                                class="bg-white text-gray-900 px-4 py-2 rounded-full font-medium hover:bg-gray-100 transition-colors flex items-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                                <span>View Demo</span>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (!empty($project['github'])): ?>
                                            <a href="<?= htmlspecialchars($project['github']) ?>"
                                                target="_blank"
                                                class="bg-gray-900 text-white px-4 py-2 rounded-full font-medium hover:bg-gray-800 transition-colors flex items-center space-x-2">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                </svg>
                                                <span>Code</span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">
                                <?= htmlspecialchars($project['title']) ?>
                            </h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                <?= htmlspecialchars($project['description']) ?>
                            </p>

                            <!-- Technologies -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <?php if (isset($project['technologies']) && is_array($project['technologies'])): ?>
                                    <?php
                                    $techColors = [
                                        'from-blue-100 to-indigo-100 text-indigo-700 border-indigo-200',
                                        'from-green-100 to-emerald-100 text-emerald-700 border-emerald-200',
                                        'from-purple-100 to-violet-100 text-violet-700 border-violet-200',
                                        'from-orange-100 to-red-100 text-red-700 border-red-200',
                                        'from-cyan-100 to-blue-100 text-blue-700 border-blue-200',
                                        'from-pink-100 to-rose-100 text-rose-700 border-rose-200'
                                    ];
                                    ?>
                                    <?php foreach ($project['technologies'] as $index => $tech): ?>
                                        <span class="bg-gradient-to-r <?= $techColors[$index % count($techColors)] ?> px-3 py-1 rounded-full text-sm font-medium border">
                                            <?= htmlspecialchars($tech) ?>
                                        </span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <!-- Project Links -->
                            <div class="flex space-x-4 pt-4 border-t border-gray-200/50">
                                <?php if (!empty($project['demo'])): ?>
                                    <a href="<?= htmlspecialchars($project['demo']) ?>"
                                        target="_blank"
                                        class="flex items-center space-x-2 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 font-medium transition-colors">
                                        <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                        <span>Live Demo</span>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($project['github'])): ?>
                                    <a href="<?= htmlspecialchars($project['github']) ?>"
                                        target="_blank"
                                        class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 font-medium transition-colors">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                        </svg>
                                        <span>Source Code</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-20">
                    <div class="w-24 h-24 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Tidak Ada Proyek Ditemukan</h3>
                    <p class="text-gray-600">Proyek akan ditampilkan di sini setelah ditambahkan.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-indigo-600 to-cyan-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Have a Project in Mind?
        </h2>
        <p class="text-xl text-indigo-100 mb-8 max-w-3xl mx-auto">
            I'm always excited to work on new challenges and bring innovative ideas to life.
            Let's discuss how we can create something amazing together.
        </p>
        <a href="<?= base_url('/contact') ?>"
            class="inline-flex items-center space-x-2 bg-white text-indigo-600 px-8 py-4 rounded-full font-bold hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <span>Let's Work Together</span>
        </a>
    </div>
</section>