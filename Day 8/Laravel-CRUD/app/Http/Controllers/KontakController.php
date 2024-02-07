<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class KontakController extends Controller
{
    public function index()
    {
    	$kontak = DB::table('kontak')->get();
 
    	return view('home',['kontak' => $kontak]);
 
    }

    public function input()
    {
    
        return view('input');
    
    }

    public function save(Request $request)
    {
        DB::table('kontak')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telpon' => $request->nomor_telpon,
        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('kontak')->where('id',$id)->delete();
            
        return redirect('/');
    }

    public function edit($id)
    {
	$kontak = DB::table('kontak')->where('id',$id)->get();
	
    return view('edit',['kontak' => $kontak]);
 
    }

    public function update(Request $request)
    {
	DB::table('kontak')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'email' => $request->email,
		'nomor_telpon' => $request->nomor_telpon,
	]);
	return redirect('/');
    }


}