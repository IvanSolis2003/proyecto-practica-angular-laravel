<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'project_id',
        'assigned_to',
    ];

    /**
     * Relaciones
     */

    // La tarea pertenece a un proyecto
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    // La tarea está asignada a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
