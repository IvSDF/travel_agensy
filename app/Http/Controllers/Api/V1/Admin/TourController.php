<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TourRequest;
use App\Http\Resources\TourResource;
use App\Models\Travel;


class TourController extends Controller
{
    public function store(Travel $travel, TourRequest $request)
    {
        dd($travel);
//        $tour->create([
//            'travel_id' => '99a87ecd-bd0c-4bb0-9a1d-5793e895ac30',
//            'name' => 'New tour',
//            'starting_date' => '2023-07-17',
//            'ending_date' => '2023-07-19',
//            'price' => '190',
//        ]);

        $tour = $travel->tours()->create($request->validated());

        return new TourResource($tour);

//        dd($tour);

//        return new TourResource($tour);
    }
}

