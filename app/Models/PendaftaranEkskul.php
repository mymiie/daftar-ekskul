<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;


class PendaftaranEkskul extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'ekskul_id',
        'status_pendaftaran',
        'tanggal_pendaftaran'
    ];

    protected $casts = [
        'tanggal_daftar' => 'datetime',
    ];

    public function ekskul(): BelongsTo
    {
        return $this->belongsTo(ekskul::class);
    }
}
