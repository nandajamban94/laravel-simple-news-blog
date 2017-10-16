<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agendas';
    protected $fillable = ['nama','tanggal_pelaksanaan','waktu_pelaksanaan','tempat_pelaksanaan','pembahasan','status'];
}
