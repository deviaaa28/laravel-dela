<?php
// memperkenalkan 
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
        // view : untuk pemanggilan data
    }
    
    public function store(request $request)
    {
        $validated = $request->validate([
            'nama' =>'required',
            'alamat' =>'required',
            'jeniskelamin' =>'required',
        ], [
            'nama.required'=> "Kolom nama harus di isi",
            'alamat.required'=> "Kolom alamat harus di isi",
            'jeniskelamin.required'=> "kolom jeniskelamin harus di isi",

        ]);

        // untuk menyimpan data siswa
        //data yang di simpan adalah nama, alamat dan jenis kelamin
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

    public function edit($id)
    {
        // menemukan siswa berdasarkan id
            $data =Student::findOrFail($id);

        // mengirimkan data berdasarkan id
        return view('edit-siswa', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'nama' =>'required',
            'alamat' =>'required',
            'jeniskelamin' =>'required',
        ], [
            'nama.required'=> "Kolom nama harus di isi",
            'alamat.required'=> "Kolom alamat harus di isi",
            'jeniskelamin.required'=> "kolom jeniskelamin harus di isi",

        ]);

        $data = Student::findOrFail($id);

        $data->update([
            'nama' => $request->nama,
            'alamat' =>$request->alamat,
            'jeniskelamin' =>$request->jeniskelamin,
        ]);
        return redirect()->route('siswa');
    }

}
