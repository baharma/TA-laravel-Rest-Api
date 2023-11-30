<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PostEvent extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'event';

    protected $fillable = [
        'title_name',
        'slug',
        'description',
        'image',
        'address_event',
        'ukm_id',
        'create_by',
        'update_by',
        'start_register',
        'end_register',
        'tlp'
    ];

    public function usersEvent(){
        return  $this->hasOne(User::class,'id','create_by');
    }

}
