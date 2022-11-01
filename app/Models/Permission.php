<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function roles(){

        return $this->belongsTomany(Role::class,'roles_permissions');
    }

    public function users(){

        return $this->belongsTomany(User::class,'roles_users');
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
