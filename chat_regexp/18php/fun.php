<?php

function bb_code($text)
{
    $pat = [
        '/\[b\](.*)\[\/b\]/',
        '/\[i\](.*)\[\/i\]/',
        '/\[u\](.*)\[\/u\]/',
        '/\[img\](.*)\[\/img\]/'

    ];

    $img = [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>",
        "<img src='$1'>"
    ];

    return  preg_replace($pat, $img, $text);
}

function smile($text)
{

    $pat = [
        '/(\:\-\))|(\:\))/',
        '/(\:\-\()|(\:\()/'
    ];

    $img = [
        "<img src='rrr.png' height='15'>",
        "<img src='s.jpg' height='15'>"
    ];

    return preg_replace($pat, $img, $text);
}

function cens($text)
{
    $pat = "/дурак|идиот/i";
    if (preg_match($pat, $text)) {
        return "Ругаться не красиво!";
    } else {
        return $text;
    }
}

function urls($text)
{
    $pat = [
        // '/http(s)\:\/\/.*\.(png|jpg|gif)/i',
        '/http(s)\:\/\/.*/i'

    ];

    $url = [
        // "<img src='$0'>",
        "<a href='$0'></a>"


    ];
    return preg_replace($pat, $url, $text);
}


function save_xml($agent, $ip, $name, $text, $date)
{

   $xml = "<msg><agent>$agent</agent><ip>$ip</ip><name>$name</name><text>$text</text><date>$date</date></msg>";
   return file_put_contents("chat.xml", $xml, FILE_APPEND);
};


function read_xml($text)
{
   $file = file_get_contents($text);
   $str = preg_match_all('/(.*?)<agent>(.*?)<\/agent>(.*?)<ip>(.*?)<\/ip>(.*?)<name>(.*?)<\/name>(.*?)<text>(.*?)<\/text>(.*?)<date>(.*?)<\/date>/ius', $file, $match);
   $arr = [];
   
   foreach ($match[0] as $key => $value) {
      
      $arr[$key]['agent'] = $match[2][$key];
      $arr[$key]['ip'] = $match[4][$key];   
       $arr[$key]['name'] = $match[6][$key];
      $arr[$key]['text'] = $match[8][$key];
        $arr[$key]['date'] = $match[10][$key];
   }
   return $arr;
}
