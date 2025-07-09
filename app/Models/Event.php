<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lecturer',
        'location',
        'color',
        'starts_at',
        'ends_at',
        'course_id',
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class);
    }

    public function getDurasiAttribute(): int
    {
        if ($this->starts_at && $this->ends_at) {
            return $this->ends_at->diffInMinutes($this->starts_at);
        }
        return 0;
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('starts_at', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ]);
    }

    public function scopeByCourse($query, $courseId)
    {
        return $query->where('course_id', $courseId);
    }
}
