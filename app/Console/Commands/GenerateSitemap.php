<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap';

    public function handle()
    {
        //        // Manually create sitemap
        //        $sitemap = Sitemap::create();
        //
        //        // Static pages
        //        $sitemap->add('/');
        //        $sitemap->add('/about-us');
        //
        //        // Dynamic pages
        //        $users = User::all();
        //        foreach ($users as $user) {
        //            $sitemap->add("/users/{$user->id}");
        //        }
        //
        //        $sitemap->writeToFile(public_path('sitemap.xml'));

        // The Crawler
        SitemapGenerator::create('http://localhost:8000')
            ->hasCrawled(function (Url $url) {
                // Some logic here
                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));
    }
}
