<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // ใช้ Authenticatable หากครูต้องการเข้าสู่ระบบ, ถ้าไม่ ใช้ Model แทน
use Illuminate\Database\Eloquent\Model;

class Teachers extends Authenticatable // หรือใช้ Model ถ้าไม่ต้องการ Authentication
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'teacher_name',
        'teacher_surname',
        'teacher_performance',
        'teacher_image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
