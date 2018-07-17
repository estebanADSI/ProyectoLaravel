<?php

namespace App\Http\Controllers;


use  App\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers'));
        //return 'Hola soy el TrainerControlador';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
        
        //cre aun usuario en la base de datos
        
       if($request->hasFile('avatar')){
           $file = $request->file('avatar');
           $name = time().$file->getClientOriginalName();
           $file->move(public_path().'/images/', $name);
       }
        
        $trainer = new Trainer();
        $trainer->name = $request->input('nombre');
        $trainer->avatar = $name;
        $trainer->description = $request->input('description');
        $trainer->save();
        
        return '<h1>Saved</h1>';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        
        
        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        
        
        
        
        //$trainer = Trainer::find($id);
       
        return view('trainers.show', compact('trainer'));
        //return 'hola'.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
       //return $request;
        
        
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
           $file = $request->file('avatar');
           $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
           $file->move(public_path().'/images/', $name);
       }
        $trainer->save();
        
        return '<h1>Actualizado</h1>' ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
