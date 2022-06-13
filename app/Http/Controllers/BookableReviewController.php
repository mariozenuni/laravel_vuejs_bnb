<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookable;
use App\Http\Resources\BookableReviewIndexResource;
class BookableReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, Request $request)
    {
        $bookable=Bookable::findOrFail($id);
       
            $data=$bookable->reviews()->latest()->get();
            $reviews=BookableReviewIndexResource::collection($data);

             return  $reviews ?response()->json(['data'=>$reviews,'success'=>'Room found'], 200)
                            :response()->json(['error'=>'Room not found'], 404);
    }
}
