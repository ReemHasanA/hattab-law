<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        $practices = Practice::all(); // Fetch all practices

        return view('home.practice', compact('practices')); // Ensure the correct view path
    }

    public function create()
    {
        $practices = Practice::all(); // Fetch all practices

        return view('admin.practices.create', compact('practices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $data['photo'] = $imageName;
        }

        Practice::create($data);

        return redirect()->route('practices.create')->with('success', 'Practice added successfully!');
    }

    // Edit a Practice
    public function edit($id)
    {
        $practice = Practice::findOrFail($id);
        $practices = Practice::all();

        return view('admin.practices.create', compact('practice', 'practices'));
    }

    // Update a Practice
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $practice = Practice::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $data['photo'] = $imageName;
        }

        $practice->update($data);

        return redirect()->route('practices.create')->with('success', 'Practice updated successfully!');
    }

    // Delete a Practice
    public function destroy($id)
    {
        $practice = Practice::findOrFail($id);
        $practice->delete();

        return redirect()->route('practices.create')->with('success', 'Practice deleted successfully!');
    }

    public function show($id)
    {
        // Get all practices for the dropdown
        $practices = Practice::all();

        // Get the specific practice by ID
        $practice1 = Practice::findOrFail($id);

        return view('admin.practices.show', compact('practices', 'practice1'));
    }
}
