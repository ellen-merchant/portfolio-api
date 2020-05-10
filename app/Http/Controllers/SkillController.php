<?php

namespace App\Http\Controllers;

use App\Http\Transformers\SkillTransformer;
use App\Portfolio\Skills\Skills;

class SkillController extends Controller
{
    public function index(Skills $skills, SkillTransformer $transformer)
    {
        $skills = $skills->getSkills();

        return response()->json($transformer->transformMultiple($skills));
    }
}
