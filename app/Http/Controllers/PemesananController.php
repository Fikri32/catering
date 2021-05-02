<?php

namespace App\Http\Controllers;

use App\User;
use App\Departments;
use Auth;
use Carbon\Carbon;
use DB;
use App\Pemesanan;
use App\UserPesan;
use Illuminate\Http\Request;
Use Alert;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mytime = Carbon::now();
        $role = Auth::user()->id_department;
        $user = User::where('id_department','=',$role)->get();
        // dd($user);
        return view('request.form',compact('user','mytime'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawan = User::all();
        $depart = Auth::user()->departemen->id;
        $pesan = new Pemesanan();
        // $gatebar->id_gatepass = $request->get('barang');
        $pesan->jumlah = count($request->input('checked'));
        $pesan->id_departement = $depart;
        $pesan->shift = $request->shift;
        
        if($pesan->save())
        {
            if(!empty($request->input('checked'))){
               
                $id = $pesan->id;
                foreach($request->input('checked') as $key =>$karyawan)
                {
                    // dd($request->all())
                    $pesanuser = new UserPesan();
                    $pesanuser->id_pemesanan =  $id;
                    $pesanuser->id_user =  $request->checked[$key];
                   
                    $pesanuser->save();
                }
                // DB::table('user_pemesanan')->insert($insert);
            }
        }
   
       
        // dd($request->input('checked'));
        return redirect()->back();
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
