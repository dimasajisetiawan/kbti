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
        return kelas::get();
    }

    public function kirim_notif(Request $request)
    {
        $validatedData = $request->validate([
            'kode_tugas' => 'required',
            'keterangan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'file_terlampir' => 'required',
            'id_daftar_tugas' => 'required',
        ]);
        tugas::insert($validatedData);
        $email = 'dimasareng1@gmail.com';
        $data = [
            'title' => 'Ada Tugas!!',
            'isi' => "Ada tugas Terbaru dari kode tugas ".$request->kode_tugas." dimulai pada "
            .$request->tanggal_mulai." sampai ".$request->tanggal_selesai

        ];
        Mail::to($email)->send(new SendMail($data));
        return response()->json(
            ["Result" =>
                [
                    "ResultCode" => 0,
                    "ResultMessage" => "Tugas Terbaru Telah Dibuat"]
            ],200);
    }
}
