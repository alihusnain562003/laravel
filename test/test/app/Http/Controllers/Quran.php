<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Quran extends Controller
{
    // Fetch metadata for all surahs
    public function getcontents()
    {
        $response = Http::get("https://api.alquran.cloud/v1/meta");
        $surahData = $response["data"]["surahs"]["references"];

        return view("surah", ["alldata" => $surahData]);
    }

    // Fetch details for a specific surah including ayahs and recitations
    public function getcontentsDetails($snum)
    {
        // Fetch the surah with audio recitation from Sudais
        $response = Http::get("https://api.alquran.cloud/v1/surah/$snum/ar.abdurrahmaansudais");

        // Get ayahs and their recitation audio
        $ayahs = $response["data"]["ayahs"];

        return view("read", ["alldatas" => $ayahs]);
    }
}
