<?php

namespace App\Http\Controllers\AdminController;

use App\Models\CardsModel;
use App\Models\LevelOneModel;
use App\Models\LevelThreeModel;
use App\Models\LevelTwoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Imageupload;
use Carbon\Carbon;

class CardsController extends Controller
{
    private function max_position_of_cards_model()
    {
        $max_position = CardsModel::max('position');
        $max_position = (int)$max_position + 1;
        return $max_position;
    }

    public function index()
    {
        $cards = CardsModel::position()->get();
        return view('adminlte::adminweb.cards.index')->with('cards', $cards);
    }


    public function create()
    {
        $lones = LevelOneModel::status()->pluck('name', 'id');
        return view('adminlte::adminweb.cards.create')->with(['lones' => $lones]);
    }


    public function store(Request $request)
    {
        if (!$request->has('level_one_category')) {
            return redirect()->route('cards.create')->with(['message' => 'Please Select the Level One Category', 'message_type' => 'error'])->withInput();
        }

        if (!$request->has('level_two_category')) {
            return redirect()->route('cards.create')->with(['message' => 'Please Select the Level Two Category', 'message_type' => 'error'])->withInput();
        }

        $level_three = LevelThreeModel::find($request->level_three_category);

        if (!isset($level_three)) {
            return redirect()->route('cards.create')->with(['message' => 'Please Select the Level Three Category', 'message_type' => 'error'])->withInput();
        }

        $this->validate($request, [
            'title' => 'required',
            'custom_thumbnail' => 'required',
            'custom_thumbnail.*' => 'required|image',
            'description' => 'required',
//            'video_url' => 'required|url',
//            'partner_logo' => 'required|image',
//            'partner_logo_link' => 'required|url',
           'brochure' => 'nullable|mimes:pdf',

        ]);

        $imagePaths = [];
        if ($request->hasFile('custom_thumbnail')) {
            $imagePaths = [];
            foreach ($request->file('custom_thumbnail') as $key => $image) {
                $unique = uniqid();
                $fileext = $image->getClientOriginalExtension();
                $imageName2 = $key . '' . $unique . '.' . $fileext;
                $image->move(config('constants.image_dir'), $imageName2);
                $imagePaths[] = $imageName2;
            }
        }
       
        $cards = new CardsModel();
        $cards->title = $request->title;
        $cards->custom_thumbnail = json_encode($imagePaths);
        $cards->video_url = $request->video_url;
        if ($request->hasFile('partner_logo')) {
            $cards->partner_logo = Imageupload::upload($request->partner_logo)['filename'];
        }
        $cards->partner_logo_link = $request->partner_logo_link;

//        Partner logo updated

        if ($request->hasFile('partner_logo_1')) {
            $cards->partner_logo_1 = Imageupload::upload($request->partner_logo_1)['filename'];
        }
        $cards->partner_logo_link_1 = $request->partner_logo_link_1;

        if ($request->hasFile('partner_logo_2')) {
            $cards->partner_logo_2 = Imageupload::upload($request->partner_logo_2)['filename'];
        }
        $cards->partner_logo_link_2 = $request->partner_logo_link_2;

        if ($request->hasFile('partner_logo_3')) {
            $cards->partner_logo_3 = Imageupload::upload($request->partner_logo_3)['filename'];
        }
        $cards->partner_logo_link_3 = $request->partner_logo_link_3;

        if ($request->hasFile('brochure')) {
            $file = $request->file('brochure');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $timestamp = $timestamp . '' . mt_rand();
            $name = $timestamp . '-' . $file->getClientOriginalName();
            $file->move(config('constants.pdf_dir'), $name);
            $cards->brochure = $name;
        }


        $cards->description = $request->description;
        $cards->position = $this->max_position_of_cards_model();
        $cards->status = $request->status;

        if ($level_three->cards()->save($cards)) {
            return redirect()->route('cards.index')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);
        }

        return redirect()->route('cards.index')->with(['message' => 'Some Error Occured at server side! Please Contact To Our HelpDesk', 'message_type' => 'error'])->withInput();


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $card = CardsModel::findOrFail($id);
        $lones = LevelOneModel::status()->pluck('name', 'id');

        $lid = $card->level_three->level_two->level_one->id;

