<?php

// creating dasabase connection 
$con = mysqli-connect("localhost","root,","","website") 
or die(mysqli-error());
//check weather submit button is clicked or not
if((isset($_POST['submit']))){
    // fetching details and storing value in database
    $name = $con->real_escape_string($_post['name']);
    $email = $con->real_escape_string($_post['email']);
    $subject = $con->real_escape_string($_post['subject']);
    
    // inserting data into database
    $sql = "insert into form(name,email,subject) values('".$name."','".$email."','".$subject."')";
 
    //execute the query and returning a message
    if($result = $con->query($sql)){
        die('error occured!!!['..$con->error.']');
    }else{
        echo"Thank You!! For Registring";
    } 
}
?>