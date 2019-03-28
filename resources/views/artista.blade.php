<?php
     $url = "http://musicbrainz.org/ws/2/artist?query=queen";
     $c = curl_init( $url );
     curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json','User-Agent:Laravel/5.7'));
     curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
     $res = curl_exec($c);
     $dades = json_decode($res,true);
     var_dump($dades["artists"]);
?>