<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admit_card extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',

        'created_ip_address',
        'modified_ip_address',
        'created_by',
        'modified_by',
    ];
}
