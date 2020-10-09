<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        self::retrieved(function($model){
        });
        
        self::saving(function($model){

        });

        self::saved(function($model){
            // ... code here
        });
        self::creating(function($model){

        });
        self::created(function($model){
            // ... code here
        });

        self::updating(function($model){
            // ... code here
        });

        self::updated(function($model){
            // ... code here
        });
        self::deleting(function($model){
            // ... code here
        });

        self::deleted(function($model){
            // ... code here
        });
    }

    public function getCreatedAtAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('d/m/Y - H:i');
    }

    public function getTituloAttribute($value) { 
        return Str::ucfirst($value);
    }

    
}
