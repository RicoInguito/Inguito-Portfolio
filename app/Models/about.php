<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'freelance', 'birthday', 'address'];
}