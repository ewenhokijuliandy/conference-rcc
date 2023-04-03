<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminfile;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function papers(){
        $papers = Adminfile::all();
        foreach ($papers as $paper) {
            $paper->path = url($paper->path);
        }
        return view('admin.papers', compact('papers'));
    }

    public function addPaper(Request $request){
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . ".$extension";
        $path = Storage::putFileAs('uploads/admin', $file, $filename);
        $paper = new Adminfile();
        $paper->title = $request->title;
        $paper->author = $request->author;
        $paper->path = $path;
        $paper->save();
        return redirect()->route('admin.papers')->with('success','success');
    }

    public function deletePaper(Adminfile $paper){
        Storage::delete($paper->path);
        $paper->delete();
        return redirect()->route('admin.papers')->with('deleted','success');
    }
}
