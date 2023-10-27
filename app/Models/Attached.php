<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attached extends Model
{
    use HasFactory;
    protected $table = 'attacheds';

    public function news(){
        return $this->hasMany('App\Models\New', 'news_id');
    }
}
