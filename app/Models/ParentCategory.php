<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function childCategory()
    {
        return $this->hasMany(ChildCategory::class, 'category_parent_id');
    }
}
