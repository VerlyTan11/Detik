<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\komentar;
use App\Models\admin;
use App\Models\tbadmin;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $comment = komentar::all();
        $kategori = tbadmin::all();
        $heading = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Heading');
        $subheading = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Sub-Heading');
        $header1 = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Header1');
        $header2 = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Header2');

        return view('index', compact(
            'comment','heading','subheading','header1','header2','kategori'
        ));
    }

    public function store(Request $request)
    {
        $model['user'] = $request->user;
        $model['komentar'] = $request->komentar;
        $model['created_at'] = date('Y-m-d H:i:s');
        Komentar::insert($model);

        return back();
    }

    public function index1()
    {
        $judul = tbadmin::all();
        $kategori = tbadmin::all();

        return view('admin1', compact(
            'judul','kategori'
        ));
    }

    public function create()
    {
        $judul = tbadmin::all();

        return view('admin', compact(
            'judul'
        ));
    }

    public function store1(Request $request)
    {
        $model['email'] = $request->email;
        $model['img'] = $request->img;
        $model['judul'] = $request->judul;
        $model['kategori'] = $request->kategori;
        $model['tipe'] = $request->tipe;
        $model['created_at'] = date('Y-m-d H:i:s');
        tbadmin::insert($model);

        return redirect()->back();
    }

   public function edit($id)
    {
        $dataedit = tbadmin::find($id);
        return view('edit', compact(
            'dataedit'
        ));
    }

    public function update(Request $request, $id)
    {
        $dataupdate = tbadmin::find($id);
        $dataupdate->email = $request->email;
        $dataupdate->judul = $request->judul;
        $dataupdate->img = $request->img;
        $dataupdate->tipe = $request->tipe;
        $dataupdate->kategori = $request->kategori;
        $dataupdate->update();

        return redirect('/admin')->with('alert', 'Update Telah Berhasil!');
    }

    public function hapus($id)
    {
        $new = tbadmin::destroy($id);
        return redirect('/admin');
    }

    public function kategori($kategori)
    {
        //Kategori1 buat ambil kategori yang dropdown
        $category = tbadmin::all();

        //Findkategori ambil dari kategori yang di select di dropdown
        $findkategori = DB::table('tbadmin')->where('kategori', '=', $kategori)->get();
        
        $heading = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Heading');
        $subheading = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Sub-Heading');
        $header1 = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Header1');
        $header2 = tbadmin::all('id', 'email', 'img', 'judul', 'kategori', 'tipe', 'created_at') -> where('tipe', 'Header2');

        // dd($findkategori);
        return view('kategori', compact(
            'category','findkategori','heading','subheading','header1','header2'
        ));
    }
}
