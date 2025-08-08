<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'nis',
        'nip',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    /**
     * Get the user's initials
     */
    public function pendaftarans(): HasMany
    {
        return $this->hasMany(PendaftaranEkskul::class);
    }
    public function ekskulsDibimbing(): HasMany
    {
        return $this->hasMany(Ekskul::class, 'guru_pembimbing_id');
    }
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
    public function isGuru(): bool
    {
        return $this->role === 'guru';
    }
    public function isSiswa(): bool
    {
        return $this->role === 'siswa';
    }
}
