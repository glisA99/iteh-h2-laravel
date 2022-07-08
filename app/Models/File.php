<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model {

    use HasFactory;
    
    protected $fillable = ['filename', 'type', 'content','gist_id'];
    protected $with = ['gist_id'];

    public function gist() {
        return $this->belongsTo(Gist::class);
    }

}