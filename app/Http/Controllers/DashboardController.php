<?php

namespace App\Http\Controllers;

use App\Models\krs;
use App\Models\kelas;
use App\Models\tugas;
use App\Mail\SendMail;
use App\Models\daftar_tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role_users==0){
            return view('dashboard.index',[
                'data' => kelas::where('id_user',auth()->user()->id_user)->get()
            ]);
        }else{
            return view('dashboard.index',[
                'data' => krs::where('id_user',auth()->user()->id_user)->get()
            ]);
        }
    }

    public function index_mhs($id)
    {
        return view('dashboard.tugas_mhs.index',[
            'data' => krs::with(['kelas' => function($query) use ($id) {
                $query->where('kode_mk', $id);
            }])->where('id_user',auth()->user()->id_user)->get()
        ]);
    }

    public function index_dsn($id)
    {
        return view('dashboard.tugas_dsn.index',[
            'data' => kelas::where('id_user',auth()->user()->id_user)->where('kode_mk',$id)->get()
        ]);
    }

    public function kirim_notif($id,$kodemk,Request $request)
    {
        if($request->isMethod('POST')){
            $validatedData = $request->validate([
                'kode_tugas' => 'required',
                'keterangan' => 'required',
                'tanggal_mulai' => 'required',
                'tanggal_selesai' => 'required',
                'file_terlampir' => 'required',
            ]);
            $validatedData['id_daftar_tugas'] = $id;
            tugas::insert($validatedData);
            $email = 'dimasareng1@gmail.com';
            $data = [
                'title' => 'Ada Tugas!!',
                'isi' => "Ada tugas Terbaru dari kode tugas ".$request->kode_tugas." dimulai pada "
                .$request->tanggal_mulai." sampai ".$request->tanggal_selesai

            ];
            Mail::to($email)->send(new SendMail($data));
            return redirect('/dashboard/daftar_kelas/'.$kodemk)->with('success','Data Kelas Ditambahkan!');
        }else{
            return view('dashboard.tugas_dsn.insert',[
                'id' => $id,
                'kodemk' => $kodemk
            ]);
        }
    }
}
