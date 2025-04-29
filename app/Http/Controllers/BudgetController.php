<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index()
    {
        $budgets = Budget::all();
        return view('budgets.index', compact('budgets'));
    }

    public function create()
    {
        return view('budgets.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        Budget::create($validatedData);

        return redirect()->route('budgets.index')->with('success', 'Budget added successfully!');
    }

    public function show(Budget $budget)
    {
        return view('budgets.show', compact('budget'));
    }

    public function edit(Budget $budget)
    {
        return view('budgets.edit', compact('budget'));
    }

    public function update(Request $request, Budget $budget)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        $budget->update($validatedData);

        return redirect()->route('budgets.index')->with('success', 'Budget updated successfully!');
    }

    public function destroy(Budget $budget)
    {
        $budget->delete();

        return redirect()->route('budgets.index')->with('success', 'Budget deleted successfully!');
    }
}

