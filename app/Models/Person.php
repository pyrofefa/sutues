<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';

    public function secretary(){
        return $this->belongsTO('App\Models\Secretary', 'person_id', 'id');
    }
    public function staff(){
        return $this->belongsTO('App\Models\Staff', 'person_id', 'id');
    }
}
