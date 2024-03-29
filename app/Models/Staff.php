<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    
    public function person(){
        return $this->hasOne('App\Models\Person',  'id', 'person_id');
    }
    public function position(){
        return $this->hasOne('App\Models\Position',  'id', 'position_id');
    }
}
