<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['logo','title','category', 'desc', 'designer_id', 'price'];
    public function designer()
    {
        # code...
        return $this->belongsTo(User::class, 'designer_id','id');
    }

    public function categories()
    {
        # code...
        return $this->belongsTo(Category::class, 'category','id');
    }
}
