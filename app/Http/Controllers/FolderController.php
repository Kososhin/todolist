<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFolder;
use App\Folder;

class FolderController extends Controller
{
    //
    public function showCreateform(){
        return view('folders/create');
    }

    public function create(CreateFolder $request){
        $folder = new Folder();

        $folder->title = $request->title;

        $folder->save();

        return redirect()->route('tasks.index',['id'=> $folder->id,]);
    }
}
