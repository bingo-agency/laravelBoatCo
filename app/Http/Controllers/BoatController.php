<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use Illuminate\Http\Request;

class BoatController extends Controller {

    public function createBoat(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image_url' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['price'] = strip_tags($incomingFields['price']);
        $incomingFields['user_id'] = auth()->id();
        Boat::create($incomingFields);
        return redirect('/');
    }

    public function showBoatDetails(Boat $boat) {
        return $boat;
//        return view('/boats/boat_detail/', ['boat' => $boat]);
    }

}
