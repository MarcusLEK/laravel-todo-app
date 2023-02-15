<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'session_id',
        'status'
    ];

    protected $appends = [
        'status_text',
        'status_color',
    ];

    const STATUS_PENDING = 0;
    const STATUS_COMPLETED = 1;

    const STATUS_ARRAY = [
        self::STATUS_PENDING => 'Pending',
        self::STATUS_COMPLETED => 'Completed',
    ];

    const STATUS_COLOR_ARRAY = [
        self::STATUS_PENDING => 'text-yellow-500',
        self::STATUS_COMPLETED => 'text-green-500',
    ];

    public function getStatusTextAttribute()
    {
        return self::STATUS_ARRAY[$this->status];
    }

    public function getStatusColorAttribute()
    {
        return self::STATUS_COLOR_ARRAY[$this->status];
    }
}
