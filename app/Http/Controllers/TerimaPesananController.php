<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserPesan;
use App\Pemesanan;
use App\User;
use App\Departments;
use DB;

class TerimaPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = Departments::all();

        $dept = Departments::pluck('id');

        $personil = DB::table('users')
        ->select('id_department',DB::raw('count(*) as total'))
        ->groupBy('id_department')
        ->pluck('total')->all();

        $list = User::where('id_department','=',$dept)->get();

        $pemesanan = Pemesanan::all();

        $data = [
            'dep' =>  $dep,
            'personil' => $personil
        ];
        
        return view('get_request.index',compact('dept','personil','dep','data','pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
