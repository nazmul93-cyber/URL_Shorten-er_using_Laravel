<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shorturl;

class UrlController extends Controller
{
    public function generateShortUrl() {            // main method to generate the shortlink

        $result = base_convert(rand(1000,99999), 10, 36);
        $data = Shorturl::whereShort($result)->first();

        if ($data != null) {

            $this->generateShortUrl();
        }

        return $result;
    }



    public function short(Request $rqst) {      // this method makes entry of shorturl row if not exists already


    // first check if it works
        // dd($rqst->all());

        $url = Shorturl::whereUrl($rqst->url)->first();

        if ($url == null) {

            $short = $this->generateShortUrl();

            Shorturl::create([

                'url' => $rqst->url,
                'short' => $short
            ]);

            $url = Shorturl::whereUrl($rqst->url)->first();

        }

        return view('url.short_url',['url'=>$url]);
    }



    public function shortlink($link) {      // this method uses the shortlink to redirect the original url  

        $url = Shorturl::whereShort($link)->first();
        return redirect($url->url);
    }



}


