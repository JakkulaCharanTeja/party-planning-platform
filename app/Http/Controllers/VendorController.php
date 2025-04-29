<?php
namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();  // Fetch all vendors
        return view('vendors.index', compact('vendors'));
    }

    public function create()
    {
        return view('vendors.create');
    }

    public function store(Request $request)
{
    // Validate the input data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'service_type' => 'required|string|max:255',
        'contact_info' => 'required|string|max:255',
        'price' => 'required|numeric',
    ]);

    // Create a new vendor and store it in the database
    Vendor::create($validatedData);

    // Redirect back to the vendor list with a success message
    return redirect()->route('vendors.index')->with('success', 'Vendor added successfully!');
}

}
