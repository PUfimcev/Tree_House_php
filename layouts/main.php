<div class="main">

<?php 
if(isset($_REQUEST['page']) && in_array($_REQUEST['page'], $page_data["pages"]) && !empty($_REQUEST['page']) && !empty($page_data["pages"])){
    require_once "./components/" . $_REQUEST['page'] . ".php";
} elseif (isset($_REQUEST['blog']) && !in_array($_REQUEST['blog'], $page_data["blogs"]) && !empty($_REQUEST['blog']) && !empty($page_data["blogs"])) {
    require_once "./components/blog.php";
} elseif(isset($_REQUEST['key']) && !empty($_REQUEST['key'])){
    require_once "./components/form.php";
} else {
    require_once "./components/404.php";
}

?>

</div>