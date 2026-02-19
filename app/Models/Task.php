<?php

namespace App\Models;

use App\Http\Enums\PriorityTaskEnum;
use App\Http\Enums\StatusTaskEnum;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_id',
        'title',
        'description',
        'status',
        'priority',
        'assigned_to',
        'due_date',
    ];

    protected $casts = [
        'status' => StatusTaskEnum::class,
        'priority' => PriorityTaskEnum::class,
        ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
