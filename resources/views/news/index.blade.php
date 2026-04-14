@extends('layouts.web')

@section('title', 'Semua Berita - Politeknik LPP Yogyakarta')

@section('content')
    <!-- HEADER -->
    <section class="bg-navy pt-32 pb-20 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="https://www.transparenttextures.com/patterns/asfalt-dark.png" class="w-full h-full object-repeat" />
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <nav class="flex items-center justify-center gap-2 text-xs font-bold uppercase tracking-widest text-accent mb-6">
                <a href="/" class="hover:text-white transition-colors">Beranda</a>
                <i class="fas fa-chevron-right text-[8px]"></i>
                <span class="text-white/60">Berita</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold font-serif leading-tight mb-8">
                Berita Terkini
            </h1>
            
            <!-- Search Form -->
            <form action="{{ route('news.index') }}" method="GET" class="flex gap-2 max-w-2xl mx-auto relative">
                <input type="text" name="search" value="{{ request('search') }}" 
                    placeholder="Cari informasi berita..." 
                    class="flex-1 px-8 py-4 rounded-full border-none focus:outline-none text-navy font-bold w-full shadow-2xl">
                <button type="submit" 
                    class="absolute text-lg right-2 top-2 bottom-2 px-8 bg-accent text-navy font-bold rounded-full hover:bg-white transition-all">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-24 bg-gray-50 flex-1">
        <div class="max-w-7xl mx-auto px-4">
            @if(request('search'))
                <div class="mb-10 text-center">
                    <p class="text-gray-500 font-medium">Hasil pencarian untuk: <strong class="text-navy">"{{ request('search') }}"</strong></p>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($news as $item)
                <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all news-card border border-gray-100 flex flex-col fade-in relative top-0 hover:-top-2">
                    <div class="relative h-56 overflow-hidden shrink-0">
                        @if($item->image)
                            <img src="{{ asset('storage/'.$item->image) }}" class="w-full h-full object-cover" alt="{{ $item->title }}" />
                        @else
                            <img src="https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80" class="w-full h-full object-cover" alt="Default News" />
                        @endif
                        <div class="absolute top-4 left-4 px-4 py-1.5 bg-primary text-white text-[10px] font-bold rounded-full uppercase tracking-widest">
                            {{ $item->category }}
                        </div>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <div class="flex items-center gap-3 text-gray-400 text-xs mb-4">
                            <span class="flex items-center gap-1.5"><i class="far fa-calendar"></i> {{ $item->created_at->format('d M Y') }}</span>
                            <span class="flex items-center gap-1.5"><i class="far fa-user"></i> Admin</span>
                        </div>
                        <h3 class="text-navy font-bold text-xl mb-4 leading-tight shrink-0">
                            <a href="{{ route('news.show', $item->slug) }}" class="hover:text-primary transition-colors line-clamp-2">{{ $item->title }}</a>
                        </h3>
                        <p class="text-gray-500 text-sm mb-6 line-clamp-3">
                            {!! strip_tags($item->content) !!}
                        </p>
                        <div class="mt-auto">
                           <a href="{{ route('news.show', $item->slug) }}" class="text-primary font-bold text-sm hover:text-navy transition-colors">Baca Selengkapnya <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                        </div>
                    </div>
                </article>
                @empty
                    <div class="col-span-full">
                        <div class="bg-white rounded-3xl p-16 text-center border border-gray-100 shadow-sm fade-in">
                            <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-newspaper text-3xl text-gray-300"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-navy mb-2">Berita tidak ditemukan</h3>
                            <p class="text-gray-500">Maaf, kami tidak dapat menemukan berita yang Anda cari. Silakan coba kata kunci lain.</p>
                            @if(request('search'))
                                <a href="{{ route('news.index') }}" class="inline-block mt-8 px-8 py-3 bg-primary text-white font-bold rounded-full hover:bg-navy transition-all">Lihat Semua Berita</a>
                            @endif
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($news->hasPages())
            <div class="mt-16 flex justify-center pagination-wrapper">
                {{ $news->links() }}
            </div>
            @endif
        </div>
    </section>

    <!-- Custom Style for Tailwind Paginations links -->
    <style>
        .pagination-wrapper nav {
            @apply flex items-center justify-between;
        }
        .pagination-wrapper nav .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
            @apply flex-col sm:flex-row gap-4;
        }
        .pagination-wrapper p.text-sm.text-gray-700.leading-5 {
            @apply shadow-none font-medium;
        }
        .pagination-wrapper span.relative.z-0.inline-flex.shadow-sm.rounded-md {
            @apply gap-1 shadow-none;
        }
        .pagination-wrapper a.relative.inline-flex.items-center.px-4.py-2, 
        .pagination-wrapper span.relative.inline-flex.items-center.px-4.py-2 {
            @apply rounded-xl font-bold border-gray-200 transition-all;
        }
        .pagination-wrapper span[aria-current="page"] span {
            @apply bg-primary text-white border-primary border z-10;
        }
        .pagination-wrapper a.relative.inline-flex.items-center.px-4.py-2:hover {
            @apply bg-primary text-white border-primary z-10;
        }
    </style>
@endsection
