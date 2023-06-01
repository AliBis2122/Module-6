<?php

$textStorage = [];

function add($title, $text, &$textStorage)
{
    $textStorage[] = ['title' => $title, 'text' => $text];
}

add("day", "night", $textStorage);
add("summer", "winter", $textStorage);

var_dump($textStorage);

function remove($i, &$textStorage)
{
    if(array_key_exists($i, $textStorage)) {
        unset($textStorage[$i]);
        echo "true\n";
    } else {
        echo "false\n";
    }
}

remove(0, $textStorage);
remove(5, $textStorage);

var_dump($textStorage);

function edit(int $i, array &$textStorage, string $title = '', string $text = '')
{
    $a = array_key_exists($i, $textStorage);
    if ($a and $title != ''){
        $textStorage[$i]['title'] = $title;
    }
    if ($a and $text != ''){
        $textStorage[$i]['text'] = $text;
    }
    if ($a == true){
        echo "true\n";
    } else {
        echo "false\n";
    }
}

edit(1, $textStorage, 'tik', '');
edit(9, $textStorage, 'tak', '');

var_dump($textStorage);
