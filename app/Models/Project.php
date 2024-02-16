<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
                'title',
                'img_url',
                'date',
                'description'
    ];

    public function type(){
        return $this->belongsTo(type::class);
    }
}
