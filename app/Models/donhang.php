<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    use HasFactory;
    protected $table = 'donhang';

    protected $primaryKey = 'id_donhang';
   
    protected $fillable = [
    'ten_kh',
    'sdt_kh',
    'dc_kh',
    'trangthai'
    ];
    public $timestamp= false;
}
