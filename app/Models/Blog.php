<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'date',
        'content'
    ];

    protected $casts = [
        'created_at',
        'updated_at'
    ];

    public function getFormattedDateAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['date'])->format('d.m.Y');
    }

}
