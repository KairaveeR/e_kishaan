<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kishaan;
use App\Models\crop;
use Illuminate\Support\Facades\Redirect;
use League\Csv\Statement;
use League\Csv\Reader;
class main_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $kishaan = new kishaan();
            $kishaan->name=  $request->name;
            $kishaan->email=$request->email;
            $kishaan->Contact= $request->phone;
            $kishaan->password= $request->password;
            $kishaan->farmer_card= $request->farmercard;
            $kishaan->address= $request->address;
            $kishaan->district= $request->district;
            $kishaan->state= $request->state;
            $kishaan->save();
            return redirect()-> route('all.homepage');

    }
    public function select_city(){
        return view('weather');
    }
    public function display_crop(){
        $crop=crop::orderBy('id','DESC')->get();
         return view('display_crop',['crop'=>$crop]);
    }
    public function displayscheme(){
        return view('scheme');
    }
    
    public function showchart(){
        $data=crop::all();
        return view('chart',['crop'=>$data]);
    }
    public function homepage(){
        return view('home');
    }
    public function logincheck(Request $request){
        $kishaan_email = kishaan::where('email','=',$request->email)->get();
            if(sizeof($kishaan_email) != null || sizeof($kishaan_email) != 0){
                        foreach($kishaan_email as $cdata){
                            if(($cdata->email==$request->email) && ($cdata->password==$request->password)){
                               // dd("Company Login");
                               $request->session()->put('kishaan_id',$cdata->id);
                                return redirect()->route('all.homepage');
                            }
                            else if(($cdata->password!=$request->password)){
                                return Redirect::back()->withErrors(['msg'=>__("message.wrongpass")]);
                            }
                        }
                    } 
                    else{
                        return Redirect::back()->withErrors(['msg'=> __("message.emailnotfound")]);
                    }
    }

    /**
     * Display the specified resource.
     */
    public function showlogin()
    {
        return view('login');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function showsignup(){
        return view('signup');
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
        //
    }
}
