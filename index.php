<?php
include 'Model.php';

$lord = new PaperBookFactory();
echo($lord->bookBuilder('Lord of the Rings','Tolkien'));

echo("<br><br>");

$ebook = new EBookFactory;
echo($ebook->bookBuilder('Lord of the Rings','Tolkien'));
?>