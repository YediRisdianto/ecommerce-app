<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'category_parent_id');
    }
}
