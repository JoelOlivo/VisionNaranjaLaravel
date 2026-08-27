<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description', 'logo_key', 'entrepreneur_id'])]
class Entrepreneurship extends Model
{
    public function entrepreneur()
    {
        return $this->belongsTo(Entrepreneur::class);
    }
}