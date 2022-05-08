<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'priority', 'project_id'
    ];

    public function scopeFilter($builder, $project_id) {
        return $builder->where('project_id', $project_id);
    }
}
