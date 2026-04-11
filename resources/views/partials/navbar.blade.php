<!-- TOP BAR -->
<div class="bg-primary-dark text-white text-xs py-1.5 px-4 flex items-center justify-between">
    <div class="flex items-center gap-4 overflow-hidden">
        <span class="text-accent font-semibold whitespace-nowrap flex items-center gap-1">
            <span class="pulse-dot inline-block w-2 h-2 bg-accent rounded-full"></span>
            BERITA TERBARU
        </span>
        <div class="overflow-hidden flex-1">
            <div class="marquee-inner flex gap-12 whitespace-nowrap w-max">
                @forelse($tickerNews as $item)
                    <span>{{ $item->title }}</span>
                    <span>•</span>
                @empty
                    <span>Selamat Datang di Politeknik LPP Yogyakarta</span>
                    <span>•</span>
                @endforelse
            </div>
        </div>
    </div>
    <div class="hidden md:flex items-center gap-3 ml-4 shrink-0">
        <a href="{{ $settings['social_facebook'] ?? '#' }}" class="hover:text-accent transition-colors"><i class="fab fa-facebook-f"></i></a>
        <a href="{{ $settings['social_instagram'] ?? '#' }}" class="hover:text-accent transition-colors"><i class="fab fa-instagram"></i></a>
        <a href="{{ $settings['social_youtube'] ?? '#' }}" class="hover:text-accent transition-colors"><i class="fab fa-youtube"></i></a>
        <a href="{{ $settings['social_twitter'] ?? '#' }}" class="hover:text-accent transition-colors"><i class="fab fa-twitter"></i></a>
    </div>
</div>

<!-- NAVBAR -->
<nav class="sticky top-0 z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                <i class="fas fa-leaf text-white text-lg"></i>
            </div>
            <div class="leading-tight">
                <div class="text-xs text-gray-500 font-medium uppercase tracking-widest">Politeknik</div>
                <div class="text-primary font-bold text-base leading-none">LPP Yogyakarta</div>
            </div>
        </a>

        <!-- Desktop Nav -->
        <div class="hidden lg:flex items-center gap-6 text-sm font-semibold text-gray-700">
            <a href="/" class="nav-link text-primary border-b-2 border-accent pb-0.5">Beranda</a>
            <div class="relative group">
                <a href="#" class="nav-link flex items-center gap-1">Profil <i
                        class="fas fa-chevron-down text-xs"></i></a>
                <div
                    class="absolute top-full left-0 bg-white shadow-xl rounded-lg py-2 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors">Sejarah</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors">Visi & Misi</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors">Struktur Organisasi</a>
                </div>
            </div>
            <div class="relative group">
                <a href="#" class="nav-link flex items-center gap-1">Unit / Bagian <i
                        class="fas fa-chevron-down text-xs"></i></a>
                <div
                    class="absolute top-full left-0 bg-white shadow-xl rounded-lg py-2 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors">Akademik</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors">Kemahasiswaan</a>
                </div>
            </div>
            <div class="relative group">
                <a href="#" class="nav-link flex items-center gap-1">Program Studi <i
                        class="fas fa-chevron-down text-xs"></i></a>
                <div
                    class="absolute top-full left-0 bg-white shadow-xl rounded-lg py-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors text-xs">Pengelolaan Hasil Perkebunan</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors text-xs">Akuntansi</a>
                    <a href="#" class="block px-4 py-2 hover:bg-green-50 hover:text-primary transition-colors text-xs">Teknologi Rekayasa Mesin Industri</a>
                </div>
            </div>
            <a href="#" class="nav-link">Download</a>
            <a href="#" class="nav-link">PKKMB</a>
            <a href="#" class="nav-link">Kontak</a>
        </div>

        <!-- Search -->
        <div class="hidden md:flex items-center border border-gray-200 rounded-full overflow-hidden">
            <input type="text" placeholder="Search..." class="px-3 py-1.5 text-sm outline-none w-36" />
            <button
                class="bg-primary text-white px-4 py-1.5 text-sm font-semibold hover:bg-primary-light transition-colors">Search</button>
        </div>

        <!-- Hamburger -->
        <button class="lg:hidden text-gray-700 text-xl"
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 px-4 pb-4">
        <div class="flex flex-col gap-2 pt-2 text-sm font-medium">
            <a href="/" class="py-2 text-primary border-b border-gray-100">Beranda</a>
            <a href="#" class="py-2 border-b border-gray-100">Profil</a>
            <a href="#" class="py-2 border-b border-gray-100">Unit / Bagian</a>
            <a href="#" class="py-2 border-b border-gray-100">Program Studi</a>
            <a href="#" class="py-2 border-b border-gray-100">Download</a>
            <a href="#" class="py-2 border-b border-gray-100">PKKMB</a>
            <a href="#" class="py-2">Kontak</a>
        </div>
    </div>
</nav>
