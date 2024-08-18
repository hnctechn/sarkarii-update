<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latest_job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug_url',
        'description',

        'created_ip_address',
        'modified_ip_address',
        'created_by',
        'modified_by',
    ];
}
