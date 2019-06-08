<?php

namespace App\Policies;

use App\Admin;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(Admin $user)
    {
        return $this->getPermission($user, 'view');
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        return $this->getPermission($user, 'create');
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $user)
    {
        return $this->getPermission($user, 'update');
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $user)
    {
        return $this->getPermission($user, 'delete');
    }

    public function category(Admin $user)
    {
        return $this->getPermission($user, 'category');
    }

    public function adminaccount(Admin $user)
    {
        return $this->getPermission($user, 'admin');
    }

    public function role(Admin $user)
    {
        return $this->getPermission($user, 'role');
    }

    public function permission(Admin $user)
    {
        return $this->getPermission($user, 'permission');
    }

    public function post(Admin $user)
    {
        return $this->getPermission($user, 'post');
    }
    protected function getPermission($user, $rp_id){
        foreach ($user->roles as $role){
            foreach ($role->permissions as $permission){
                if ($permission->permission == $rp_id){
                    return true;
                }
            }
        }
        return false;
    }
}
