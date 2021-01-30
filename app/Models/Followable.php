<?php

namespace App\Models;

/**
 * Trait containing all
 * Follow-related method
 */
trait Followable
{
    public function follow(User $user) {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user) {
        return $this->follows()->detach($user);
    }

    public function follows() {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
    }

    public function isFollowing(User $user) {
        return $this->follows()
            ->where('follower_id', $user->id)
            ->exists();
    }

    public function toggleFollow(User $user) {
        if($this->isFollowing($user)) 
            return $this->unfollow($user);

        return $this->follow($user);
    }
}
