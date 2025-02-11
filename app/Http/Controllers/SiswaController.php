<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SiswaController extends Controller
{
    public function index(){
        
    $siswa = Student::all();
 
     return view('siswa', compact('siswa'));
    }


    public function add(){
        return view('add');
    }
    // untuk menyimpan data siswa
    //data yang di simpan adalah nama, alamat dan jenis kelamin
    public function store(request $request){
        $data =Student::create([
            'nama' => $request->nama,
            'alamat' =>$request->alamat,
            'jeniskelamin' =>$request->jeniskelamin,
        ]) ;

        // menggarahkan kembali ke halaman siswa setelah berhasil simpan data
        return redirect()->route('siswa');
        }
        public function destroy($id)
        {

            //menemukan siswa berdasarkan id 
            $data =Student::find($id);
            //menghapus siswa berdasarkan id yang di temukan
            $data->delete();
            return redirect()->route('siswa');
        }

        public function edit($id){

        // menemukan siswa berdasarkan id
        $data =Student::findOrFail($id);

        // mengirimkan data berdasarkan id
        return view('edit.siswa',compact('data'));
        }

}
