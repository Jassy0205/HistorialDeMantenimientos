<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Observation;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\ObservationStoreRequest;
use App\Http\Requests\api\v1\ObservationUpdateRequest;
use App\Http\Resources\api\v1\ObservationResource;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ObservationController extends Controller
{
    public function list()
    {
        $observations = Observation::all();

        return $observations;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $observations = Observation::where('machine', '=', $id) -> get();

        return response()->json(['data' => ObservationResource::collection($observations)], 200); //Código de respuesta
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $id, ObservationStoreRequest $request)
    {
        $observation = Observation::create($request->all());

        $user = Auth::user();
        $observation['owner'] = $user["id"];
        $observation['machine'] = $id;

        $observation -> save();

        return response()->json(['data' => new ObservationResource($observation)], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Observation $observation)
    {
        #$observation::where('machine', '=', $id) -> get();
        
        if ($observation['machine'] == $id){
            return response()->json(['data' => new ObservationResource($observation)], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ObservationUpdateRequest $request, string $id, Observation $observation)
    {
        if ($observation['machine'] == $id)
        {
            $observation -> update($request->all());
            return response()->json(['data' => new ObservationResource($observation)], 200);
        }else{
            return response()->json(null, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Observation $observation)
    {
        if ($observation['machine'] == $id)
        {
            $observation -> delete();
            return response()->json(null, 204);
        }else{
            return response()->json(null, 404);
        }
    }
}
