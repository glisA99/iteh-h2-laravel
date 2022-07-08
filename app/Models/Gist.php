<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gist extends Model {

    use HasFactory;
    
    protected $fillable = ['title', 'url', 'description','author_id','comments','issues'];
    protected $with = ['author_id'];

    public function author() {
        return $this->belongsTo(Author::class);
    }

}