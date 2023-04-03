<?php

namespace App\Http\Controllers;

use App\Models\Adminfile;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function profile(){
        return view('upcoming');
    }

    public function submission(){
        $papers = Adminfile::all();
        foreach ($papers as $paper) {
            $paper->path = url($paper->path);
        }
        return view('submission', compact('papers'));
    }
}
