<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public $table = "booking";
    protected $fillable = [
		'events','namecake', 'nameoutfit','namevenue','namefood','email','create_at'
	];
}
