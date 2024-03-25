<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumsModel extends Model
{
    use HasFactory;
    protected $table ='albums';
    protected $guarded =['id'];

    public function albumPhoto(){
        return $this->hasMany(PhotoModel::class,'albumsid','id');
    }
}
