<?php

namespace App\Http\Controllers;

use App\Kelembagaan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
use File;

class KelembagaanController extends Controller
{

    public $path;
    public $dimensions;


    public function __construct()
    {
        //DEFINISIKAN PATH
        $this->path = storage_path('app/public/images');
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
        $kelembagaan = Kelembagaan::all();
        return view('kelembagaan.index', compact('kelembagaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelembagaan.create');
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
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'kelembagaan' => 'required|string',
            'foto'  => 'required | mimes:png,jpg',
        ]);


        // JIKA FOLDERNYA BELUM ADA
        if (!File::isDirectory($this->path)) {
            //MAKA FOLDER TERSEBUT AKAN DIBUAT
            File::makeDirectory($this->path);
        }

        // MENGAMBIL FILE IMAGE DARI FORM
        $file = $request->file('foto');
        // MEMBUAT NAME FILE DARI GABUNGAN TIMESTAMP DAN UNIQID()
        $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        //UPLOAD ORIGINAN FILE (BELUM DIUBAH DIMENSINYA)
        Image::make($file)->save($this->path . '/' . $fileName);

        //LOOPING ARRAY DIMENSI YANG DI-INGINKAN
        //YANG TELAH DIDEFINISIKAN PADA CONSTRUCTOR
        foreach ($this->dimensions as $row) {
            //MEMBUAT CANVAS IMAGE SEBESAR DIMENSI YANG ADA DI DALAM ARRAY
            $canvas = Image::canvas($row, $row);
            //RESIZE IMAGE SESUAI DIMENSI YANG ADA DIDALAM ARRAY
            //DENGAN MEMPERTAHANKAN RATIO
            $resizeImage  = Image::make($file)->resize($row, $row, function ($constraint) {
                $constraint->aspectRatio();
            });

            //CEK JIKA FOLDERNYA BELUM ADA
            if (!File::isDirectory($this->path . '/' . $row)) {
                //MAKA BUAT FOLDER DENGAN NAMA DIMENSI
                File::makeDirectory($this->path . '/' . $row);
            }
            //MEMASUKAN IMAGE YANG TELAH DIRESIZE KE DALAM CANVAS
            $canvas->insert($resizeImage, 'center');
            //SIMPAN IMAGE KE DALAM MASING-MASING FOLDER (DIMENSI)
            $canvas->save($this->path . '/' . $row . '/' . $fileName);
        }

        //SIMPAN DATA IMAGE YANG TELAH DI-UPLOAD
        Kelembagaan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'kelembagaan' => $request->kelembagaan,
            'foto' => $fileName
        ]);
        return redirect()->back()->with(['status' => 'Data Berhasil Di Tambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelembagaan  $kelembagaan
     * @return \Illuminate\Http\Response
     */
    public function show(Kelembagaan $kelembagaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelembagaan  $kelembagaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelembagaan $kelembagaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelembagaan  $kelembagaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelembagaan $kelembagaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelembagaan  $kelembagaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelembagaan $kelembagaan)
    {
        //
    }
}
