<?php
$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"example"); 
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''&& $email !=''&& $contact !='' && $address !='' ){
$query = mysqli_query($connection, "insert into students(name, email, contact, address) values ('$name', '$email', '$contact', '$address')");
echo "<br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection);
?>