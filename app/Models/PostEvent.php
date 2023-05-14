<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostEvent extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = [
        'title_name',
        'slug',
        'description',
        'image',
        'address_event',
        'ukm_id',
        'user_post',
        'start_register',
        'end_register',
        'tlp'
    ];

}
