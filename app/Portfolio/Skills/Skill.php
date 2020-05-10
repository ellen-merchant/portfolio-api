<?php

namespace App\Portfolio\Skills;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $timestamps = false;

    public function getStartDate()
    {
        return Carbon::createFromTimestamp(strtotime($this->start_date))
            ->format('d-m-Y');
    }
}
