<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mob=$_POST['mobile'];
$add=$_POST['address'];
$email=$_POST['emailid'];
$food=$_POST['food'];


if($email && $fname && $mob && $add && $lname && $food ){
    //Connect to mysql server 
    $link = mysql_connect('localhost', 'root', ''); 
    //Check link to the mysql server 
    if(!$link) { 
    die('Failed to connect to server: ' . mysql_error()); 
    } 
    //Select database 
    $db = mysql_select_db('food_bank'); 
    if(!$db) { 
    die("Unable to select database"); 
    } 
    else{
        if($_POST['guest'] == "one"){
        $query="INSERT INTO seller ( fname, lname, nop, food, address, email, mobile, sold)
                VALUES ('$fname', '$lname', 1, '$food ','$add', '$email', '$mob', 0)";
        }
        if($_POST['guest'] == "two"){
        $query="INSERT INTO seller ( fname, lname, nop, food, address, email, mobile, sold)
                VALUES ('$fname', '$lname', 2, '$food ','$add', '$email', '$mob', 0)";
        }
        if($_POST['guest'] == "three"){
        $query="INSERT INTO seller ( fname, lname, nop, food, address, email, mobile, sold)
                VALUES ('$fname', '$lname', 3, '$food ','$add', '$email', '$mob', 0)";
        }
        if($_POST['guest'] == "four"){
        $query="INSERT INTO seller (fname, lname, nop, food, address, email, mobile, sold)
                VALUES ('$fname', '$lname', 4, '$food ','$add', '$email', '$mob', 0)"; 
        }        
                
        mysql_query($query);
            header('location:final.html'); 
    //Create query (if you have a Logins table the you can select login id and password from there)
    
    //Check whether the query was successful or not 
    }
    }
    else{
        echo 'You did not fill all the field';
        header('location:sell.html');  
    }
?>