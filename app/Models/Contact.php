<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'website', 'branding', 'ecommerce', 'seo', 'message'];

    protected $casts = [
        'website' => 'boolean',
        'branding' => 'boolean',
        'ecommerce' => 'boolean',
        'seo' => 'boolean',
    ];
}
