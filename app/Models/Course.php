<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'default_color',
    ];

    /**
     * Relasi ke event yang menggunakan matakuliah ini.
     */
    public function events()
    {
        return $this->hasMany(\App\Models\Event::class);
    }
}
