@extends('layouts.web')

@section('title', $announcement->title . ' - Politeknik LPP Yogyakarta')

@section('content')
    <!-- HEADER DETAIL -->
    <section class="bg-primary-dark pt-32 pb-20 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <i class="fas fa-bullhorn absolute -right-10 -bottom-10 text-[20rem] rotate-12"></i>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-accent mb-6">
                <a href="/" class="hover:text-white transition-colors">Beranda</a>
                <i class="fas fa-chevron-right text-[8px]"></i>
                <a href="#" class="hover:text-white transition-colors">Pengumuman</a>
                <i class="fas fa-chevron-right text-[8px]"></i>
                <span class="text-white/60">Detail</span>
            </nav>
            <h1 class="text-3xl md:text-5xl font-extrabold font-serif leading-tight max-w-4xl">
                {{ $announcement->title }}
            </h1>
            <div class="flex flex-wrap items-center gap-6 mt-8 text-sm">
                <div class="flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full">
                    <i class="far fa-calendar-alt text-accent"></i>
                    {{ \Carbon\Carbon::parse($announcement->date)->format('d M Y') }}
                </div>
                <div class="flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full">
                    <i class="fas fa-tag text-accent"></i>
                    {{ $announcement->category ?? 'Akademik' }}
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="py-20 bg-white min-h-[50vh]">
        <div class="max-w-4xl mx-auto px-4">
            <div class="bg-white rounded-3xl p-10 shadow-xl border border-gray-100 -mt-32 relative z-20">
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    {!! $announcement->content !!}
                </div>

                <div class="mt-12 pt-8 border-t border-gray-100">
                    <h4 class="text-navy font-bold mb-4">Lampiran / Dokumen Terkait</h4>
                    @if($announcement->attachment)
                    <div class="bg-gray-50 p-6 rounded-2xl flex items-center justify-between group border border-gray-100">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-primary text-xl shadow-sm border border-gray-100">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-navy">Dokumen Pengumuman.pdf</p>
                                <p class="text-xs text-gray-400">PDF • 1.2 MB</p>
                            </div>
                        </div>
                        <a href="{{ Storage::url($announcement->attachment) }}" class="px-6 py-2 bg-primary text-white text-sm font-bold rounded-lg hover:bg-primary-dark transition-all">
                            Download
                        </a>
                    </div>
                    @else
                    <p class="text-gray-400 text-sm">Tidak ada lampiran</p>
                    @endif

                </div>

                <!-- Back button -->
                <div class="mt-12 text-center">
                    <a href="/" class="inline-flex items-center gap-2 text-primary font-bold hover:text-accent transition-colors">
                        <i class="fas fa-arrow-left text-sm"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
