<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestData extends Model
{
    use HasFactory;
    protected $fillable = ['test_id'];
    protected $table = 'datat';
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
