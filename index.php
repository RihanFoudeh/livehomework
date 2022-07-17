<?php 

define ("ARR",[1,2,3,'a']);

// var_dump (ARR);  

$html_open_tag='<h1>';

$html_close_tag='</h1>';

$html_title='Hello';

$Final_tag= '';

$Final_tag .=$html_open_tag;
$Final_tag .=$html_title;
$Final_tag .=$html_close_tag;

var_dump ($Final_tag);



?>