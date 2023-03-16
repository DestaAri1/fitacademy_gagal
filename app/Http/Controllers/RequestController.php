<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    // controller untuk mengirim ebook dan menyimpan email ke database
    public function addRequest(Request $request)
    {
        $data = [
            'email' => $request->email,
            'jenis' => $request->jenis,
        ];

        $email["email"] = $request->email;
        $email["title"] = "From admin";
        $email["body"] = "ini isi";

        switch ($data["jenis"]) {
            case "perusahaan":
                $files = [
                    public_path('files/Employee 101 - Cara Ampuh dan Efektif Meningkatkan Kinerja Karyawan.pdf'),
                ];
                break;
            case "contentCreator":
                $files = [
                    public_path('files/Content Creator Guide - Asik Mengedukasi dengan Metode Microlearning.pdf'),
                ];
                break;
            case "netizen":
                $files = [
                    public_path('files/Career Path - Sukses Menjadi Seorang Copywriter.pdf'),
                ];
                break;
            default:
                dd("jenis tidak ada");
                break;
        }

        Mail::send('landingPage.landingPerusahaan', $email, function($message)use($email, $files) {
            $message->to($email["email"], $email["email"])
                    ->subject($email["title"]);

            foreach ($files as $file){
                $message->attach($file);
            }

        });

        if(ModelsRequest::where('email', $request->email)->touch() && ModelsRequest::where('jenis', $request->jenis)->touch()) {
            return redirect()->back();
        } else {
            ModelsRequest::create($data);
        }

        return redirect()->back();
    }
}
