<?php

namespace App\Models;

use App\Observers\AboutObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([AboutObserver::class])]
class About extends Model
{
    use HasFactory;
    protected $guarded = [];

}
