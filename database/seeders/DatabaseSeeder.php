<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* Home Page Data */
        \App\Models\Template::factory()->create([
            'name' => 'HomeImage',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'HomeBackground',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'HomeJob',
            'value' => 'creative designer',
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'HomeTitle',
            'value' => "Hello, My Name's Miro Jakson",
        ]);

        /* Services Page Data */

        // Item 1
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem1Title',
            'value' => "Product Design",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem1ShortDescription',
            'value' => "I research & create breakthrough delightful ideas leading.",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem1Description',
            'value' => "I research & create breakthrough delightful ideas leading.",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem1Image',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem1Btn',
            'value' => "Read More",
        ]);

        // // Item 2
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem2Title',
            'value' => "Website Design",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem2ShortDescription',
            'value' => "I research & create breakthrough delightful ideas leading.",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem2Description',
            'value' => "I research & create breakthrough delightful ideas leading.",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem2Image',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem2Btn',
            'value' => "Read More",
        ]);

        // // Item 3
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem3Title',
            'value' => "Game Development",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem3ShortDescription',
            'value' => "I research & create breakthrough delightful ideas leading.",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem3Description',
            'value' => "I research & create breakthrough delightful ideas leading.",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem3Image',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ServiceItem3Btn',
            'value' => "Read More",
        ]);


        /** Portfolio Section */

        \App\Models\Template::factory()->create([
            'name' => 'PortfolioTitle',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'PortfolioDescription',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'PortfolioSubTitle',
            'value' => null,
        ]);



        /* Statistics Section Data  */
        // Item 1
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem1Title',
            'value' => "Active Projects",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem1Number',
            'value' => "120",
        ]);
        // Item 2
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem2Title',
            'value' => "Project Already Done",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem2Number',
            'value' => "5 K",
        ]);
        // Item 3
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem3Title',
            'value' => "Multi-Platform Followers",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem3Number',
            'value' => "1 M",
        ]);
        // Item 4
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem4Title',
            'value' => "Country Touched",
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'StatisticItem4Number',
            'value' => "100",
        ]);


        /** Testimonial Section */
        \App\Models\Template::factory()->create([
            'name' => 'TestimonialTitle',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'TestimonialSubTitle',
            'value' => null,
        ]);


        /** Company Section */
        \App\Models\Template::factory()->create([
            'name' => 'CompanyTitle',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'CompanyText',
            'value' => null,
        ]);


        /** Award Section */
        \App\Models\Template::factory()->create([
            'name' => 'AwardTitle',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'AwardSubTitle',
            'value' => null,
        ]);

        /** Contact Section */
        \App\Models\Template::factory()->create([
            'name' => 'ContactTitle',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ContactVideo',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ContactText',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ContactAddress',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'ContactBackground',
            'value' => null,
        ]);

        /** Template Section */
        \App\Models\Template::factory()->create([
            'name' => 'LogoImage',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'SpinnerLogo',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'FooterText',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'CV',
            'value' => null,
        ]);

        /** Contact Links */
        \App\Models\Template::factory()->create([
            'name' => 'LinkedIn',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'GitHub',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'Bitbucket',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'CodePen',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'Blog',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'YouTube',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'WhatsApp',
            'value' => null,
        ]);
        \App\Models\Template::factory()->create([
            'name' => 'Telegram',
            'value' => null,
        ]);
    }
}
