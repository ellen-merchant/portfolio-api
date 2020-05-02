<?php

namespace App\Portfolio\Activities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = false;

    /**
     * @return Carbon
     */
    public function getStartDate()
    {
        return Carbon::createFromTimestamp(strtotime($this->start_date));
    }

    /**
     * @return string
     */
    public function getTitleLink(): string
    {
        return $this->title_link ?? "";
    }
}
