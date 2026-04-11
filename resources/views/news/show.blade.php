@extends('layouts.web')

@section('title', $news->title . ' - Politeknik LPP Yogyakarta')

@section('content')
    <!-- HEADER DETAIL -->
    <section class="bg-navy pt-32 pb-20 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="https://www.transparenttextures.com/patterns/asfalt-dark.png" class="w-full h-full object-repeat" />
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-accent mb-6">
                    <a href="/" class="hover:text-white transition-colors">Beranda</a>
                    <i class="fas fa-chevron-right text-[8px]"></i>
                    <a href="#" class="hover:text-white transition-colors">Berita</a>
                    <i class="fas fa-chevron-right text-[8px]"></i>
                    <span class="text-white/60">Detail</span>
                </nav>
                <h1 class="text-4xl md:text-5xl font-extrabold font-serif leading-tight">
                    {{ $news->title }}
                </h1>
                <div class="flex flex-wrap items-center gap-6 mt-8 text-sm text-gray-300">
                    <div class="flex items-center gap-2">
                        <i class="far fa-calendar text-accent"></i>
                        {{ $news->created_at->format('d M Y') }}
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="far fa-folder text-accent"></i>
                        {{ $news->category }}
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="far fa-user text-accent"></i>
                        Admin
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    @if($news->image)
                        <div class="rounded-3xl overflow-hidden mb-10 shadow-2xl">
                            <img src="{{ asset('storage/'.$news->image) }}" class="w-full h-auto" alt="{{ $news->title }}" />
                        </div>
                    @endif

                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed font-medium">
                        {!! $news->content !!}
                    </div>

                    <!-- Share -->
                    <div class="mt-16 pt-10 border-t border-gray-100 flex flex-wrap items-center justify-between gap-6">
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-bold text-navy uppercase tracking-wider">Bagikan:</span>
                            <div class="flex gap-2">
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-navy hover:text-white transition-all"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-navy hover:text-white transition-all"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-navy hover:text-white transition-all"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-navy hover:text-white transition-all"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/3">
                    <div class="sticky top-24 space-y-10">
                        <!-- Latest News Widget -->
                        <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100">
                            <h3 class="text-navy font-black text-xl mb-8 flex items-center gap-3">
                                Berita Terbaru
                                <span class="w-8 h-1 bg-accent"></span>
                            </h3>
                            <div class="space-y-6">
                                @foreach($latestNews as $item)
                                <div class="flex gap-4 group cursor-pointer">
                                    <div class="shrink-0 w-20 h-20 rounded-xl overflow-hidden">
                                        @if($item->image)
                                            <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                                        @else
                                            <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                                        @endif
                                    </div>
                                    <div>
                                        <h4 class="text-navy font-bold text-sm leading-tight group-hover:text-primary transition-colors line-clamp-2">
                                            <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                                        </h4>
                                        <span class="text-[10px] font-bold text-gray-400 uppercase mt-2 block">{{ $item->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- CTA Banner -->
                        <div class="bg-primary rounded-3xl p-8 text-white relative overflow-hidden">
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold mb-4">Ingin bergabung dengan kami?</h3>
                                <p class="text-white/80 text-sm mb-6">Dapatkan pengalaman belajar terbaik di bidang perkebunan.</p>
                                <a href="#" class="inline-block px-6 py-3 bg-white text-primary font-bold rounded-xl hover:bg-accent hover:text-navy transition-all">Daftar Sekarang</a>
                            </div>
                            <i class="fas fa-graduation-cap absolute -bottom-4 -right-4 text-8xl text-black/10"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
