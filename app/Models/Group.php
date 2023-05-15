<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function todo_list()
    {
        return $this->hasMany(TodoList::class);
    }
    public function group_details()
    {
        return $this->hasMany(GroupDetail::class);
    }
}
