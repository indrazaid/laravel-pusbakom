<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    
    use HasFactory;
    use Sluggable;

   protected $guarded = ['id'];

   

   public function Category(){
    
    return $this->belongsTo(Category::class);

   }    

   public function User(){
    return $this->belongsTo(User::class);
   }

   //membuat deafult id menjadi slug
   public function getRouteKeyName(){
    return 'slug';
   }

//    public function sluggable(): array
//    {
//        return [
//            'slug' => [
//                'source' => 'judul'
//            ]
//        ];
//    }
}
