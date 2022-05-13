<?php

include "listAuthors.php";
include "listBook.php";

//check if there is or not a search bar
$search_key = isset($_POST['search_key'])?
$_POST['search_key']:'';

if ($search_key == NULL)
{
    echo"<script>alert('Please key in your search key first!');</script>";
}
else
{

}

//search the databases listAuthors and listBook
$sql="SELECT* FROM listAuthors, listBook WHERE listAuthors.Authors_name  OR listBook.Book_name LIKE '%". 
$search_key. "%'";
$result = mysqli_query($listAuthors, $listBook, $sql);

if (mysqli_num_rows($result) <=0 )
{
    echo"<script>alert('No Result!');</script>";
}
else
{
    
}

?>