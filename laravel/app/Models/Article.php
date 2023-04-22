<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // 白名單
    protected $fillable = ['title','content','category_id','user_id'];
    public function category(){
        return $this->belongsTo(Category::class);
        // return $this->belongsTo(App\Category);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
