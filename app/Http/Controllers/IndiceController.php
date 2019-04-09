<?php

namespace App\Http\Controllers;

use App\Indices;
use Illuminate\Http\Request;

class IndiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indices = Indices::all();
        foreach ($indices as $indice) {
            echo  $indice->xyz . '<br>';
        }
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
        $indice = new Indices([
            'rang_x' => $request->get('rang_x'),
            'col_yz'=> $request->get('col_yz'),
            'obj_text'=> $request->get('obj_text'),

            $rang_x=$request->get('rang_x'),
            $col_yz=$request->get('col_yz'),

            'xyz'=>($rang_x.'-'.$col_yz)

        ]);
        $indice->save();
        function sucess(){
            echo "Camarche";
        }
        return sucess();

        function exists(){
            echo"Caexisteeja";
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
        //
    }
}
