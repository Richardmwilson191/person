<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternateAddress extends Model
{
    use HasFactory;
    protected $table = 'alternate_address';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'user_id';
}
