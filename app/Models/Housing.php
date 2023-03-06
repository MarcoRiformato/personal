<?php

namespace App\Models;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;


class Housing extends Model implements InteractsWithMedia
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'housings';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCostoAttribute($value) //Accessor
    {
        return '€ ' . $value;
    }

    public function setNomeAttribute($value) // Mutator
    {
        $this->attributes['nome'] = ucfirst($value);
        Log::info("Setting name attribute: " . $value);
    }

}
