
<ul class="header__nav">
    <Li class="nav__cancel">
        <button class="header__nav_item nav__cancel_sgn"><label class="toggle2" for="header__nav"></label>x</button>
    </Li>


    <?php if(!empty($page_data["pages"])): 
    foreach($page_data["pages"] as $key => $val): ?>
    
    <li><a href="/PHP_HW5/?page=<?php echo $val?>" class="header__nav_item nav_item'<?php echo $key ?>" title="page_<?php echo $val?>"><?php echo $val?></a></li>

    <?php endforeach;
    endif;?>

</ul>