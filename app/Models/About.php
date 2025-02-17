<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    use HasFactory;
    protected $guarded = [];

    public function aboutMultiImages()
    {
        return $this->hasMany(AboutMultiImages::class, 'about_id');
    }
}
