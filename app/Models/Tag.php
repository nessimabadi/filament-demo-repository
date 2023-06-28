<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['tag', 'taggable_id', 'taggable_type'];

    public function taggable(): MorphTo
    {
        return $this->morphTo();
    }
}
