<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransparencyObligation extends Model
{
    use HasFactory;
    protected $table = 'transparency_obligations';

    public function articles(){
        return $this->hasMany('App\Models\TransparencyObligationFile', 'transparency_obligations_id');
    }
}
