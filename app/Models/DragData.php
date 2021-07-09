<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DragData extends Model
{
    use HasFactory;
    protected $fillable = ['drag_id'];
    protected $table = 'datad';
    public function drag()
    {
        return $this->belongsTo(Drags::class);
    }
}
