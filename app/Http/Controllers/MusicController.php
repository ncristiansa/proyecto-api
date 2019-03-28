<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscarArtista($artista)
    {
        $url = "http://musicbrainz.org/ws/2/artist?query=".$artista;
        $c = curl_init( $url );
        curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($c);
        $dades = json_decode($res,true);
        return view("vista1", array('dades' => $dades));
    }
    public function mostrarArtista()
    {
        $url = "http://musicbrainz.org/ws/2/artist?query=queen";
        $c = curl_init( $url );
        curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($c);
        $dades = json_decode($res,true);
        return view("artista", array('dades' => $dades));
    }

}
