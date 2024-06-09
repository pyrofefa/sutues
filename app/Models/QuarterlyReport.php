<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuarterlyReport extends Model
{
    use HasFactory;
    protected $table = 'quartely_reports';

    public function articles(){
        return $this->hasMany('App\Models\QuarterlyReportFile', 'quaretely_report_id');
    }
}
