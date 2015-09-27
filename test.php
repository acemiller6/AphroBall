<?php

if(file_exists('./ss.xml')) {
  $xml  = simplexml_load_file('./ss.xml');
  //print_r($xml);

  // echo "$xml->gms[0]['w']\n";
  // echo "$xml->@attributes\n";
  // echo "$xml->w\n";
  foreach($xml->gms[0]->attributes() as $a => $b) {
    echo $a, '="',$b,"\"\n";
  }

  for($i=0;$i<16;$i++) {
    $x=0;
    echo "<br>";
    // foreach($xml->gms[0]->g[$i]->attributes() as $a => $b) {
    //   $var[$x] = $a;
    //   $val[$x] = $b;
    //   echo $a,"=\"",$b,"\"\n";
    //   $x++;
    // }
    $home = $xml->gms[0]->g[$i]['h'];
    $vis = $xml->gms[0]->g[$i]['v'];
    $hs = $xml->gms[0]->g[$i]['hs'];
    $vs = $xml->gms[0]->g[$i]['vs'];
    echo "$vis ($vs) vs $home ($hs)<br>";
  }
  echo "<br>";
} else {
  exit('Failed to open ss.xml');
}
?>
