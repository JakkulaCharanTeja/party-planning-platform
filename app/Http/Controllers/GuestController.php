<?php
namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('guests.index', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'attending' => 'boolean',
        ]);

        Guest::create($validated);
        return redirect()->route('guests.index')->with('success', 'Guest added successfully!');
    }

    public function show(Guest $guest)
    {
        return view('guests.show', compact('guest'));
    }

    public function edit(Guest $guest)
    {
        return view('guests.edit', compact('guest'));
    }

    public function update(Request $request, Guest $guest)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'attending' => 'boolean',
        ]);

        $guest->update($validated);
        return redirect()->route('guests.index')->with('success', 'Guest updated successfully!');
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('guests.index')->with('success', 'Guest deleted successfully!');
    }
}
