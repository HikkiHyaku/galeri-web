<?php

namespace App\Http\Controllers;

use App\Models\AlbumsModel;
use App\Models\PhotoModel;
use Illuminate\Http\Request;



class FotoController extends Controller
{
    public function index(AlbumsModel $id){
return view('page.photo',[
    'data' => $id,
]);
    }
    public function album_(Request $r){
$v = $r->validate([
    'album_name' => "required",
    'desc' => 'string|nullable'
]);
AlbumsModel::create($v);
return redirect()->back();
    }

    public function photo_(Request $r){
        $v = $r->validate([
            'description' => 'string|nullable',
            'albumsid' => 'required',
            'image' => 'image|required',
        ]);
    $v['image'] = $r->file('image')->store('photos');

        PhotoModel::create($v);
        return redirect()->back();
            }
}
