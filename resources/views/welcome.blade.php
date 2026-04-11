@extends('layouts.web')

@section('title', $settings['hero_title'] ?? 'Politeknik LPP Yogyakarta')

@section('content')
    <!-- HERO SECTION -->
    <section class="relative h-[85vh] flex items-center overflow-hidden">
        <!-- Background Image -->
        <!-- <img src="https://images.unsplash.com/photo-1541339907198-e08759df9a73?auto=format&fit=crop&q=80"
            class="absolute inset-0 w-full h-full object-cover" alt="Hero Background" />
        <div class="absolute inset-0 hero-overlay"></div> -->

    <div class="absolute inset-0 overflow-hidden pointer-events-none bg-black">
        <iframe 
            class="absolute top-1/2 left-1/2 w-[100vw] h-[100vw] md:h-[56.25vw] min-h-[100vh] min-w-[177.77vh] -translate-x-1/2 -translate-y-1/2 pointer-events-none"
            src="https://www.youtube.com/embed/KCeIhVXo5Xo?autoplay=1&mute=1&controls=0&loop=1&playlist=KCeIhVXo5Xo&rel=0&showinfo=0&iv_load_policy=3&disablekb=1" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>

    <div class="absolute inset-0 hero-overlay bg-navy/60"></div>

        <div class="relative max-w-7xl mx-auto px-4 w-full pt-12">
            <div class="max-w-2xl text-white fade-in">
                <div class="inline-block px-4 py-1.5 bg-accent/20 border-l-4 border-accent text-accent font-bold text-sm tracking-widest uppercase mb-6 backdrop-blur-md">
                    Pendidikan Perkebunan Terbaik
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold font-serif leading-tight mb-6">
                    {{ $settings['hero_title'] ?? 'Politeknik LPP Yogyakarta' }}
                </h1>
                <p class="text-lg text-gray-100 mb-10 leading-relaxed font-medium">
                    {{ $settings['hero_description'] ?? 'Menghasilkan lulusan kompeten dan berkarakter untuk industri perkebunan masa depan.' }}
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ $settings['hero_button_url'] ?? '#' }}"
                        class="px-8 py-4 bg-accent text-navy font-bold rounded-full hover:bg-white hover:scale-105 transition-all shadow-lg shadow-accent/20">
                        {{ $settings['hero_button_text'] ?? 'Daftar Sekarang' }}
                    </a>
                    <a href="#"
                        class="px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold rounded-full hover:bg-white/20 transition-all">
                        Pelajari Kerjasama
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN SECTION (Static from Template) -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <h2 class="text-navy font-black text-3xl md:text-4xl mb-4 font-serif">Mengapa Memilih Kami?</h2>
                <div class="w-20 h-1 bg-accent mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-gray-50 p-10 rounded-3xl border border-gray-100 hover:border-primary/20 hover:bg-white transition-all group fade-in">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-2xl mb-8 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-navy font-bold text-xl mb-4">Kurikulum Berbasis Industri</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Disusun bersama para praktisi perkebunan untuk memastikan lulusan siap kerja sejak hari pertama.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-gray-50 p-10 rounded-3xl border border-gray-100 hover:border-primary/20 hover:bg-white transition-all group fade-in" style="transition-delay: 200ms">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-2xl mb-8 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3 class="text-navy font-bold text-xl mb-4">Fasilitas Laboratorium Lengkap</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Laboratorium modern untuk menunjang praktik teknologi pengolahan hasil kebun terbaru.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-gray-50 p-10 rounded-3xl border border-gray-100 hover:border-primary/20 hover:bg-white transition-all group fade-in" style="transition-delay: 400ms">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-2xl mb-8 group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-navy font-bold text-xl mb-4">Jaringan Alumni Luas</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Terhubung dengan ribuan alumni yang memegang posisi strategis di industri perkebunan nasional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BERITA TERKINI (Dynamic) -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-end justify-between mb-16 fade-in">
                <div>
                    <span class="text-primary font-bold text-sm tracking-widest uppercase">Update Informasi</span>
                    <h2 class="text-navy font-black text-3xl md:text-4xl mt-2 font-serif">Berita Terkini</h2>
                </div>
                <a href="#" class="text-primary font-bold hover:text-primary-dark transition-colors flex items-center gap-2">
                    Lihat Semua Berita <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($news as $item)
                <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all news-card border border-gray-100 fade-in">
                    <div class="relative h-56 overflow-hidden">
                        @if($item->image)
                            <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover" alt="{{ $item->title }}" />
                        @else
                            <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80" class="w-full h-full object-cover" alt="Default News" />
                        @endif
                        <div class="absolute top-4 left-4 px-4 py-1.5 bg-primary text-white text-[10px] font-bold rounded-full uppercase tracking-widest">
                            {{ $item->category }}
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center gap-3 text-gray-400 text-xs mb-4">
                            <span class="flex items-center gap-1.5"><i class="far fa-calendar"></i> {{ $item->created_at->format('d M Y') }}</span>
                            <span class="flex items-center gap-1.5"><i class="far fa-user"></i> Admin</span>
                        </div>
                        <h3 class="text-navy font-bold text-xl mb-4 leading-tight">
                            <a href="{{ route('news.show', $item->slug) }}" class="hover:text-primary transition-colors line-clamp-2">{{ $item->title }}</a>
                        </h3>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-3">
                            {!! strip_tags($item->content) !!}
                        </p>
                    </div>
                </article>
                @empty
                    <p class="col-span-3 text-center text-gray-500">Belum ada berita terbaru.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- PENGUMUMAN (Dynamic) -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Left: List -->
                <div class="lg:w-2/3">
                    <div class="mb-12 fade-in">
                        <span class="text-accent font-bold text-sm tracking-widest uppercase">Penting</span>
                        <h2 class="text-navy font-black text-3xl md:text-4xl mt-2 font-serif">Pengumuman Terbaru</h2>
                    </div>

                    <div class="space-y-6">
                        @forelse($announcements as $item)
                        <div class="bg-gray-50 p-6 rounded-2xl flex gap-6 items-center ann-card border border-gray-100 fade-in">
                            <div class="shrink-0 w-16 h-16 bg-white rounded-xl shadow-sm flex flex-col items-center justify-center border-t-4 border-accent">
                                <span class="text-xl font-black text-navy leading-none">{{ \Carbon\Carbon::parse($item->date)->format('d') }}</span>
                                <span class="text-[10px] font-bold text-gray-500 uppercase">{{ \Carbon\Carbon::parse($item->date)->format('M') }}</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-navy font-bold hover:text-accent transition-colors cursor-pointer">
                                    <a href="{{ route('announcement.show', $item->id) }}">{{ $item->title }}</a>
                                </h4>
                                <div class="flex gap-4 text-xs text-gray-400 mt-2">
                                    <span><i class="far fa-clock"></i> {{ $item->id % 2 == 0 ? '08:00' : '10:00' }} WIB</span>
                                    <span><i class="fas fa-tag"></i> {{ $item->category ?? 'Akademik' }}</span>
                                </div>
                            </div>
                            <button class="w-10 h-10 rounded-full border border-gray-200 text-gray-400 flex items-center justify-center hover:bg-primary hover:text-white hover:border-primary transition-all">
                                <i class="fas fa-download text-sm"></i>
                            </button>
                        </div>
                        @empty
                            <p class="text-gray-500">Tidak ada pengumuman saat ini.</p>
                        @endforelse
                    </div>

                    <button class="mt-8 px-6 py-2.5 bg-white border-2 border-primary text-primary font-bold text-sm rounded-full hover:bg-primary hover:text-white transition-all">
                        Arsip Pengumuman
                    </button>
                </div>

                <!-- Right: Stats/Banner -->
                <div class="lg:w-1/3 fade-in">
                    <div class="bg-navy rounded-3xl p-10 text-white relative overflow-hidden h-full">
                        <div class="relative z-10">
                            <h3 class="text-2xl font-serif font-black mb-6">Informasi Penerimaan Mahasiswa Baru</h3>
                            <p class="text-blue-200 text-sm mb-10 leading-relaxed">
                                Bergabunglah dengan institusi pendidikan perkebunan terdepan. Pendaftaran Gelombang I telah dibuka!
                            </p>
                            <div class="space-y-6 mb-12">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-accent"><i class="fas fa-check"></i></div>
                                    <span class="text-sm font-medium">Jalur Undangan</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-accent"><i class="fas fa-check"></i></div>
                                    <span class="text-sm font-medium">Jalur Beasiswa</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-accent"><i class="fas fa-check"></i></div>
                                    <span class="text-sm font-medium">Jalur Mandiri</span>
                                </div>
                            </div>
                            <a href="#" class="block w-full py-4 bg-accent text-navy text-center font-bold rounded-xl hover:bg-white transition-all">
                                Selengkapnya <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                            </a>
                        </div>
                        <!-- Abstract circles -->
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-white/5 rounded-full"></div>
                        <div class="absolute top-20 -right-5 w-20 h-20 bg-accent/10 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI (Dynamic) -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 fade-in">
                <span class="text-primary font-bold text-sm tracking-widest uppercase">Aktivitas</span>
                <h2 class="text-navy font-black text-3xl md:text-4xl mt-2 font-serif">Galeri Foto Kegiatan</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @forelse($galleries as $item)
                <div class="relative h-64 rounded-2xl overflow-hidden group gallery-item fade-in">
                    <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="{{ $item->caption }}" />
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-navy/20 to-transparent opacity-0 gallery-overlay flex items-end p-6">
                        <div>
                            <p class="text-white text-xs font-bold uppercase tracking-wider mb-2">Kegiatan</p>
                            <h4 class="text-white font-bold leading-tight line-clamp-2 text-sm">{{ $item->caption }}</h4>
                        </div>
                    </div>
                </div>
                @empty
                    <p class="col-span-4 text-center text-gray-500">Galeri foto belum tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- MITRA KERJASAMA (Dynamic) -->
    <section class="py-20 bg-white overflow-hidden border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <p class="text-gray-400 text-sm font-bold uppercase tracking-[0.3em]">Bekerja Sama Dengan</p>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20">
                @forelse($partners as $item)
                    <img src="{{ asset('storage/'.$item->logo) }}" class="h-10 md:h-12 w-auto partner-logo fade-in" alt="{{ $item->name }}" />
                @empty
                    <p class="text-gray-400">Mitra belum ditambahkan.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
