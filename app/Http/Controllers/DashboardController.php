<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Template;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Messages = Contact::count();
        $Projects = Project::count();
        $Awards = Award::count();
        $Skills = Skill::count();

        $LogoImage = Template::where('name', 'LogoImage')->first();
        $LogoImage = $LogoImage["value"];

        $SpinnerLogo = Template::where('name', 'SpinnerLogo')->first();
        $SpinnerLogo = $SpinnerLogo["value"];

        $CV = Template::where('name', 'CV')->first();
        $CV = $CV["value"];

        $FooterText = Template::where('name', 'FooterText')->first();
        $FooterText = $FooterText["value"];

        $LinkedIn = Template::where('name', 'LinkedIn')->first();
        $LinkedIn = $LinkedIn["value"];

        $GitHub = Template::where('name', 'GitHub')->first();
        $GitHub = $GitHub["value"];

        $Bitbucket = Template::where('name', 'Bitbucket')->first();
        $Bitbucket = $Bitbucket["value"];

        $CodePen = Template::where('name', 'CodePen')->first();
        $CodePen = $CodePen["value"];

        $Blog = Template::where('name', 'Blog')->first();
        $Blog = $Blog["value"];

        $YouTube = Template::where('name', 'YouTube')->first();
        $YouTube = $YouTube["value"];

        $WhatsApp = Template::where('name', 'WhatsApp')->first();
        $WhatsApp = $WhatsApp["value"];

        $Telegram = Template::where('name', 'Telegram')->first();
        $Telegram = $Telegram["value"];

        return view(
            'dashboard',
            compact(
                [
                    'Messages',
                    'Projects',
                    'Awards',
                    'Skills',
                    'LogoImage',
                    'SpinnerLogo',
                    'CV',
                    'FooterText',
                    'LinkedIn',
                    'GitHub',
                    'Bitbucket',
                    'CodePen',
                    'Blog',
                    'YouTube',
                    'WhatsApp',
                    'Telegram',
                ]
            )
        );
    }
    public function update(Request $request)
    {
        if (!empty($request->RemoveLogoImage)) {
            $LogoImage = Template::where('name', 'LogoImage')->first();
            $LogoImage['value'] = null;
            $LogoImage->save();
        } else if ($request->file('LogoImage')) {
            $LogoImage = Template::where('name', 'LogoImage')->first();
            $file = $request->file('LogoImage');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $LogoImage['value'] = $filename;
            $LogoImage->save();
        }

        if (!empty($request->RemoveSpinnerLogo)) {
            $SpinnerLogo = Template::where('name', 'SpinnerLogo')->first();
            $SpinnerLogo['value'] = null;
            $SpinnerLogo->save();
        } else if ($request->file('SpinnerLogo')) {
            $SpinnerLogo = Template::where('name', 'SpinnerLogo')->first();
            $file = $request->file('SpinnerLogo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $SpinnerLogo['value'] = $filename;
            $SpinnerLogo->save();
        }

        if (!empty($request->RemoveCV)) {
            $CV = Template::where('name', 'CV')->first();
            $CV['value'] = null;
            $CV->save();
        } else if ($request->file('CV')) {
            $CV = Template::where('name', 'CV')->first();
            $file = $request->file('CV');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $CV['value'] = $filename;
            $CV->save();
        }

        if (!empty($request->FooterText)) {
            $FooterText = Template::where('name', 'FooterText')->first();
            $FooterText['value'] = $request->FooterText;
            $FooterText->save();
        } else {
            $FooterText = Template::where('name', 'FooterText')->first();
            $FooterText['value'] = null;
            $FooterText->save();
        }

        return redirect()->route('dashboard')->with('success', 'Site updated!');;
    }

    public function linksUpdate(Request $request)
    {

        if (!empty($request->LinkedIn)) {
            $LinkedIn = Template::where('name', 'LinkedIn')->first();
            $LinkedIn['value'] = $request->LinkedIn;
            $LinkedIn->save();
        } else {
            $LinkedIn = Template::where('name', 'LinkedIn')->first();
            $LinkedIn['value'] = null;
            $LinkedIn->save();
        }

        if (!empty($request->GitHub)) {
            $GitHub = Template::where('name', 'GitHub')->first();
            $GitHub['value'] = $request->GitHub;
            $GitHub->save();
        } else {
            $GitHub = Template::where('name', 'GitHub')->first();
            $GitHub['value'] = null;
            $GitHub->save();
        }

        if (!empty($request->Bitbucket)) {
            $Bitbucket = Template::where('name', 'Bitbucket')->first();
            $Bitbucket['value'] = $request->Bitbucket;
            $Bitbucket->save();
        } else {
            $Bitbucket = Template::where('name', 'Bitbucket')->first();
            $Bitbucket['value'] = null;
            $Bitbucket->save();
        }

        if (!empty($request->CodePen)) {
            $CodePen = Template::where('name', 'CodePen')->first();
            $CodePen['value'] = $request->CodePen;
            $CodePen->save();
        } else {
            $CodePen = Template::where('name', 'CodePen')->first();
            $CodePen['value'] = null;
            $CodePen->save();
        }

        if (!empty($request->Blog)) {
            $Blog = Template::where('name', 'Blog')->first();
            $Blog['value'] = $request->Blog;
            $Blog->save();
        } else {
            $Blog = Template::where('name', 'Blog')->first();
            $Blog['value'] = null;
            $Blog->save();
        }

        if (!empty($request->YouTube)) {
            $YouTube = Template::where('name', 'YouTube')->first();
            $YouTube['value'] = $request->YouTube;
            $YouTube->save();
        } else {
            $YouTube = Template::where('name', 'YouTube')->first();
            $YouTube['value'] = null;
            $YouTube->save();
        }

        if (!empty($request->WhatsApp)) {
            $WhatsApp = Template::where('name', 'WhatsApp')->first();
            $WhatsApp['value'] = $request->WhatsApp;
            $WhatsApp->save();
        } else {
            $WhatsApp = Template::where('name', 'WhatsApp')->first();
            $WhatsApp['value'] = null;
            $WhatsApp->save();
        }

        if (!empty($request->Telegram)) {
            $Telegram = Template::where('name', 'Telegram')->first();
            $Telegram['value'] = $request->Telegram;
            $Telegram->save();
        } else {
            $Telegram = Template::where('name', 'Telegram')->first();
            $Telegram['value'] = null;
            $Telegram->save();
        }

        return redirect()->route('dashboard')->with('success', 'Links updated!');;
    }
}
