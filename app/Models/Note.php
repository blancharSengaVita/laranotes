<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
	use HasFactory;

    protected $fillable = ['description', 'image_url', 'user_id'];
    //ou protected $guarded = []

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
