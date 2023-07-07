<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $table = 'labels';

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
