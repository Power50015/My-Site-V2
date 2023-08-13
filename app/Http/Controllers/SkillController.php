<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.skill',
            ["skills" => Skill::all()]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $ServiceImage = $filename;
        }
        Skill::create([
            'name' => $request->name,
            'image' => $ServiceImage,
        ]);
        return redirect()->route('dashboard.skill')->with('success', 'Skill added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view(
            'admin.skill',
            [
                "MySkill" => Skill::where('id', $id)->first(),
                "skills" => Skill::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $skill = Skill::where('id', $request->id)->first();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $skill->image = $filename;
        }
        $skill->name = $request->name;
        $skill->save();
        return redirect()->route('dashboard.skill')->with('success', 'Skill update!');;
    }
}
