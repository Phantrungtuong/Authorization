<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table ='permissions';
    protected $fillable =['id', 'permission', 'display_permisson', 'for'];
    public $timestamps = true;

    public function roles(){
        return $this->belongsToMany('App\Role', 'permission_roles', 'permission_id', 'role_id');
    }
}
