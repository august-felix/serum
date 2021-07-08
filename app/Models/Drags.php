<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drags extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'project_id', 'prompt', 'result'];
    protected $table = 'drags';

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function datas()
    {
        return $this->hasMany(DragData::class);
    }
}
