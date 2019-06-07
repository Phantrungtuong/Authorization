<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    protected $fillable =['id', 'title', 'body', 'admin_id'];
    public $timestamps = true;

    public function admin(){
        return $this->belongsTo('App\Admin');
    }
}
