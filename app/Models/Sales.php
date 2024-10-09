<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'budget_iklan',
        'lead',
        'closing',
        'botol',
        'omset',
        'target_omset',
        'nama_produk',
        'nama_divisi',
        'pt',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'budget_iklan' => 'decimal:2',
        'omset' => 'decimal:2',
        'target_omset' => 'decimal:2',
    ];

    // Scope untuk query yang sering digunakan
    public function scopeThisMonth($query)
    {
        return $query->whereMonth('tanggal', now()->month);
    }

    // Accessor untuk format mata uang
    public function getOmsetFormattedAttribute()
    {
        return 'Rp ' . number_format($this->omset, 2);
    }

    // Anda bisa menambahkan method lain yang diperlukan di sini
}