<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['full_name', 'national_id', 'cell_phone_number', 'profile_photo_key', 'user_id'])]
class Entrepreneur extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}