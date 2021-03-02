<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function get(){
        //$data = DB::table('artikel')->get();
        $data = Artikel::get();
        return response()->json($data);
    }

    public function add(Request $request){
        //validasi
        $this->validate($request,[
                'judul' => 'required',
                'foto' => 'file',
                'isi' => 'required'
        ]);

        //upload foto
        if($request->file('foto')){//jika inputan foto ada isinya (ngambil key dari body key name)
            $name = time().$request->file('foto')->getClientOriginalName();// setting nama yang nanti masuk ke direktori kita
            $request->file('foto')->move('uploads',$name);
             //key untuk post value
            $judul  = $request->judul; //judul setelah $request adalah key nya
            $foto   = url('uploads'.'/'.$name);
            $isi    = $request->isi;
        }else{
            $judul  = $request->judul;
            $foto   = 'default.png';
            $isi    = $request->isi;
        }

       

        //method create akan mengisi data created_at dan updated_at secara otomatis, berbeda dengan insert yang mengisi manual
        $add = Artikel::create([
            'judul' => $judul,
            'foto' => $foto,
            'isi' => $isi
        ]);

        if($add){ //jika berhasil
            return response()->json([
                'status'    => 'Berhasil menambahkan data',
                'data'      => $add
            ]);
        }else{
            return response()->json([
                'status'    => 'Gagal menambahkan data',
                'data'      => null
            ]);
        }
    }

    //update
    public function update(Request $request, $id){
        //validasi
        $this->validate($request,[
                'judul' => 'required',
                'foto' => 'required',
                'isi' => 'required'
        ]);

        //key untuk post value
        $judul  = $request->judul; //judul setelah $request adalah key nya
        $foto   = $request->foto;
        $isi    = $request->isi;

        $artikel = Artikel::find($id);
        //method update akan mengubah data
        $update = $artikel->update([
            'judul' => $judul,
            'foto' => $foto,
            'isi' => $isi
        ]);

        if($update){ //jika berhasil
            return response()->json([
                'status'    => 'Berhasil mengubah data',
                'data'      => $artikel
            ]);
        }else{
            return response()->json([
                'status'    => 'Gagal mengubah data',
                'data'      => null
            ]);
        }
    }

    public function delete($id){
        $artikel = Artikel::find($id);
        $delete = $artikel->delete();

        if($delete){ //jika berhasil
            return response()->json([
                'status'    => 'Berhasil menghapus data',
                'data'      => $artikel
            ]);
        }else{
            return response()->json([
                'status'    => 'Gagal menghapus data',
                'data'      => null
            ]);
        }
    }
}
