<?php

namespace App\View\Components;

use App\Models\Template;
use Illuminate\View\Component;
use Illuminate\View\View;

class SiteLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $LinkedIn = Template::where('name', 'LinkedIn')->first();
        $GitHub = Template::where('name', 'GitHub')->first();
        $Bitbucket = Template::where('name', 'Bitbucket')->first();
        $CodePen = Template::where('name', 'CodePen')->first();
        $Blog = Template::where('name', 'Blog')->first();
        $YouTube = Template::where('name', 'YouTube')->first();
        $WhatsApp = Template::where('name', 'WhatsApp')->first();
        $Telegram = Template::where('name', 'Telegram')->first();
        $LogoImage = Template::where('name', 'LogoImage')->first();
        $LogoImage = $LogoImage["value"];
        $FooterText = Template::where('name', 'FooterText')->first();
        $FooterText = $FooterText["value"];
        
        return view('layouts.site', [
            "LogoImage" => $LogoImage,
            "FooterText" => $FooterText,
            "LinkedIn" => $LinkedIn["value"],
            "GitHub" => $GitHub["value"],
            "Bitbucket" => $Bitbucket["value"],
            "CodePen" => $CodePen["value"],
            "Blog" => $Blog["value"],
            "YouTube" => $YouTube["value"],
            "WhatsApp" => $WhatsApp["value"],
            "Telegram" => $Telegram["value"],
    ]);
    }
}
