<?php

namespace App\Http\Controllers;

use App\Champions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChampionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = Champions::latest()->paginate(12);

        return view('champions.index', compact('champions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->orderBy('role', 'ASC')->get();
        return view('champions.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'roles' => 'required',
        ]);

        Champions::create($request->all());

        return redirect()->route('champions.index')
            ->with('success', 'Champion added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $champions
     * @return \Illuminate\Http\Response
     */
    public function show(Champions $champion)
    {
        return view('champions.show', compact('champion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champions  $champions
     * @return \Illuminate\Http\Response
     */
    public function edit(Champions $champion)
    {
        $roles = DB::table('roles')->orderBy('role', 'ASC')->get();
        return view('champions.edit', compact('champion', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $champion_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $champion_id)
    {
        $request->validate([
            'name' => 'required',
            'roles' => 'required',
        ]);

        $champion = Champions::findorfail($champion_id);

        foreach ($request->roles as $role){
            
        }

        $champion->update($request->except('_method', '_token'));
        return redirect()->route('champions.index')
            ->with('success', 'Champion info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $champion_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($champion_id)
    {
        $champion = Champions::findorfail($champion_id);
        $champion->delete();

        return redirect()->route('champions.index')
            ->with('success', 'Champion deleted successfully');
    }
}
