<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mod extends Model
{
    use HasFactory;
    protected $table ="mod";
    protected $primaryKey="mod_id";
}
