<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function getData()
    {
        return [
            "data" => [
                "data_master" => Master::all(),
                "data_user" => User::where("role", "stand")->get(),
            ]
        ];
    }

    public function update(Request $request, $id)
    {
        $dataUpdated = [];
        try {
            $master = Master::find($id);
            $directory = "3DVista/master-gambar/data-{$id}";

            // Logo Atas Kiri
            if ($request->hasFile("logo_atas_kiri")) {
                $logoAtasKiri = $request->file("logo_atas_kiri");
                $namaFileLogoAtasKiri = "logo_atas_kiri_" . date("Ymdhis") . "." . $logoAtasKiri->extension();
                $logoAtasKiri->move(public_path($directory), $namaFileLogoAtasKiri);
                $dataUpdated["logo_atas_kiri"] = "/{$directory}/{$namaFileLogoAtasKiri}";
            }

            // Logo Text
            if ($request->hasFile("logo_text")) {
                $logoAtasKanan = $request->file("logo_text");
                $namaFileLogoAtasKanan = "logo_text_" . date("Ymdhis") . "." . $logoAtasKanan->extension();
                $logoAtasKanan->move(public_path($directory), $namaFileLogoAtasKanan);
                $dataUpdated["logo_text"] = "/{$directory}/{$namaFileLogoAtasKanan}";
            }

            // Logo Rak Atas
            if ($request->hasFile("logo_rak_atas")) {
                $logoRakAtas = $request->file("logo_rak_atas");
                $namaFileLogoRakAtas = "logo_rak_atas_" . date("Ymdhis") . "." . $logoRakAtas->extension();
                $logoRakAtas->move(public_path($directory), $namaFileLogoRakAtas);
                $dataUpdated["logo_rak_atas"] = "/{$directory}/{$namaFileLogoRakAtas}";
            }

            // Logo Rak Tengah
            if ($request->hasFile("logo_rak_tengah")) {
                $logoRakTengah = $request->file("logo_rak_tengah");
                $namaFileLogoRakTengah = "logo_rak_tengah_" . date("Ymdhis") . "." . $logoRakTengah->extension();
                $logoRakTengah->move(public_path($directory), $namaFileLogoRakTengah);
                $dataUpdated["logo_rak_tengah"] = "/{$directory}/{$namaFileLogoRakTengah}";
            }

            // Logo Rak Bawah
            if ($request->hasFile("logo_rak_bawah")) {
                $logoRakBawah = $request->file("logo_rak_bawah");
                $namaFileLogoRakBawah = "logo_rak_bawah_" . date("Ymdhis") . "." . $logoRakBawah->extension();
                $logoRakBawah->move(public_path($directory), $namaFileLogoRakBawah);
                $dataUpdated["logo_rak_bawah"] = "/{$directory}/{$namaFileLogoRakBawah}";
            }

            // Logo Tengah
            if ($request->hasFile("logo_tengah")) {
                $logoTengah = $request->file("logo_tengah");
                $namaFileLogoTengah = "logo_tengah_" . date("Ymdhis") . "." . $logoTengah->extension();
                $logoTengah->move(public_path($directory), $namaFileLogoTengah);
                $dataUpdated["logo_tengah"] = "/{$directory}/{$namaFileLogoTengah}";
            }

            // Link PDF
            if ($request->hasFile("link_pdf")) {
                $linkPdf = $request->file("link_pdf");
                $namaFileLinkPdf = "link_pdf_" . date("Ymdhis") . "." . $linkPdf->extension();
                $linkPdf->move(public_path($directory), $namaFileLinkPdf);
                $dataUpdated["link_pdf"] = "/{$directory}/{$namaFileLinkPdf}";
            }

            // Link Youtube
            if ($request->has("link_youtube")) {
                $dataUpdated["link_youtube"] = $request->link_youtube;
            }

            // Link Browser
            if ($request->has("link_browser")) {
                $dataUpdated["link_browser"] = $request->link_browser;
            }

            // Link Whatsapp
            if ($request->has("link_whatsapp")) {
                $dataUpdated["link_whatsapp"] = $request->link_whatsapp;
            }

            $master->update($dataUpdated);
            return back();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
