<?php

namespace App\Console\Commands;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    // public function handle()
    // {
    //     $this->info('Generating sitemap...');

    //     $sitemap = SitemapGenerator::create(config('app.url'))
    //         ->getSitemap();

    //     // Add static routes
    //     $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY))
    //         ->add(Url::create('/about')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY))
    //         ->add(Url::create('/services')->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY))
    //         ->add(Url::create('/blog')->setPriority(0.7)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY))
    //         ->add(Url::create('/testimonials/create')->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));

    //     // Add projects
    //     Project::all()->each(function (Project $project) use ($sitemap) {
    //         $sitemap->add(Url::create("/projects/{$project->id}")
    //             ->setPriority(0.8)
    //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
    //     });

    //     // Add services
    //     Service::where('is_active', true)->each(function (Service $service) use ($sitemap) {
    //         $sitemap->add(Url::create("/services/{$service->id}")
    //             ->setPriority(0.7)
    //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
    //     });

    //     // Add approved testimonials
    //     Testimonial::where('approved', true)->each(function (Testimonial $testimonial) use ($sitemap) {
    //         $sitemap->add(Url::create("/testimonials/{$testimonial->id}")
    //             ->setPriority(0.6)
    //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
    //     });

    //     $sitemap->writeToFile(public_path('sitemap.xml'));

    //     $this->info('Sitemap generated successfully.');
    // }

    public function handle()
    {
        $path = public_path('sitemap.xml');
        SitemapGenerator::create('http://developia.rf.gd/?i=1')->writeToFile($path);
        $this->info('Sitemap generated successfully.');
    }
}
