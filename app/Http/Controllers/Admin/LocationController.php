<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class LocationController extends Controller
{
    public function stateList(){
    	$data['states'] = State::get();
    	$data['title'] = 'State List';
    	return view('states.state-list')->with($data);
    }
}
