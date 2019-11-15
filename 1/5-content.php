<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
    <div class="container">
        <div class="row">
            <div class="ramid1">
                <h4><b>YOU LOVE OUR THEME</b></h4>
                <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
                <button class="btn-color">PURCHARE NOW</button>
            </div>
           
        </div>
    </div> <footer class="fter">@Copyright 2019<a> nguyenthitamnhu.</a> All right reseved</footer>
</div>