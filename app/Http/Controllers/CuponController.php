<?php

namespace App\Http\Controllers;

use App\Entities\Cupon;
use Illuminate\Http\Request;

class CuponController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function results(Request $request){
        $search = $request->input('search_text');
        $cupons=Cupon::search( $request->input('search_text'))->paginate(15);
        $cupons->appends(['search_text' => $search]);
        return view('cupon.results',compact('cupons','search'));

    }

    public function view($id){
        $cupon=Cupon::findOrFail($id);

        $file_name=null;
        $path_to_file=$cupon->box.'/'.$cupon->folder.'/'.$cupon->file_name;
        if( \Storage::disk('sos')->exists($path_to_file)) {
            $file_path = (\Storage::disk('sos')->path($path_to_file));
            $file = pathinfo($file_path);
            $file_name = $file['filename'] . '.png';
            $img = new \Imagick($file_path);
            $img->setImageFormat('png');
            $img->scaleImage(800, 0);
            $img->writeImage(env('TEMP_FOLDER',''). '/tmp/' . $file_name);
           
        }
        return view('cupon.view',compact('cupon','file_name'));
    }
}
