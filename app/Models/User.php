<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Create admin.
     *
     * @param  array  $details
     * @return array
     */
    public function createSuperAdmin(array $details): self
    {
        $user = User::create([
            'name' => $details['name'],
            'email' => $details['email'],
            'password' => $details['password'],
        ]);

        $user->assignRole('super-admin');

        return $user;
    }

    public function getRoleName()
    {
        return $this->roles->pluck('name')[0];
    }

    public function getRolesColorAttribute()
    {
        return [
            'super-admin' => 'primary',
            'user' => 'info',
            'admin' => 'success',
            'maintainer' => 'secondary',
        ][$this->roles[0]->name] ?? 'info';
    }
}
