<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['content', 'student_id', 'post_id', 'status'];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

}
