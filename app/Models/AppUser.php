<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    //use HasFactory;
    protected $table = 'appusers';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['username','password','name', 'email','phone'];
    public static $rules = [
        'username'=> 'required|min:5',
        'name' => 'required|min:5',
        'email' => 'required|email',
        'password' => 'required|min:5',
        'password_confirm' => 'same:password'
    ];
    public static $updaterules = [
        'username'=> 'required|min:5',
        'name' => 'required|min:5',
        'email' => 'required|email'
    ]; 
}
