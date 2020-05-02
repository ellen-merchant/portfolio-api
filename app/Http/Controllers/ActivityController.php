<?php

namespace App\Http\Controllers;

use App\Http\Transformers\ActivityTransformer;
use App\Portfolio\Activities\GetActivities;

class ActivityController extends Controller
{
    public function index(GetActivities $getActivities, ActivityTransformer $transformer)
    {
        $activities = $getActivities->get();

        return response()->json($transformer->transformMultiple($activities));
    }
}
