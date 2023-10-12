<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    use HasFactory;
    protected $table = 'secretaries';
    
    public function person(){
        return $this->hasOne('App\Models\Person',  'id', 'person_id');
    }

}
