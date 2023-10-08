<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';

    public function person(){
        return $this->belongsTO('App\Models\Secretary', 'person_id', 'id');
    }
}
