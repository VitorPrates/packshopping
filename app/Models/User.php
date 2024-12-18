<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function scopefilter($query, array $filters)
    {
        if($filters['search'] ?? false)
        {
            $query -> where('name', 'like','%'.request('search').'%')
            ->orwhere('id', 'like','%'.request('search').'%');
        }
        // if($filters['search'] ?? false)
        // {
        //     $query -> where('id', 'like','%'.request('search').'%');
        // }
    }
    //relações loja-user
    public function lojas()
    {
        return $this->hasMany(listando::class,'user_id');
    }
}
