<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','created_at'];

    public function users()
    {
        return $this->hasMany(User::class, 'fk_designation');
    }

}
