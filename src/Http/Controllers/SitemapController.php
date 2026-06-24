<?php

namespace Panelis\Page\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Panelis\Blog\Models\Blog;
use Panelis\Event\Models\Collection;
use Panelis\Event\Models\Schedule;
use Panelis\Location\Models\Region;
use Spatie\Sitemap\Sitemap;
use Symfony\Component\HttpFoundation\Response;

class SitemapController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return Sitemap::create()
            ->add([
                route('schedule.archive'),
                route('message.contact'),
                route('login'),
                route('register'),
                route('blog.index'),

                // static pages
                route('about'),
                route('terms'),
                route('privacy-policy'),
                route('content-policy'),
            ])
            ->add(Schedule::getPublishedSchedules())
            ->add(Collection::all())
            ->add(
                Region::query()
                    ->get()
                    ->map(fn (Region $region): string => route('schedule.view-region', $region->slug))
                    ->toArray(),
            )
            ->add(
                Blog::query()
                    ->published()
                    ->get(),
            )
            ->toResponse($request);
    }
}
