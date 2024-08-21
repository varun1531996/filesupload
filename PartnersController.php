<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PartnersModel;
use Imageupload;

class PartnersController extends Controller
{


	public function index()
    {
        $partners = PartnersModel::get();
        return view('adminlte::adminweb.partners.index')->with('partners', $partners);	
    }

	public function create(){
        return view('adminlte::adminweb.partners.create');	
	}

	public function store(Request $request){
		$this->validate($request, [
            'category' => 'required',
            'status' => 'required',
            'partner_logo' => 'required|image'
        ]);
		$aboutUs = new PartnersModel();
        $aboutUs->category = $request->category;
        $aboutUs->status = $request->status;
        if ($request->hasFile('partner_logo')) {
            $unique = uniqid();
            $fileext = $request->file('partner_logo')->getClientOriginalExtension();
            $imageName2 = $unique . '.' .$fileext;
            $request->file('partner_logo')->move(config('constants.partners'), $imageName2);
            $aboutUs->logo = $imageName2;
        }
        $aboutUs->save();
     
        return redirect()->route('admin-partners')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);
	}

	public function edit($id){
		$partners = PartnersModel::find($id);
        return view('adminlte::adminweb.partners.edit')->with('partners', $partners);	
	}

	public function updatePartners(Request $request, $id){
		$this->validate($request, [
            'category' => 'required',
            'status' => 'required',
            'partner_logo' => 'nullable|image'
        ]);
		$aboutUs = PartnersModel::find($id);
        $aboutUs->category = $request->category;
        $aboutUs->status = $request->status;
        if ($request->hasFile('partner_logo')) {
            $unique = uniqid();
            $fileext = $request->file('partner_logo')->getClientOriginalExtension();
            $imageName2 = $unique . '.' .$fileext;
            $request->file('partner_logo')->move(config('constants.partners'), $imageName2);
            $aboutUs->logo = $imageName2;
        }
        $aboutUs->save();
		return redirect()->route('admin-partners')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);
	}

	public function destroy($id){

		$category = PartnersModel::find($id);
        $category->delete();
        return redirect()->route('admin-partners')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);

	}




   private function max_position_of_partners()
    {
        $max_position = PartnersModel::max('position');
        $max_position = (int)$max_position + 1;
        return $max_position;
    }
	
  
	
	public function update(Request $request)
    {
        if ($request->hasFile('logo')) {
			$images = $request->file('logo');
			
			foreach($images as $image){
			$data = new PartnersModel();
			$img = Imageupload::upload($image);
            $data->logo = $img['filename'];
			$data->position = $this->max_position_of_partners();			
			$data->status = \App\Models\PartnersModel::PARTNER_ENABLE;					
			$data->save();
			}
			
            return redirect()->route('admin-partners')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);
        }	
	}

		public function image_delete($id)
    {
		PartnersModel::destroy($id);
        
    }
	
	public function image_position(Request $request, $id)
    {
        $data = PartnersModel::findOrFail($id);
		$data->position = $request->img_position;
		if($data->save()){
		echo "Update Successfull.";	
		}
		else{
		echo "Opps. Something went wrong.";	
		}
		
    }
	
	public function image_status(Request $request,$id)
    {
       $data = PartnersModel::findOrFail($id);
		$data->status = $request->status;
		if($data->save()){
		echo "Update Successfull.";	
		}
		else{
		echo "Opps. Something went wrong.";	
		}
    }
	
	
	}
