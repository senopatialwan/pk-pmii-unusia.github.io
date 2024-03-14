<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Upload;
use App\Models\Files;

class FileController extends Controller
{
    use Upload;
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $this->UploadFile($request->file('file'), 'Products');
            Files::create([
                'path' => $path
            ]);
            return redirect()->route('tentang')->with('success', 'File Uploaded Successfully');
        }
    }
}
