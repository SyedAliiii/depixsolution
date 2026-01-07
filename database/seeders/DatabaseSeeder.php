<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        $this->call([
            AdminSeeder::class,
            SettingSeeder::class,
        ]);



        // Sample Sliders
        $sliders = [
            ['title' => 'Legacy of Rainbow', 'subtitle' => '', 'category' => 'trend', 'image' => 'assets/img/slider/d-s.png', 'link' => '/portfolio-1', 'order' => 1],
            ['title' => 'Dance and Night Club', 'subtitle' => '', 'category' => 'design', 'image' => 'assets/img/slider/d-s.png', 'link' => '/portfolio-1', 'order' => 2],
            ['title' => 'Wind in the Storms', 'subtitle' => '', 'category' => 'graphic design', 'image' => 'assets/img/slider/d-s.png', 'link' => '/portfolio-1', 'order' => 3],
            ['title' => 'Emerald in the Children', 'subtitle' => '', 'category' => 'trend', 'image' => 'assets/img/slider/d-s.png', 'link' => '/portfolio-1', 'order' => 4],
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }

        // Sample Portfolios
        $portfolios = [
            ['title' => 'Servant of Academy', 'category' => 'design', 'image' => 'assets/img/portfolio/jr_pf.png', 'description' => 'A creative design project showcasing modern aesthetics.'],
            ['title' => 'The Kissing Eyes', 'category' => 'project', 'image' => 'assets/img/portfolio/jr_pf.png', 'description' => 'An innovative project with unique visual elements.'],
            ['title' => 'Silk of Secrets', 'category' => 'trend', 'image' => 'assets/img/portfolio/jr_pf.png', 'description' => 'Trending design patterns for modern applications.'],
            ['title' => 'Emerald in the Children', 'category' => 'project', 'image' => 'assets/img/portfolio/jr_pf.png', 'description' => 'Creative project with vibrant colors.'],
            ['title' => 'Wind in the Storms', 'category' => 'design', 'image' => 'assets/img/portfolio/jr_pf.png', 'description' => 'Dynamic design capturing movement and energy.'],
            ['title' => 'Legacy of Rainbow', 'category' => 'trend', 'image' => 'assets/img/portfolio/jr_pf.png', 'description' => 'Colorful design project with lasting impact.'],
        ];

        foreach ($portfolios as $i => $portfolio) {
            $portfolio['order'] = $i + 1;
            Portfolio::create($portfolio);
        }

        // Sample Blog Posts
        $posts = [
            [
                'title' => 'Your Key To Success: GAME',
                'category' => 'design',
                'image' => 'assets/img/blog/jr-post-default.png',
                'excerpt' => 'Objectively maintain sticky initiatives whereas technically sound niches.',
                'content' => '<p>Objectively maintain sticky initiatives whereas technically sound niches. Conveniently leverage others principle-centered catalysts for change before dynamic information.</p><p>Collaboratively pursue maintainable mindshare before sticky internal or organic sources. Credibly scale flexible metrics vis-a-vis market-driven data.</p>',
                'author' => 'Admin',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Willow of Soaring',
                'category' => 'story',
                'image' => 'assets/img/blog/jr-post-default.png',
                'excerpt' => 'Credibly negotiate standardized metrics without premium collaboration.',
                'content' => '<p>Credibly negotiate standardized metrics without premium collaboration and idea-sharing. Completely pursue distinctive testing procedures for one-to-one channels.</p>',
                'author' => 'Admin',
                'is_published' => true,
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Healing in the Memory',
                'category' => 'creativity',
                'image' => 'assets/img/blog/jr-post-default.png',
                'excerpt' => 'Collaboratively pursue maintainable mindshare before sticky internal sources.',
                'content' => '<p>Collaboratively pursue maintainable mindshare before sticky internal or organic sources. Credibly scale flexible metrics vis-a-vis market-driven data.</p>',
                'author' => 'Admin',
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
