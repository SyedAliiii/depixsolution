<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $teams = Team::orderBy('order')->get();
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $data = $request->all();
        $data['image'] = $this->uploadFile($request, 'image', 'teams');
        // Handle social links if needed (simplified for now)

        Team::create($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member added successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $this->deleteFile($team->image);
            $data['image'] = $this->uploadFile($request, 'image', 'teams');
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $this->deleteFile($team->image);
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully.');
    }
}
