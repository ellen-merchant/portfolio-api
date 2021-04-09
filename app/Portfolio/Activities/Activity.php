<?php

namespace App\Portfolio\Activities;

use App\Portfolio\PortfolioModel;
use Carbon\Carbon;

class Activity extends PortfolioModel
{
    public $timestamps = false;

    public function getStartDate(): string
    {
        return Carbon::createFromTimestamp(strtotime($this->start_date))
            ->format('d-m-Y');
    }

    public function getTitleLink(): string
    {
        return $this->title_link ?? "";
    }
}
