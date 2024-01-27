<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable /*da utilizzare se uno dei campi del form è DISABLED*/ = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type"
    ];
}