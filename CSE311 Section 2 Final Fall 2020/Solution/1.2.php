<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques2 = "SELECT s.sname FROM student s

WHERE s.snum IN (SELECT co.snum FROM course co , course cour, class c, class cl

WHERE co.snum = cour.snum 
AND co.cname <> cour.cname
AND co.cname = c.name
AND cour.cname = cl.name AND c.meets_at = cl.meets_at) ";



$result = mysqli_query($link, $ques2);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo "id: " .$row["sid"] ." Name: " .$row["sname"] ." Password: ". $row["address"] ." \n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);



?>