<?php

namespace App\Http\Controllers;

use App\Bumdes;
use Carbon\Carbon;

// Import Image Carbon , Dan FIle
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Gate ;
class BumdesController extends Controller
{

    public $path;
    public $dimensions;

    // DEFINISIKAN CONStrUCTOR JIKA CLASSS DI PANGGIL
    // PROPERTIY AKAN SEDIAKAN SECARA LANGSUNG
    public function __construct()
    {
        // Cek Status User Apakah Admin Apa Bukan
        $this->middleware(function($request , $next){
            if(Gate::allows('isAdmin')) return $next($request);
            abort(403 , 'Maaf Anda Tidak Memiliki Hak Akses Untuk Halaman Ini');
        });

        //DEFINISIKAN PATH
        $this->path = storage_path('app/public/bumdes');
        //DEFINISIKAN DIMENSI
        $this->dimensions = ['245', '300', '500'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $bumdes = Bumdes::all();
        return view('bumdes.index', compact('bumdes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('bumdes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $request->validate([
            'deskripsi' => 'required|string',
            // Validasi Hanya Akan Menerima Yang bertipe png , jpg , jpeg
            'foto' => 'required | mimes:png,jpg,jpeg',
        ]);

        // JIKA FOLDERNYA BELUM ADA
        if (!File::isDirectory($this->path)) {
            //MAKA FOLDER TERSEBUT AKAN DIBUAT
            File::makeDirectory($this->path);
        }

        // MENGAMBIL FILE FOTO DARI FORM MENJADI REQUEST
        $file = $request->file('foto');
        // MEMBUAT NAME FILE DARI GABUNGAN TIMESTAMP DAN UNIQID()
        $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        //UPLOAD ORIGINAN FILE (BELUM DIUBAH DIMENSINYA)
        Image::make($file)->save($this->path . '/' . $fileName);

        //*  LOOPING PROPERTY DIMENSI YANG TELAH DI DEFINISAKAN DI CONSTRUCTOR
        foreach ($this->dimensions as $row) {
            // * MEMBUAT CANVAS IMAGE SEBESAR DIMENSI YANG ADA DI DALAM ARRAY
            $canvas = Image::canvas($row, $row);
            // * RESIZE IMAGE SESUAI DIMENSI YANG ADA DIDALAM ARRAY
            // * DENGAN MEMPERTAHANKAN RATIO
            // * Setalah iterasi dimensi di Dapat Kan Masuka Dalam Fungsi Rezie($Row $ROW , callBack() / closerure)
            // * Buat Prameter Yang Akan Di Terima Dari Fungsi Reize
            $resizeImage = Image::make($file)->resize($row, $row, function ($constraint) {
                // ! FUNGSI INI YANG MEMBUAT MEMPERTAHAN KAN RATIO
                $constraint->aspectRatio();
            });

            // * CEK JIKA FOLDERNYA BELUM ADA
            // * Ini akan Membuat Folder Berberapa Ratio
            if (!File::isDirectory($this->path . '/' . $row)) {
                //MAKA BUAT FOLDER DENGAN NAMA DIMENSI
                File::makeDirectory($this->path . '/' . $row);
            }

            //* MEMASUKAN IMAGE YANG TELAH DIRESIZE KE DALAM CANVAS
            $canvas->insert($resizeImage, 'center');

            // * SIMPAN IMAGE KE DALAM MASING-MASING FOLDER (DIMENSI)
            $canvas->save($this->path . '/' . $row . '/' . $fileName);
        }

        // * Setalah Semua Telah Di Lakukan Simpan Gamar nya
        Bumdes::create([
            // Ini Yang Akan Di kirim Dari Form
            'deskripsi' => $request->deskripsi,
            // !  Memasukan Nama File Yang Telah Di Definisikan DI varibale $fileName
            'foto' => $fileName,
        ]);

        // Setalah Semua Sudah Redirect KeHalaman Ini Kembali
        return redirect()->back()->with('status', 'Data Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */

    public function show(Bumdes $bumdes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */

    public function edit(Bumdes $bumdes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Bumdes $bumdes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Bumdes::find($id)->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }
}
