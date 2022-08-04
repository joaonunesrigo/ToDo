<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;


class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_title',
        'is_done',
        'tesk_desc',
        'task_date',
        'category_id',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
