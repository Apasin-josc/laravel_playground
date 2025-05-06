<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'priority',
        'description',
        'team_id',
    ];

    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function team() {
        return $this->belongsTo(Team::class);
    }

    //$task->team->name
}
