<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kamar;
use App\Models\pembeli;
use App\Models\tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = kamar::all();
        return view('index', compact('kamar'));
    }

    public function tambah()
    {
        return view('tambahKamar');
    }
    public function datapembeli()
    {
        $item = pembeli::all();
        return view('data.datapembeli', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function login()
    {
        return view('log.login');
    }

    public function loginproses(Request $request)
    {
        $login = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($login)){
            return redirect('home');
        }else{
            return view('log.login');
        }
    }

    public function regis()
    {
        return view('log.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        User::create([
            'email'=>$validated['email'],
            'password'=> Hash::make($validated['password'])
        ]);
    }

    public function ttgkami()
    {
        $item = tentang::all();

        return view('tentang.tentangkami', compact('item'));
    }

    public function ttg()
    {
        return view('tentang.tmbhttg');
    }

    public function tmbhttg(Request $request)
    {
        $request->validate([
            'Nama'=>'required',
            'Kelas'=>'required',
            'Jurusan'=>'required',
            'NoAbsen'=>'required',
            'Gambar'=>'required'
        ]);

        $image = time().'.'.$request->Gambar->extension();
        $request->Gambar->move(public_path('gambar'),$image);

       $new = new tentang;
       $new->Nama = $request->Nama;
       $new->Kelas = $request->Kelas;
       $new->Jurusan = $request->Jurusan;
       $new->NoAbsen = $request->NoAbsen;
       $new->Gambar = $image;
       $new->save();


        return redirect('tmbhtentang');
    }

    public function listpembeli()
    {
        $pembeli = pembeli::all();
        return view('list.listpembeli',compact('pembeli'));
    }

    public function listkamar()
    {
        $kamar = kamar::all();
        return view('list.listkamar',compact('kamar'));
    }
    public function mail(Request $request)
    {
        $email = $request->input('email');
        $isi = $request->input('isi');

        Mail::raw($isi, function ($message) use ($email) {
            $message->subject($email);
            $message->to('seaa9012@gmail.com');
        });
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
            'namaKamar'=>'required',
            'harga'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required'
        ]);
        $image = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('gambar'),$image);

        $new = new kamar;
        $new->namaKamar = $request->namaKamar;
        $new->harga = $request->harga;
        $new->deskripsi = $request->deskripsi;
        $new->gambar = $image;
        $new->save();

        return redirect('tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = kamar::find($id);
        return view('pemesanan',compact('item'));
    }

    public function pesan()
    {
        return view('pesan');
    }
    public function pembayaran($id)
    {
        $item = kamar::find($id);
        return view('transaksi.pembayaran',compact('item'));
    }
    public function bayar(Request $request)
    {
        $request->validate([
            'namaKamar'=>'required',
            'namaPembeli'=>'required',
            'noHP'=>'required',
            'alamat'=>'required',
            'jumlah'=>'required',
            'CekIn'=>'required',
            'jumlahHari'=>'required',
            'totalHarga'=>'required',
            'idPembayaran'=>'required'
        ]);

        $new = new pembeli;
        $new->namaKamar = $request->namaKamar;
        $new->namaPembeli = $request->namaPembeli;
        $new->noHP = $request->noHP;
        $new->alamat = $request->alamat;
        $new->jumlah = $request->jumlah;
        $new->CekIn = $request->CekIn;
        $new->jumlahHari = $request->jumlahHari;
        $new->totalHarga = $request->totalHarga;
        $new->idPembayaran = $request->idPembayaran;
        $new->save();
        
        return redirect('home');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
