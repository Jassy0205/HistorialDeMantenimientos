<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\ComputerStoreRequest;
use App\Http\Requests\api\v1\ComputerUpdateRequest;
use App\Http\Resources\api\v1\ComputerResource;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ComputerController extends Controller
{
    public function list()
    {
        $computers = Computer::all();

        return $computers;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::orderBy('name', 'asc') -> get();

        return response()->json(['data' => ComputerResource::collection($computers)], 200); //Código de respuesta
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerStoreRequest $request)
    {
        $computer = Computer::create($request->all());

        $user = Auth::user();

        $computer["owner"] = $user["id"];
        $computer -> save();

        return response()->json(['data' => new ComputerResource($computer)], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        return response()->json(['data' => new ComputerResource($computer)], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComputerUpdateRequest $request, Computer $computer)
    {
        $computer -> update($request->all());

        return response()->json(['data' => new ComputerResource($computer)], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer -> delete();

        return response()->json(null, 204);
    }
}
