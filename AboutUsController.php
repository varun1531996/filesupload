<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use Imageupload;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = AboutModel::all();
        return view('adminlte::adminweb.about.index')->with('data', $data);
    }

    public function create(){
        return view('adminlte::adminweb.about.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $aboutUs = new AboutModel();
        $aboutUs->name = $request->title;
        $aboutUs->description = $request->description;
        $aboutUs->is_active = $request->status;
        if ($request->hasFile('image')) {
            $unique = uniqid();
            $fileext = $request->file('image')->getClientOriginalExtension();
            $imageName2 = $unique . '.' .$fileext;
            $request->file('image')->move(config('constants.about'), $imageName2);
            $aboutUs->img_url = $imageName2;
        }
        $aboutUs->save();
     
        return redirect()->route('admin-about')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);

    }

    public function destroy($id){

        $category = AboutModel::find($id);
        $category->delete();

        return redirect()->route('admin-about')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);
    }

    public function edit($id){
        
        $aboutUs = AboutModel::find($id);
        return view('adminlte::adminweb.about.edit')->with(array('aboutUs' =>$aboutUs));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);

       
        $var = '1';
        if($request->status == 'Disable'){
            $var = '0';
        }
      
        $aboutUs = AboutModel::find($id);
        $aboutUs->name = $request->title;
        $aboutUs->description = $request->description;
        $aboutUs->is_active =  $var;
        if ($request->hasFile('image')) {
            $unique = uniqid();
            $fileext = $request->file('image')->getClientOriginalExtension();
            $imageName2 = $unique . '.' .$fileext;
            $request->file('image')->move(config('constants.about'), $imageName2);
            $aboutUs->img_url = $imageName2;
        }
        $aboutUs->save();
        return redirect()->route('admin-about')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);
    }

}
