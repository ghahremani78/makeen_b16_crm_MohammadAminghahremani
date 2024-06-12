<?php

namespace App\Http\Controllers;


use App\Models\Media;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MediaController extends Controller
{
    public function uploadMedia(Request $request,$modelType,$id){
        if($modelType === 'product'){
            $model = Product::findOrFail($id);
        }elseif($modelType === 'user'){
            $model = User::findOrFail($id);
        }elseif($modelType === 'message'){
            $model = Message::findOrFail($id);
        }else{
            return response()->json(['error' => 'Invalid model type'], 400);
        }

        if ($request->hasFile('media')) {
           
            $model->addMediaFromRequest('media')->toMediaCollection('media');
        }

        return response()->json(['message' => 'Media added successfully!']);
    }

    public function show($modelType, $id)
    {
        if ($modelType === 'product') {
            $model = Product::with('media')->findOrFail($id);
        } elseif ($modelType === 'user') {
            $model = User::findOrFail($id);
        } elseif ($modelType === 'message') {
            $model = Message::findOrFail($id);
        } else {
            return response()->json(['error' => 'Invalid model type'], 400);
        }

        $mediaItems = $model->getMedia('media');

        return response()->json($mediaItems);
    }







   /*public function index(){
    $media = Media_table::get();
    return response()->json($media);
   }

   public function create(Request $request, string $folder){
    /*$uploaded_file = $request->file('file');
    $size = $uploaded_file->getSize();
    if($size < env('MAX_UPLOAD_SIZE')){
        $fileName = $uploaded_file->getClientOriginalName();
        $path = $uploaded_file->store('public/media/' .$request->folder);
        $ext = $uploaded_file->getClientOriginalExtension();
        $media = Media_table::create([
            'file_name' => $fileName,
            'path' => $path,
            'size' => $size,
            'ext' => $ext,
        ]);
        return response()->json($media);
    }else{
        return response()->json('eror siza file');
    }

   public function edit(Request $request,$id){
    $media = Media::where('id',$id)->update($request->toArray());
    return response()->json($media);
   }

   public function delete($id){
    $media = Media_table::destroy($id);
    return response()->json($media);
   *///}


   }
