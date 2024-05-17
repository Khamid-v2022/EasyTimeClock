<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stevebauman\Location\Facades\Location;
use Jenssegers\Agent\Facades\Agent;

use App\Models\TrackHistory;

class MainController extends Controller
{
    public function index()
    {
        $pageConfigs = ['myLayout' => 'blank'];
        return view('content.page-main', [
            'pageConfigs'=> $pageConfigs,
        ]);
    }

    public function submitData(Request $request) {
        $history = new TrackHistory;

        $history->name = $request->name;
        $history->type = $request->type;
        $history->time = $request->time;
        $history->date = $request->date;
        $history->memo = $request->memo;

        $history->agency = $request->header('User-Agent');
        $history->ip_address = $request->ip();
        $history->browser = Agent::browser();
        $history->device = Agent::device(); 
        $history->platform = Agent::platform();

        $location = Location::get($request->ip());
        if($location){
            $history->location = $location->countryName;
        }

        $history->isDesktop = Agent::isDesktop();
        $history->isPhone = Agent::isPhone();
        $history->save();

        
        return response()->json(['code'=>200, 'message'=>"Saved"], 200);
    }
}
