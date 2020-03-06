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
    $pat = "/дурак|идиот/";
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
