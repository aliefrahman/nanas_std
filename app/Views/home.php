<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($companyName) ?> | <?= htmlspecialchars($tagline) ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Compiled Tailwind CSS -->
    <link rel="stylesheet" href="<?= route('/assets/css/style.css') ?>">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        // Synchronize Theme immediately to prevent flash
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 font-sans transition-colors duration-300 antialiased">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md border-b border-slate-200/50 dark:border-slate-800/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="flex items-center space-x-2 font-bold tracking-tight text-lg text-emerald-600 dark:text-emerald-400">
                <i data-lucide="compass" class="w-5 h-5"></i>
                <span><?= htmlspecialchars($companyName) ?></span>
            </a>
            
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="#home" class="text-slate-600 dark:text-slate-350 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Beranda</a>
                <a href="#services" class="text-slate-600 dark:text-slate-350 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Layanan</a>
                <a href="#contact" class="text-slate-600 dark:text-slate-350 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Kontak</a>
            </nav>

            <div class="flex items-center space-x-4">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" class="p-2 rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-900 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors" aria-label="Ganti Tema">
                    <i data-lucide="sun" class="w-4 h-4 dark:hidden"></i>
                    <i data-lucide="moon" class="w-4 h-4 hidden dark:block"></i>
                </button>
                
                <a href="#contact" class="hidden sm:inline-flex items-center justify-center px-4 py-2 text-xs font-semibold uppercase tracking-wider text-white bg-emerald-600 hover:bg-emerald-500 rounded-lg transition-colors">
                    Hubungi Kami
                </a>

                <button id="mobile-menu-btn" class="md:hidden p-2 text-slate-600 dark:text-slate-300 hover:text-emerald-650" aria-label="Menu">
                    <i data-lucide="menu" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white dark:bg-slate-950 translate-x-full transition-transform duration-300 md:hidden flex flex-col pt-24 px-6 space-y-6">
        <button id="mobile-close-btn" class="absolute top-4 right-6 p-2 text-slate-600 dark:text-slate-300 hover:text-emerald-600" aria-label="Tutup">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>
        <a href="#home" class="mobile-link text-xl font-semibold text-slate-700 dark:text-slate-200">Beranda</a>
        <a href="#services" class="mobile-link text-xl font-semibold text-slate-700 dark:text-slate-200">Layanan</a>
        <a href="#contact" class="mobile-link text-xl font-semibold text-slate-700 dark:text-slate-200">Kontak</a>
        <a href="#contact" class="mobile-link w-full py-3 text-center text-sm font-semibold uppercase tracking-wider text-white bg-emerald-600 rounded-lg">
            Hubungi Kami
        </a>
    </div>

    <!-- Main Content -->
    <main class="pt-16">
        <!-- Hero Section -->
        <section id="home" class="min-h-[85vh] flex items-center justify-center py-20 bg-slate-50 dark:bg-slate-950 relative overflow-hidden">
            <!-- Background Accent Blurs -->
            <div class="absolute top-1/4 left-1/4 -translate-x-1/2 w-72 h-72 rounded-full bg-emerald-500/10 dark:bg-emerald-500/5 blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 w-80 h-80 rounded-full bg-teal-500/10 dark:bg-teal-500/5 blur-3xl pointer-events-none"></div>

            <div class="max-w-4xl mx-auto px-6 text-center relative z-10 space-y-8">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full border border-emerald-500/20 bg-emerald-500/5 text-emerald-600 dark:text-emerald-450 text-xs font-semibold tracking-wider uppercase">
                    <i data-lucide="award" class="w-3.5 h-3.5"></i>
                    <span>Pemandu Wisata Terpercaya</span>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight leading-tight max-w-3xl mx-auto">
                    <?= htmlspecialchars($tagline) ?>
                </h1>
                <p class="text-lg md:text-xl text-slate-600 dark:text-slate-400 font-light max-w-2xl mx-auto leading-relaxed">
                    <?= htmlspecialchars($description) ?>
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="#contact" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-white bg-emerald-600 hover:bg-emerald-500 rounded-xl transition-colors shadow-lg shadow-emerald-500/15">
                        Mulai Perjalanan
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                    </a>
                    <a href="#services" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-850 rounded-xl transition-colors">
                        Pelajari Layanan
                    </a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-24 border-t border-slate-200/50 dark:border-slate-800/50 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
                    <h2 class="text-xs font-bold text-emerald-600 dark:text-emerald-400 tracking-widest uppercase">Layanan Kami</h2>
                    <h3 class="text-3xl sm:text-4xl font-bold text-slate-900 dark:text-white tracking-tight">Kategori Wisata Pilihan</h3>
                    <p class="text-slate-600 dark:text-slate-400 font-light text-base leading-relaxed">Kami menghadirkan berbagai ragam petualangan yang terencana sempurna untuk mengabadikan momen berharga Anda.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php foreach ($services as $service): ?>
                        <div class="p-8 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/60 hover:border-emerald-500/30 dark:hover:border-emerald-500/30 transition-all duration-300 group hover:-translate-y-1">
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center mb-6">
                                <i data-lucide="<?= htmlspecialchars($service['icon']) ?>" class="w-6 h-6"></i>
                            </div>
                            <h4 class="text-xl font-semibold text-slate-900 dark:text-white mb-3 group-hover:text-emerald-600 dark:group-hover:text-emerald-450 transition-colors">
                                <?= htmlspecialchars($service['title']) ?>
                            </h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400 font-light leading-relaxed">
                                <?= htmlspecialchars($service['description']) ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 border-t border-slate-200/50 dark:border-slate-800/50 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    <div class="space-y-6">
                        <h2 class="text-xs font-bold text-emerald-600 dark:text-emerald-400 tracking-widest uppercase">Hubungi Kami</h2>
                        <h3 class="text-3xl sm:text-4xl font-bold text-slate-900 dark:text-white tracking-tight">Mulai Rencanakan Liburan Impian Anda</h3>
                        <p class="text-slate-600 dark:text-slate-400 font-light leading-relaxed">Punya pertanyaan seputar destinasi, harga, atau custom paket perjalanan? Hubungi tim kami sekarang juga.</p>
                        
                        <div class="space-y-4 pt-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-450 flex items-center justify-center shrink-0">
                                    <i data-lucide="mail" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Email</h4>
                                    <a href="mailto:<?= htmlspecialchars($contact['email']) ?>" class="text-slate-700 dark:text-slate-300 hover:text-emerald-600 transition-colors text-sm"><?= htmlspecialchars($contact['email']) ?></a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-450 flex items-center justify-center shrink-0">
                                    <i data-lucide="phone" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Telepon</h4>
                                    <p class="text-slate-700 dark:text-slate-300 text-sm"><?= htmlspecialchars($contact['phone']) ?></p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-450 flex items-center justify-center shrink-0">
                                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Alamat</h4>
                                    <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed"><?= nl2br(htmlspecialchars($contact['address'])) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 sm:p-10 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/50">
                        <form action="#" method="POST" class="space-y-6" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim.'); this.reset();">
                            <div class="space-y-2">
                                <label for="name" class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Nama Lengkap</label>
                                <input type="text" id="name" required class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500 text-sm transition-colors" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Email</label>
                                <input type="email" id="email" required class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500 text-sm transition-colors" placeholder="nama@email.com">
                            </div>
                            <div class="space-y-2">
                                <label for="message" class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Pesan</label>
                                <textarea id="message" rows="4" required class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-white focus:outline-none focus:border-emerald-500 text-sm transition-colors resize-none" placeholder="Tuliskan detail rencana liburan atau pertanyaan Anda..."></textarea>
                            </div>
                            <button type="submit" class="w-full py-3.5 rounded-lg text-sm font-semibold text-white bg-emerald-600 hover:bg-emerald-500 transition-colors flex items-center justify-center space-x-2">
                                <span>Kirim Pesan</span>
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-12 border-t border-slate-200/50 dark:border-slate-800/50 bg-white dark:bg-slate-900 text-center">
        <div class="max-w-7xl mx-auto px-6 space-y-6">
            <p class="text-xs text-slate-500">&copy; <?= date('Y') ?> <?= htmlspecialchars($companyName) ?>. Hak Cipta Dilindungi.</p>
            <div class="flex justify-center space-x-6 text-xs text-slate-400 dark:text-slate-650">
                <a href="#" class="hover:text-emerald-600 transition-colors">Kebijakan Privasi</a>
                <a href="#" class="hover:text-emerald-600 transition-colors">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Init Lucide icons
        lucide.createIcons();

        // Theme Switcher Logic
        const themeToggle = document.getElementById('theme-toggle');
        themeToggle.addEventListener('click', () => {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        });

        // Mobile Menu Toggling
        const menuBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('mobile-close-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMobileMenu() {
            mobileMenu.classList.toggle('translate-x-full');
        }

        if (menuBtn && closeBtn && mobileMenu) {
            menuBtn.addEventListener('click', toggleMobileMenu);
            closeBtn.addEventListener('click', toggleMobileMenu);
            mobileLinks.forEach(link => link.addEventListener('click', toggleMobileMenu));
        }
    </script>
</body>
</html>