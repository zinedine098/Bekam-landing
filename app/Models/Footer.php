<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_description',
        'clinic_name',
        'address',
        'whatsapp',
        'email',
        'instagram_link',
        'facebook_link',
        'copyright_text',
    ];
}
