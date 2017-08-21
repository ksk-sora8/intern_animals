<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();

        return view('animals.index', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Animal::create([
            'name' => $request->input('name'),
            'group' => $request->input('group'),
        ]);

        return redirect('/animals');
    }

    /**
     * Display the specified resource.
     *
     * @param string $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $animal = Animal::where('name', $name)->firstOrFail();

        return view('animals.show', ['animal' => $animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $name
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $animal = Animal::where('name', $name)->firstOrFail();

        return view('animals.edit', ['animal' => $animal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        $animal = Animal::where('name', $name)->firstOrFail();

        $animal->update([
            'name' => $request->input('name'),
            'group' => $request->input('group'),
        ]);

        return redirect('/animals/'.$animal->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $name
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        $animal = Animal::where('name', $name)->firstOrFail();
        $animal->delete();

        return redirect('/animals');
    }
}
