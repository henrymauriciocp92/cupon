<?php

namespace App\Http\Controllers;

use App\Entities\Cupon;
use Faker\Provider\Image;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function download($id){

        $cupon=Cupon::findOrFail($id);
        $path_to_file=$cupon->box.'/'.$cupon->folder.'/'.$cupon->file_name;
        if( \Storage::disk('sos')->exists($path_to_file)){
            $file_path =(\Storage::disk('sos')->path($path_to_file));
           // return response()->download($file_path);
        }


        return redirect('results')
            ->withErrors('El archivo solicitado no se encuentra en el respositorio de datos')
            ->withInput();
    }
}
