<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable =['id', 'name'];
    public $timestamps = true;

    public function admins(){
        return $this->belongsToMany('App\Admin','admin_roles', 'role_id', 'admin_id');
    }
    public function permissions(){
        return $this->belongsToMany('App\Permission', 'permission_roles', 'role_id', 'permission_id');
    }
}
