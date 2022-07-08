<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gist extends Model {

    use HasFactory;
    
    protected $fillable = ['title', 'url', 'description','author_id','comments','issues'];

    public function author() {
        return $this->hasOne(Author::class);
    }

    public function files() {
        return $this->hasMany(File::class);
    }

}