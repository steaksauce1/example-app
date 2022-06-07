<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, fn($query, $search) => 
           $query->where(fn($query)=>
               $query->where('body', 'like', '%' . request('search') . '%')
           )
       ); 
    }


    public function author(){
        return $this->belongsTo(User::class);
    }

    public function store(){

    }

}
