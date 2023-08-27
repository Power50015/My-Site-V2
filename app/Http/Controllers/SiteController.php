<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Company;
use App\Models\Project;
use App\Models\Story;
use App\Models\Template;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function home()
    {
        $HomeJob = Template::where('name', 'HomeJob')->first();
        $HomeTitle = Template::where('name', 'HomeTitle')->first();
        $HomeImage = Template::where('name', 'HomeImage')->first();
        $HomeBackground = Template::where('name', 'HomeBackground')->first();
        $CV = Template::where('name', 'CV')->first();
        $Codewars = Template::where('name', 'Codewars')->first();
        $ServiceTitle1 = Template::where('name', 'ServiceItem' . 1 . 'Title')->first();
        $ServiceShortDescription1 = Template::where('name', 'ServiceItem' . 1 . 'ShortDescription')->first();
        $ServiceDescription1 = Template::where('name', 'ServiceItem' . 1 . 'Description')->first();
        $ServiceImage1 = Template::where('name', 'ServiceItem' . 1 . 'Image')->first();
        $ServiceBtn1 = Template::where('name', 'ServiceItem' . 1 . 'Btn')->first();
        $ServiceTitle2 = Template::where('name', 'ServiceItem' . 2 . 'Title')->first();
        $ServiceShortDescription2 = Template::where('name', 'ServiceItem' . 2 . 'ShortDescription')->first();
        $ServiceDescription2 = Template::where('name', 'ServiceItem' . 2 . 'Description')->first();
        $ServiceImage2 = Template::where('name', 'ServiceItem' . 2 . 'Image')->first();
        $ServiceBtn2 = Template::where('name', 'ServiceItem' . 2 . 'Btn')->first();
        $ServiceTitle3 = Template::where('name', 'ServiceItem' . 3 . 'Title')->first();
        $ServiceShortDescription3 = Template::where('name', 'ServiceItem' . 3 . 'ShortDescription')->first();
        $ServiceDescription3 = Template::where('name', 'ServiceItem' . 3 . 'Description')->first();
        $ServiceImage3 = Template::where('name', 'ServiceItem' . 3 . 'Image')->first();
        $ServiceBtn3 = Template::where('name', 'ServiceItem' . 3 . 'Btn')->first();
        $PortfolioTitle = Template::where('name', 'PortfolioTitle')->first();
        $PortfolioDescription = Template::where('name', 'PortfolioDescription')->first();
        $PortfolioSubTitle = Template::where('name', 'PortfolioSubTitle')->first();
        $StatisticItem1Title = Template::where('name', 'StatisticItem1Title')->first();
        $StatisticItem1Number = Template::where('name', 'StatisticItem1Number')->first();
        $StatisticItem2Title = Template::where('name', 'StatisticItem2Title')->first();
        $StatisticItem2Number = Template::where('name', 'StatisticItem2Number')->first();
        $StatisticItem3Title = Template::where('name', 'StatisticItem3Title')->first();
        $StatisticItem3Number = Template::where('name', 'StatisticItem3Number')->first();
        $StatisticItem4Title = Template::where('name', 'StatisticItem4Title')->first();
        $StatisticItem4Number = Template::where('name', 'StatisticItem4Number')->first();
        $TestimonialTitle = Template::where('name', 'TestimonialTitle')->first();
        $TestimonialSubTitle = Template::where('name', 'TestimonialSubTitle')->first();
        $CompanyTitle = Template::where('name', 'CompanyTitle')->first();
        $CompanyText = Template::where('name', 'CompanyText')->first();
        $SpinnerLogo = Template::where('name', 'SpinnerLogo')->first();
        $AwardTitle = Template::where('name', 'AwardTitle')->first();
        $AwardSubTitle = Template::where('name', 'AwardSubTitle')->first();
        $ContactTitle = Template::where('name', 'ContactTitle')->first();
        $ContactSubTitle = Template::where('name', 'ContactTitle')->first();
        $ContactVideo = Template::where('name', 'ContactVideo')->first();
        $ContactAddress = Template::where('name', 'ContactAddress')->first();
        $ContactText = Template::where('name', 'ContactText')->first();
        $ContactBackground = Template::where('name', 'ContactBackground')->first();
        $FooterText = Template::where('name', 'FooterText')->first();

        return view(
            'site.home',
            [
                "FooterText" => $FooterText["value"],
                "HomeJob" => $HomeJob["value"],
                "HomeTitle" => $HomeTitle["value"],
                "HomeImage" => $HomeImage["value"],
                "HomeBackground" => $HomeBackground["value"],
                "CV" => $CV["value"],
                "Codewars" => $Codewars["value"],
                "ServiceTitle1" => $ServiceTitle1["value"],
                "ServiceShortDescription1" => $ServiceShortDescription1["value"],
                "ServiceDescription1" => $ServiceDescription1["value"],
                "ServiceImage1" => $ServiceImage1["value"],
                "ServiceBtn1" => $ServiceBtn1["value"],
                "ServiceTitle2" => $ServiceTitle2["value"],
                "ServiceShortDescription2" => $ServiceShortDescription2["value"],
                "ServiceDescription2" => $ServiceDescription2["value"],
                "ServiceImage2" => $ServiceImage2["value"],
                "ServiceBtn2" => $ServiceBtn2["value"],
                "ServiceTitle3" => $ServiceTitle3["value"],
                "ServiceShortDescription3" => $ServiceShortDescription3["value"],
                "ServiceDescription3" => $ServiceDescription3["value"],
                "ServiceImage3" => $ServiceImage3["value"],
                "ServiceBtn3" => $ServiceBtn3["value"],
                "PortfolioTitle" => $PortfolioTitle["value"],
                "PortfolioDescription" => $PortfolioDescription["value"],
                "PortfolioSubTitle" => $PortfolioSubTitle["value"],
                "Projects" => Project::orderBy('date', 'desc')->get(),
                "StatisticItem1Title" => $StatisticItem1Title["value"],
                "StatisticItem1Number" => $StatisticItem1Number["value"],
                "StatisticItem2Title" => $StatisticItem2Title["value"],
                "StatisticItem2Number" => $StatisticItem2Number["value"],
                "StatisticItem3Title" => $StatisticItem3Title["value"],
                "StatisticItem3Number" => $StatisticItem3Number["value"],
                "StatisticItem4Title" => $StatisticItem4Title["value"],
                "StatisticItem4Number" => $StatisticItem4Number["value"],
                "TestimonialTitle" => $TestimonialTitle["value"],
                "TestimonialSubTitle" => $TestimonialSubTitle["value"],
                "Testimonials" => Testimonial::all(),
                "CompanyTitle" => $CompanyTitle["value"],
                "CompanyText" => $CompanyText["value"],
                "SpinnerLogo" => $SpinnerLogo["value"],
                "Companies" => Company::all(),
                "Stories" => Story::all(),
                "AwardTitle" => $AwardTitle["value"],
                "AwardSubTitle" => $AwardSubTitle["value"],
                "Awards" => Award::orderBy('date', 'desc')->get(),
                "ContactSubTitle" => $ContactSubTitle["value"],
                "ContactTitle" => $ContactTitle["value"],
                "ContactAddress" => $ContactAddress["value"],
                "ContactText" => $ContactText["value"],
                "ContactVideo" => $ContactVideo["value"],
                "ContactBackground" => $ContactBackground["value"],
            ]
        );
    }
    public function projects()
    {
        $HomeBackground = Template::where('name', 'HomeBackground')->first();

        return view(
            'site.projects',
            [
                "HomeBackground" => $HomeBackground["value"],
                "Projects" => Project::all(),
            ]
        );
    }
}
