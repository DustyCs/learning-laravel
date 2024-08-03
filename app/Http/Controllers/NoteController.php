<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'index';
        // $notes = Note::query()->orderBy("created_at","desc")->get();
        $notes = Note::query()->orderBy("created_at","desc")->paginate(); // default at 15

        // dd($notes); // dump and die

        return view('note.index', ['notes'=> $notes]); // 2nd param passes data can also use compact functions
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return 'create';
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        // return 'show';
         return view('note.show', ['note'=> $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        // return 'edit';
         return view('note.edit', ['note'=> $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
