<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\News;
use App\Models\Type;

class DocumentsController extends Controller
{
    public function index(){
        $documents = News::with('type')->where('type_id',3)->paginate(10);
        return Inertia::render('Admin/Documents/index',[
            'documents' => $documents
        ]);
    }
}
