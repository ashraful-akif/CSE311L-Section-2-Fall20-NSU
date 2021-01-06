<?php

$link = mysqli_connect("localhost", "root", "", "final_exam");
 
if($link === false){
    die(" Not connected. \n" . mysqli_connect_error());
}
 


$ques1 = "SELECT MAX(S.age)
FROM Student S
WHERE (S.major = 'History')
AND S.snum IN (SELECT E.snum
FROM Class C, Enrolled E, Faculty F
WHERE E.cname = C.name AND C.fid = F.fid
AND F.fname = 'Ivana Teach' )";


$result = mysqli_query($link, $ques1);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  echo "id: " .$row[Max("age")] ." \n";
 }
}

else{
 echo " Results Not found";
}

mysqli_close($link);



?>