<?php
$host = "localhost";
$user = "Admin";
$pw = "ErikHaSu10-7";
$bd = "edu_vial_db";

function Conect()
{
    $link=mysql_connect("localhost","Admin","ErikHaSu10-7");
    if(!$link)
        exit();
    $con=mysql_select_db("edu_vial_db",$link);
    if(!$con)
        exit();
    return $link;
}
?>