<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ekskul extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ekskul',
        'deskripsi',
        'kuota',
        'jadwal',
        'lokasi',
        'guru_pembimbing_id'
    ];

    public function pendaftaran(): HasMany
    {
        return $this->hasMany(PendaftaranEkskul::class);
    }
    
    public function guruPembimbing(): BelongsTo
    {
        return $this->belongsTo(User::class, 'guru_pembimbing_id');
    }
}