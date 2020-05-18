<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\News;

class NewsObserver
{
    public function creating(News $news)
    {
        $news->uuid = Str::uuid();
    }
}
