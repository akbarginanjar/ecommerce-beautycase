<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $visible = ['gambar', 'nama_barang', 'warna', 'stok', 'harga'];

    protected $fillable =
    [
        'gambar', 'nama_barang', 'warna', 'stok', 'harga'
    ];

    public $timestamps = true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/beautycase/' . $this->gambar))) {
            return asset('images/beautycase/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/beautycase/' . $this->gambar))) {
            return unlink(public_path('images/beautycase/' . $this->gambar));
        }

    }
}
