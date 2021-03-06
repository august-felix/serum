<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'project_id', 'prompt'];
    protected $table = 'diagnosis';
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
