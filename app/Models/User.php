<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Tweet;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatar($px) {
        return "https://i.pravatar.cc/" .$px ."?u=" . $this->email;
    }

    public function timeline() {
        // Get all the ids we are following and include ours
        $following = $this->follows->pluck('id');

        return Tweet::whereIn('user_id', $following)
            ->orWhere('user_id', $this->id)
            ->latest()->get();

    }

    public function tweets() {
        return $this->hasMany(Tweet::class)
            ->latest();
    }

    public function getRouteKeyName() {
        return 'username';
    }
}
