<?php

namespace App\Http\Controllers;
use App\Models\Bookable;
use Illuminate\Http\Request;

class BookableAvailabilityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id,Request $request)
    {
        //setting the date range validation
       $data=$request->validate([
           'from'=>'required|date:Y-m-d|after_or_equal:date("Y-m-d")',
           'to'=>'required|date:Y-m-d|after_or_equal:from',
       ]);
        //selecting the bookable id on the db 
       $bookable=Bookable::findOrFail($id);
            //if return false success if return true
       return $bookable->availabilityFor($data['from'],$data['to'])
       ? response()->json(['success'=>'rooms available'],200)
       : response()->json(['error'=>'No rooms available'],404);
    }


}
