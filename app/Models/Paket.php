<?php

namespace App\Models;

use App\Enums\JenisPaket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $casts=[
        'type'  => JenisPaket::class
    ];

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }

    public function detailTransaction()
    {
        return $this->hasOne(DetailTransaction::class);
    }

    public function getIsKiloanAttribute()
    {
        return $this->type === JenisPaket::Kiloan;
    }

    public function getIsSelimutAttribute()
    {
        return $this->type === JenisPaket::Selimut;
    }

    public function getIsSpreiAttribute()
    {
        return $this->type === JenisPaket::Sprei;
    }

    public function  getIsKaosAttribute()
    {
        return $this->type === JenisPaket::Kaos;
    }
}
