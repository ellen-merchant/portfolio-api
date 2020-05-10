<?php

namespace App\Http\Controllers;

use App\Http\Transformers\ActivityTransformer;
use App\Portfolio\Activities\GetActivities;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    private GetActivities $getActivities;
    private ActivityTransformer $transformer;

    public function __construct(GetActivities $getActivities, ActivityTransformer $transformer)
    {
        $this->getActivities = $getActivities;
        $this->transformer = $transformer;
    }

    public function index()
    {
        $activities = $this->getActivities->get();

        return response()->json($this->transformer->transformMultiple($activities));
    }

    public function paginate(Request $request)
    {
        $activities = $this->getActivities->paginate($request->get('limit', 10), $request->get('page', 1));

        return response()->json($this->transformer->transformPagination($activities));
    }
}
