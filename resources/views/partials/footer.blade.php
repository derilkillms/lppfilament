<!-- FOOTER -->
<footer class="bg-navy text-gray-300 pt-16">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
        <!-- Brand -->
        <div>
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center">
                    <i class="fas fa-leaf text-navy text-lg"></i>
                </div>
                <div>
                    <div class="text-white font-bold text-lg leading-none">Politeknik LPP</div>
                    <div class="text-xs text-accent font-medium mt-0.5">Yogyakarta</div>
                </div>
            </div>
            <p class="text-sm leading-relaxed mb-6">
                Menghasilkan lulusan yang kompeten dan profesional di bidang industri perkebunan Indonesia.
            </p>
            <div class="flex gap-4">
                <a href="{{ $settings['social_facebook'] ?? '#' }}" class="w-8 h-8 rounded-full bg-navy-light flex items-center justify-center hover:bg-accent hover:text-navy transition-all"><i class="fab fa-facebook-f text-sm"></i></a>
                <a href="{{ $settings['social_instagram'] ?? '#' }}" class="w-8 h-8 rounded-full bg-navy-light flex items-center justify-center hover:bg-accent hover:text-navy transition-all"><i class="fab fa-instagram text-sm"></i></a>
                <a href="{{ $settings['social_youtube'] ?? '#' }}" class="w-8 h-8 rounded-full bg-navy-light flex items-center justify-center hover:bg-accent hover:text-navy transition-all"><i class="fab fa-youtube text-sm"></i></a>
                <a href="{{ $settings['social_twitter'] ?? '#' }}" class="w-8 h-8 rounded-full bg-navy-light flex items-center justify-center hover:bg-accent hover:text-navy transition-all"><i class="fab fa-twitter text-sm"></i></a>
            </div>
        </div>

        <!-- Links -->
        <div>
            <h4 class="text-white font-bold mb-6 pb-2 border-b-2 border-accent w-12 text-sm uppercase tracking-wider">Navigasi</h4>
            <ul class="space-y-4 text-sm font-medium">
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Beranda</a></li>
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Profil Kampus</a></li>
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Program Studi</a></li>
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Pendaftaran Mahasiswa</a></li>
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Berita & Kegiatan</a></li>
            </ul>
        </div>

        <!-- Links 2 -->
        <div>
            <h4 class="text-white font-bold mb-6 pb-2 border-b-2 border-accent w-12 text-sm uppercase tracking-wider">Layanan</h4>
            <ul class="space-y-4 text-sm font-medium">
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Sistem Akademik</a></li>
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Tracer Study</a></li>
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> E-Learning</a></li>
                <li><a href="#" class="hover:text-accent transition-colors flex items-center gap-2"><i class="fas fa-chevron-right text-[10px]"></i> Perpustakaan</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-white font-bold mb-6 pb-2 border-b-2 border-accent w-12 text-sm uppercase tracking-wider">Kontak</h4>
            <ul class="space-y-4 text-sm">
                <li class="flex gap-3">
                    <i class="fas fa-map-marker-alt text-accent mt-1"></i>
                    <span>{!! nl2br(e($settings['footer_address'] ?? '')) !!}</span>
                </li>
                <li class="flex gap-3">
                    <i class="fas fa-phone-alt text-accent mt-1"></i>
                    <span>{{ $settings['footer_phone'] ?? '' }}</span>
                </li>
                <li class="flex gap-3">
                    <i class="fas fa-envelope text-accent mt-1"></i>
                    <span>{{ $settings['footer_email'] ?? '' }}</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-navy-light py-6 text-center text-xs text-gray-400">
        <p>&copy; 2024 Politeknik LPP Yogyakarta. All rights reserved.</p>
    </div>
</footer>
