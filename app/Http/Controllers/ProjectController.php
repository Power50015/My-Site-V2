<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\ProjectSkill;
use App\Models\Skill;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.project',
            ["projects" => Project::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projectForm', [
            "skills" => Skill::all(),
            "projectSkills" => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $image = $filename;
        }

        $project = Project::create([
            "name" => $request->title,
            "sub_title" => $request->sub_title,
            "description" => $request->Description,
            "small_description" => $request->ShortDescription,
            "date" => $request->date,
            "image" => $image,
            "link" => $request->link,
            "codeLink" => $request->codeLink
        ]);

        foreach ($request->skills as $key => $value) {
            ProjectSkill::create([
                "project_id" => $project->id,
                "skill_id" => $value
            ]);
        }

        return redirect()->route('project.index')->with('success', 'Project added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($project)
    {
        $projectSkills = ProjectSkill::where('project_id', $project)->pluck('skill_id')->toArray();
        return view(
            'site.project',
            [
                "project" =>  Project::find($project),
                "skills" => Skill::whereIn('id', $projectSkills)->get(),
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view(
            'admin.projectForm',
            [
                "skills" => Skill::all(),
                "project" => $project,
                "projectSkills" => ProjectSkill::where('project_id', $project->id)->pluck('skill_id')->toArray()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $project["image"] = $filename;
        }
        $project["sub_title"] = $request->sub_title;
        $project["name"] = $request->title;
        $project["description"] = $request->Description;
        $project["small_description"] = $request->ShortDescription;
        $project["date"] = $request->date;
        $project["link"] = $request->link;
        $project["codeLink"] = $request->codeLink;
        
        ProjectSkill::where('project_id', $project->id)->delete();
        if ($request->skills)
            foreach ($request->skills as $key => $value) {
                ProjectSkill::create([
                    "project_id" => $project->id,
                    "skill_id" => $value
                ]);
            }
        $project->save();
        return redirect()->route('project.index')->with('success', 'Project edied!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($project)
    {
        if (Project::where('id', $project)->get()) {
            Project::destroy($project);
            ProjectSkill::where('project_id', $project)->delete();
            return redirect()->route('project.index')->with('success', 'Project Deleted!');
        } else {
            return redirect()->route('project.index');
        }
    }
}
