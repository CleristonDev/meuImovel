<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RealState;
use Illuminate\Http\Request;

class RealStateController extends Controller
{
    private $realState;
    public function __construct(RealState $realState)
    {
        $this->realState = $realState;
    }
    public function index()
    {
        $realState = $this->realState->paginate('10');

        return response()->json($realState, 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        try{
            return response ()->json ($request->all(),200);
        } catch (\Exception $e ) {
            return response ()->json (['error' => $e->getMessage()]);
        }
       
        
    }
}
