<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'project_id', 'prompt', 'result1', 'result2'];
    protected $table = 'tests';

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
