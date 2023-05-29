<?php

function get_blogs($blogs = []){
    
    $str_blog = '';

    foreach($blogs as $key => $val){
        if(empty($val["header"])) continue;
        $str_blog .= '<li><a href="/PHP_HW5/?blog='.$key.'" title="blog' .$val["header"] .' ">' . $val["header"] . '</a></li>';
    }

    return (!empty($blogs) || !isset($blogs)) ? $str_blog : "Blogs are not found";
    
}

function get_portfolio($portfolio = []){
    
    $str_items = '';

    foreach($portfolio as $key => $val){
        if(empty($val["src"])) continue;
        $str_items .= '<li><a target="_blank" href="'. $val["src"] .'" title="Portfolio' .$val["text"] .' "></a><p>' . $val["text"] . '</p></li>';
    }

    return (!empty($portfolio) || !isset($portfolio)) ? $str_items : "Portfolio is not found";
    
}