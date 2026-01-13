<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'created_by',
    ];

    /**
     * Relaciones
     */

    // Un proyecto tiene muchas tareas
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // El proyecto pertenece a un usuario (creador)
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
