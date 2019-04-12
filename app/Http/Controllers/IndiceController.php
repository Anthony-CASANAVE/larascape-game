<?php

namespace App\Http\Controllers;

use App\Indices;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class IndiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recuperation de tout les indices existant en BDD
        $indices = Indices::all();
        return $indices;
    }


    //Return indice table in json format for the scene builder js.
    public function indices()
    {
        $indices=Indices::all();
        return view('amphi')->with('indices',$indices);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mise en cache des information de remplissage de la table
        $indice = new Indices([
            'rang_x' => $request->get('rang_x'),
            'col_yz'=> $request->get('col_yz'),
            'obj_text'=> $request->get('obj_text'),

            $rang_x=$request->get('rang_x'),
            $col_yz=$request->get('col_yz'),
            

        ]);
            // Verification de l'existance de l'indice
        if ((Indices::where('rang_x',Input::get('rang_x'))->exists()) && (Indices::where('col_yz',Input::get('col_yz'))->exists())) {
            $request->session()->flash('alert-danger', 'Ces coordonées sont déjà utilisées !');
            return redirect()->route('home');

        }
        else {
            // Ajout de l'indice en BDD
            $indice->save();
            $request->session()->flash('alert-success', 'Indice ajouté avec succès');
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
//        Recherche de l'id de l'indice
        $indice = Indices::find($id);
        // Suppression de l'indice
        $indice->delete();

        return redirect()->back();
    }
}
