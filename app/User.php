<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'alamat', 'kota', 'telepon', 'ponsel', 'ktp', 'sim', 'pekerjaan', 'nama_perusahaan', 'telepon_perusahaan', 'alamat_perusahaan', 'metode_pembayaran', 'path_ktp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
