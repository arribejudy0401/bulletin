<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;

class BlogPolicy
{   
    public function show(User $user, Blog $blog){

        return $user->id === $blog->user_id;

    }
    
    public function edit(User $user, Blog $blog){

        return $user->id === $blog->user_id;

    }

    public function update(User $user, Blog $blog) : bool{

        return $user->id === $blog->user_id;

    }

    public function delete(User $user, Blog $blog) : bool{

        return $user->id === $blog->user_id;

    }
}
