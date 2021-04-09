<?php

namespace App\Portfolio\Skills;

use App\Portfolio\PortfolioModel;
use Carbon\Carbon;

class Skill extends PortfolioModel
{
    public $timestamps = false;

    public function getStartDate()
    {
        return Carbon::createFromTimestamp(strtotime($this->start_date))
            ->format('d-m-Y');
    }
}
