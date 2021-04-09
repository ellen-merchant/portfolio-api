<?php

namespace App\Portfolio\Skills;

class Skills
{
    public function getSkills()
    {
        return Skill::orderBy('start_date')
            ->get();
    }
}
