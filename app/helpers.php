<?php

function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

function voyager_image($path, $modifier = 'default'){
        $objPath = explode('/',$path);
        $subDirectory = $objPath[1];
        $objFile = explode('.',$objPath[2]);
        $model = $objPath[0];
        $imgName = $objFile[0];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
    if($modifier != 'default'){
        $img = $model.'/'. $subDirectory .'/'.$imgName.'-'.$modifier.'.'.$ext;
    }
    else{
        $img = $model.'/'.$imgName.'-'.$ext;
    }
    
    return $img;
}