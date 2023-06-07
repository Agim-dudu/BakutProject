<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class florafaunas extends Model
{
    use HasFactory;

    protected $table = 'florafaunas'; // Nama tabel di database

    protected $fillable = ['title', 'image_path', 'description', 'icon'];
}
