<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class  Page extends Model
{
    use HasFactory;
    public $fillable = ['title', 'page_key','meta_key','meta_description','description','deleted_at','updated_at','created_at'];
}