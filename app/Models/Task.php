<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }

    public function statuses()
    {
        return $this->hasMany(Status::class, 'id','status_id');
    }
}
