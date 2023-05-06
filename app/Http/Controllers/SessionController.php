<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Request $_request){
        $_request->session()->put('NANIA', 'POLITEKNIK NEGERI JEMBER');
        echo "Data Telah ditambahkan ke session";
    }
    public function show(Request $request){
        if($request->session()->has('NANIA')){
            echo $request->session()->get('NANIA');
        } else {
            echo 'Tidak ada data dalam session.';
        }
    }
    public function delete(Request $request){
        $request->session()->forget('NANIA');
        echo "Data telah dihapus dari session";
    }

}