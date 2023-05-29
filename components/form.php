<div class="form_confirm">
<?php function verify_form()
{
    if(empty($_REQUEST["user_name"]) && empty($_REQUEST["email"]) && empty($_REQUEST["tel"]) && empty(strip_tags($_REQUEST["message"]))) header("Location: ./?page=contacts");

    $verify_phone = function()
    {
        if(empty($_REQUEST["tel"])) return;
        $regExp = "/^\+?\d{1,3}\s?\(?\d{2,3}\)?\s?\d{3}\-?\s?\d{2}\-?\s?\d{2}/im";
    
        return (preg_match($regExp, $_REQUEST["tel"])) ? true : false;
    };

    $verify_email = function()
    {
        if(empty($_REQUEST["email"])) return;
        $result = filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL);

        return ($result) ? true : false;
    };

    $verify_mesg = function()
    {
        if(empty($_REQUEST["message"])) return;

        return (mb_strlen(strip_tags($_REQUEST["message"])) > 5 && mb_strlen(strip_tags($_REQUEST["message"])) < 250) ? true : false;
    };

    return ($verify_email() && $verify_phone() && $verify_mesg()) ? true : false;
}

$form_data = file_get_contents("./data/form_data.txt");

$get_put_data = function($func) use ($form_data)
{
    $form_data = unserialize($form_data);
    if(empty($form_data)) $form_data = [];

    if($func()) array_push($form_data, $_REQUEST);
    $form_data_new = serialize($form_data);
    file_put_contents("./data/form_data.txt", $form_data_new);
};

$get_put_data('verify_form');


if(verify_form()){
    echo "<span style=\"color: green; font-size: 45px;\">Your request's been sent successfully!</span>";
    header("Refresh: 6; url=./?page=contacts");
} else {
    echo "<span style=\"color: red; font-size: 45px;\">You're input data icorrectly!</span>";
    header("Refresh: 6; url=./?page=contacts");
}

unset($_REQUEST);
?>
</div>