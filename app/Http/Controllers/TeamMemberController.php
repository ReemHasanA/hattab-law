<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    // Display Team Members
    public function index()
    {
        $practices = Practice::all();
        $teamMembers = TeamMember::all();

        return view('home.team', compact('practices', 'teamMembers'));
    }

    // Show Create Form
    public function create()
    {
        // Fetch all team members from the database
        $teamMembers = TeamMember::all();

        // Pass the data to the view
        return view('admin.team.create', compact('teamMembers'));
    }

    // Store New Team Member
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'nullable|string|max:255',
            'position_en' => 'required|string|max:255',
            'position_ar' => 'nullable|string|max:255',
            'bio_en' => 'nullable|string',
            'bio_ar' => 'nullable|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only([
            'name_en',
            'name_ar',
            'position_en',
            'position_ar',
            'bio_en',
            'bio_ar',
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images/team'), $imageName);
            $data['photo'] = $imageName;
        }

        TeamMember::create($data);

        return redirect()->route('team.create')->with('success', 'Team Member added successfully!');
    }

    // Edit Team Member
    public function edit($id)
    {
        $member = TeamMember::findOrFail($id);

        return view('admin.team.edit', compact('member'));
    }

    // Update Team Member
    public function update(Request $request, $id)
    {
        $member = TeamMember::findOrFail($id);

        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'nullable|string|max:255',
            'position_en' => 'required|string|max:255',
            'position_ar' => 'nullable|string|max:255',
            'bio_en' => 'nullable|string',
            'bio_ar' => 'nullable|string',
            'photo' => 'image|mimes:jpeg,png,jpg',
        ]);

        $data = $request->only([
            'name_en',
            'name_ar',
            'position_en',
            'position_ar',
            'bio_en',
            'bio_ar',
        ]);

        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($member->photo && file_exists(public_path('images/team/'.$member->photo))) {
                unlink(public_path('images/team/'.$member->photo));
            }

            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images/team'), $imageName);
            $data['photo'] = $imageName;
        }

        $member->update($data);

        return redirect()->route('team.create')->with('success', 'Team Member updated successfully!');
    }

    // Delete Team Member
    public function destroy($id)
    {
        $member = TeamMember::findOrFail($id);

        // Delete the photo if it exists
        if ($member->photo && file_exists(public_path('images/team/'.$member->photo))) {
            unlink(public_path('images/team/'.$member->photo));
        }

        $member->delete();

        return redirect()->route('team.create')->with('success', 'Team Member deleted successfully!');
    }
}