        $ltwos = LevelTwoModel::whereHas('level_one', function ($query) use ($lid) {
            $query->where('id', $lid);
        })->status()->pluck('title', 'id');

        $lidt = $card->level_three->level_two->id;

        $lthrees = LevelThreeModel::whereHas('level_two', function ($query) use ($lidt) {
            $query->where('id', $lidt);
        })->status()->pluck('title', 'id');

        $fullUrl = $card->custom_thumbnail;
        preg_match('/\[(.*?)\]/', $fullUrl, $matches);
        if (!empty($matches[0])) {
            $jsonArray = $matches[0];
            $imageArray = json_decode($jsonArray, true);
        } else {
            $imageArray = [];
        }
        

        return view('adminlte::adminweb.cards.edit')->with(['imageArray'=>$imageArray,'card' => $card, 'lones' => $lones, 'ltwos' => $ltwos, 'lthrees' => $lthrees]);
    }


    public function update(Request $request, $id)
    {

        if (!$request->has('level_one_category')) {
            return redirect()->route('cards.create')->with(['message' => 'Please Select the Level One Category', 'message_type' => 'error']);
        }

        if (!$request->has('level_two_category')) {
            return redirect()->route('cards.create')->with(['message' => 'Please Select the Level Two Category', 'message_type' => 'error']);
        }

        $level_three = LevelThreeModel::find($request->level_three_category);

        if (!isset($level_three)) {
            return redirect()->route('cards.create')->with(['message' => 'Please Select the Level Three Category', 'message_type' => 'error']);
        }

        $this->validate($request, [
            'custom_thumbnail.*' => 'nullable|image',
            'brochure' => 'nullable|mimes:pdf',
        ]);


        $cards = CardsModel::findOrFail($id);
        $cards->title = $request->title;


        $imagePaths = [];
        if ($request->hasFile('custom_thumbnail')) {
            $imagePaths = [];
            foreach ($request->file('custom_thumbnail') as $key => $image) {
                $unique = uniqid();
                $fileext = $image->getClientOriginalExtension();
                $imageName2 = $key . '' . $unique . '.' . $fileext;
                $image->move(config('constants.image_dir'), $imageName2);
                $imagePaths[] = $imageName2;
            }
            $cards->custom_thumbnail = json_encode($imagePaths);
        }
        $cards->video_url = $request->video_url;
        if ($request->hasFile('partner_logo')) {
            $cards->partner_logo = Imageupload::upload($request->partner_logo)['filename'];
        }
        $cards->partner_logo_link = $request->partner_logo_link;
        if ($request->hasFile('partner_logo_1')) {
            $cards->partner_logo_1 = Imageupload::upload($request->partner_logo_1)['filename'];
        }
        $cards->partner_logo_link_1 = $request->partner_logo_link_1;

        if ($request->hasFile('partner_logo_2')) {
            $cards->partner_logo_2 = Imageupload::upload($request->partner_logo_2)['filename'];
        }
        $cards->partner_logo_link_2 = $request->partner_logo_link_2;

        if ($request->hasFile('partner_logo_3')) {
            $cards->partner_logo_3 = Imageupload::upload($request->partner_logo_3)['filename'];
        }
        $cards->partner_logo_link_3 = $request->partner_logo_link_3;
        if ($request->hasFile('brochure')) {

            $file = $request->file('brochure');

            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $timestamp = $timestamp . '' . mt_rand();
            $name = $timestamp . '-' . $file->getClientOriginalName();
            $file->move(config('constants.pdf_dir'), $name);
            $cards->brochure = $name;
        }


        $cards->description = $request->description;
        $cards->position = $request->position;
        $cards->status = $request->status;

        if ($level_three->cards()->save($cards)) {
            return redirect()->route('cards.index')->with(['message' => 'Successfully Saved', 'message_type' => 'success']);
        }

        return redirect()->route('cards.index')->with(['message' => 'Some Error Occured at server side! Please Contact To Our HelpDesk', 'message_type' => 'error']);

    }


    public function destroy($id)
    {
        if (CardsModel::destroy($id)) {
            return redirect()->route('cards.index')->with(['message' => 'Successfully Deleted', 'message_type' => 'success']);
        }

        return redirect()->route('cards.index')->with(['message' => 'Some Error Occured at server side! Please Contact To Our HelpDesk', 'message_type' => 'error']);
    }
}
