<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('Contact.index', ['title' => 'MyProfile-Zamzam-Contact-Admin'], compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Contact.create', ['title' => 'MyProfile-Zamzam-Contact']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:2',
            'email' => 'required|min:10',
            'pesan' => 'required|min:5'
        ]);

        Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);

        return redirect()->route('Contact.create')->with(['success' => 'Pesan Berhasil Di Kirim']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('Contact.index')->with(['success' => 'Data Berhasil Di Hapus']);
    }
}