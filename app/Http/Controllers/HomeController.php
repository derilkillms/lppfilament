<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Partner;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::where('is_published', true)->orderBy('created_at', 'desc')->take(3)->get();
        $tickerNews = News::where('is_published', true)->orderBy('created_at', 'desc')->take(5)->get();
        $announcements = Announcement::orderBy('created_at', 'desc')->take(3)->get();
        $partners = Partner::all();
        $galleries = Gallery::orderBy('order')->orderBy('created_at', 'desc')->take(8)->get();
        $settings = Setting::pluck('value', 'key')->toArray();

        return view('welcome', compact('news', 'tickerNews', 'announcements', 'partners', 'galleries', 'settings'));
    }

    public function newsDetail(News $news)
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $tickerNews = News::where('is_published', true)->orderBy('created_at', 'desc')->take(5)->get();
        $latestNews = News::where('is_published', true)
            ->where('id', '!=', $news->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('news.show', compact('news', 'settings', 'tickerNews', 'latestNews'));
    }

    public function announcementDetail(Announcement $announcement)
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $tickerNews = News::where('is_published', true)->orderBy('created_at', 'desc')->take(5)->get();

        return view('announcements.show', compact('announcement', 'settings', 'tickerNews'));
    }
}
