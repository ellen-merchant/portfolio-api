<?php

namespace App\Portfolio\Activities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
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
