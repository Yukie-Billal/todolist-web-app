<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TodoList extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function scopeHasGroup(Builder $query)
    {
        return $query->where('group_id', '>', 0);
    }
    public function scopeGroup(Builder $query, $group_id)
    {
        return $query->where('group_id', $group_id);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
