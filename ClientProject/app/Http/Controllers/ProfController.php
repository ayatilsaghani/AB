<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfController extends Controller
{
    public function index()
    {
        // Get all profs and pass them to the index view
        $profs = Prof::all();
        return view('create', compact('profs'));  // This line is correct for passing profs to the view
    }

    public function create()
    {
        // No need to pass profs here because you're just showing a form to create a new prof
        return view('create');  // Show the form for creating a new prof
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:profs,email',
            'password' => 'required|min:6',
        ]);

        Prof::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profs.index');
    }

    public function edit($id)
    {
        $prof = Prof::findOrFail($id);
        return view('edit', compact('prof'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:profs,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $prof = Prof::findOrFail($id);
        $prof->email = $request->email;

        if ($request->filled('password')) {
            $prof->password = Hash::make($request->password);
        }

        $prof->save();

        return redirect()->route('profs.index');
    }

    public function destroy($id)
    {
        $prof = Prof::findOrFail($id);
        $prof->delete();

        return redirect()->route('profs.index');
    }
}
