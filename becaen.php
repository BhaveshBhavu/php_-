<?php

$con=new mysqli("0.0.0.0", "root","root","vd");

$ty=$_POST['taytal'];

$rtn=$_POST['reting']; 

$det=$_POST['det'];




$sql="INSERT INTO bh VALUES('$ty','$rtn','$det')";

$result=mysqli_query($con,$sql);

if($result=="true"){
  echo "<center><h2>Submitted successfully..</h2></center>";

}else{
 echo "<center><h2>Not submitted..</ h2></center>";
}





error_reporting(0); 

$query ="SELECT * FROM  bh";
$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);



  
  while($result = mysqli_fetch_assoc($data)) 
{
echo "<div style='border: solid; width:300px; margin:40px 20px;'>
  <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMgRuAFo8wZFqVtYCXp5ijWzmEc9FZ2LVKjQ&usqp=CAU' style='width:100%'>
  <div style='border-top: solid; '>
    <h4><b>".$result[taytal]."</b></h4>
    <p>".$result[reting]."</p>
   <b>".$result[det]."</b>
  </div>
</div>" ;
}



?>







