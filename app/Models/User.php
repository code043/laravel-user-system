<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    protected $table = 'user';
    protected $fillable = [
        'name',
        'username',
        'role',
        'email',
        'phone',
        'birth_date',
        'groups_id'
    ];
    public function group(){
        return $this->belongsTo(Group::class, 'groups_id');
    }
}
