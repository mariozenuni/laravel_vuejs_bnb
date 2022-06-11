<?php

namespace App\Http\Controllers;

use App\Models\Bookable;
use Illuminate\Http\Request;
use App\Http\Resources\BookableIndexResource;
use App\Http\Resources\BookableShowResource;
class Bookables extends Controller
{
    public function index(Request $request){

        return BookableIndexResource::collection(Bookable::all());
    }

    public function show(Request $request, $id){

        
        return new BookableShowResource(Bookable::findOrFail($id));
    }
}
