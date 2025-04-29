<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        $timelines = Timeline::all();
        return view('timelines.index', compact('timelines'));
    }

    public function create()
    {
        return view('timelines.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Timeline::create($validated);

        return redirect()->route('timelines.index')->with('success', 'Timeline item added!');
    }

    public function edit(Timeline $timeline)
    {
        return view('timelines.edit', compact('timeline'));
    }

    public function update(Request $request, Timeline $timeline)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $timeline->update($validated);

        return redirect()->route('timelines.index')->with('success', 'Timeline updated!');
    }

    public function destroy(Timeline $timeline)
    {
        $timeline->delete();

        return redirect()->route('timelines.index')->with('success', 'Timeline deleted!');
    }
}
