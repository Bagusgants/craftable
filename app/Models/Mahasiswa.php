<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primarykey ="nim";

    protected $fillable = [
        'nim',
        'nama',
        'umur',
        'alamat',
        'kota',
        'kelas',
        'jurusan',
        'update_at',
    
    ];
    
    
    protected $dates = [
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/mahasiswas/'.$this->getKey());
    }
}
