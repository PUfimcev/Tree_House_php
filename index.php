<?php

require_once "./data/pagesData.php";

require_once "./functions.php";

if(function_exists("get_blogs")){
    $blog_msgs = get_blogs($page_data["blogs"]);
}

if(function_exists("get_portfolio")){
    $portfolio = get_portfolio($page_data["portfolio"]);
}


require_once "./layouts/header.php";
require_once "./layouts/main.php";
require_once './layouts/footer.php'; 