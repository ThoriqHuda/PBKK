<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric',
           'kota' => 'required|min:2|max:20',
           'gaji' => 'required|numeric|min:2.50|max:99.99',
           'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        $request->image_name = $imageName;
        $request->msg = 'success';
 		
        return view('proses',['data' => $request]);
    }
}