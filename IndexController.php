<?php

namespace App\Http\Controllers\FrontController;

use App\Mail\Brochure;
use App\Models\HomepageBanner;
use App\Models\LevelOneModel;
use App\Models\EventsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubscribersModel;
use Illuminate\Support\Facades\Mail;
use Torann\GeoIP\Facades\GeoIP;
use App\Models\IndustrialMainCategory;
use App\Models\AboutModel;
use App\Models\PartnersModel;
use Illuminate\Support\Facades\Request as Frequest;

class IndexController extends Controller
{
    public function get_index()
    {

        $home_banners = HomepageBanner::status()->position()->get();
        $level_ones = LevelOneModel::status()->position()->get();
        $industrialMainCategories = IndustrialMainCategory::status()->get();
        // $industrialCategories = \App\Models\IndustrialCategory::status()->position()->get();
        $ip = geoip($_SERVER['REMOTE_ADDR']);
        return view('adminlte::frontweb.pages.index')->with(['level_ones' => $level_ones, 'home_banners' => $home_banners,'ip' => $ip, 'industrialMainCategories' => $industrialMainCategories]);
    }

    public function post_subscribe(Request $request)
    {
        try {
            $subscribe = new SubscribersModel();
            $subscribe->email = $request->email;
            $subscribe->save();
            return response()->json([
                'msg' => 'Your id has been successfully subscribed. '
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'msg' => 'This email is already subscribed.'
            ]);
        }

    }


    public function get_about()
    {
        $ip = geoip($_SERVER['REMOTE_ADDR']);
        $level_ones = LevelOneModel::status()->position()->get();
        $aboutUs = AboutModel::where('is_active','1')->get();
        $stemEducation = PartnersModel::where('category','STEM Education')->where('status','1')->get();
        $engineeringLabs = PartnersModel::where('category','Engineering Labs')->where('status','1')->get();
        $edtechSolutions = PartnersModel::where('category','EdTech Solutions')->where('status','1')->get();
        return view('adminlte::frontweb.pages.about')->with(['engineeringLabs'=>$engineeringLabs,'edtechSolutions'=>$edtechSolutions,'stemEducation'=>$stemEducation,'aboutUs'=>$aboutUs,'level_ones' => $level_ones, 'ip' => $ip]);
    }

    public function get_contact()
    {
        $ip = geoip($_SERVER['REMOTE_ADDR']);
        return view('adminlte::frontweb.pages.contact')->with(['ip' => $ip]);
    }

    public function get_thank_you()
    {

        try {
//            dd(Frequest::all("email_id"));
            if (Frequest::has("email_id") && Frequest::has("bch")) {
                Mail::to(FRequest::get("email_id"))->send(new Brochure(Frequest::get("bch")));
            }
        } catch (\Exception $e) {
            return view('adminlte::frontweb.pages.thank-you');
        }
        return view('adminlte::frontweb.pages.thank-you');
    }

    public function events(){
        $events = EventsModel::status()->get();
        return view('adminlte::frontweb.pages.events')->with([
            'events' => $events
        ]);
    }

}
