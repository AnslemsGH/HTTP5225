<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = [
        'coursename',
        'description',
        'professor_id'
        ];

    public function students():BelongsToMany{
        return $this -> belongsToMany(Student::class);
    }

    public function professors():BelongsTo{
        return $this -> belongsTo(Professor::class);
    }
}
