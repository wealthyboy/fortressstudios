<?php

namespace App\Providers;

use App\Models\Film;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        // Using a callback ensures that data is retrieved only if it's not already cached
        $menuServices = Cache::remember('menu_services', 60 * 60, function () {
            return Service::with('media')->where('status', true)->get();
        });

        $testimonials = Cache::remember('testimonials', 60 * 60, function () {
            return Testimonial::with('media')->where('status', true)->get();
        });

        $films = Cache::remember('films', 60 * 60, function () {
            return Film::with(['media'])->where('featured_in_site', true)->orderBy('order', 'desc')->get();
        });
        $websiteInfo = DB::table('websiteinformations')->first();

        // Sharing the website information across all views
        View::share('websiteInfo', $websiteInfo);
        $pageKeywords = "Fortress Studios, film production in Lagos, Nigerian movie production, Lagos cinematography, Nigerian film studios, film production services, best cinematographer in Lagos, movie production services, film studio Nigeria, Lagos film industry, Nigerian filmmakers, video production services, professional film production, film editing services Lagos, movie production company, film industry Nigeria, commercial film production, cinematic production services, Lagos video production, film equipment rental Lagos, top film studios Nigeria, film production expertise, full-service film studio, independent film production, creative film projects, post-production services Lagos, film industry networking, Fortress Studios films, Nigerian cinematography services, Lagos production studios";

        // Sharing data across all views
        View::share('films', $films);
        View::share('services', $menuServices);
        View::share('testimonials', $testimonials);
        View::share('pageKeywords', $pageKeywords);
    }
}
