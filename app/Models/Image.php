<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    
    protected $table = 'Images';
    protected $guarded = [];

    public function image()
    {
        return $this->belongsTo(Housing::class);
    }

}
