<?php

// // echo $_SERVER['HTTP_HOST'];

// echo $_SERVER['REQUEST_URI'];

$curentUrl = urldecode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

echo $curentUrl;
?>


<div>
    <div class="note">

    </div>
    <div class="item">

    </div>
</div>

<style>
    .note:hover > .item
    {
        display: block;
    }
</style>