<?php
$link = mysqli_connect('localhost','root','','final_exam');

if($link == false){
    die("ERROR:  Not connect. \n" . mysqli_connect_error());
}

$faculty = "CREATE TABLE Faculty(
    fid decimal(9,0) primary key NOT NULL,
    fname varchar(30),
    deptid decimal(2,0)
    )";
    
    if(mysqli_query($link, $faculty)){
        echo "Department Table Successfully Created.\n";
    } else{
        echo "ERROR:  Not  executed $faculty. " . mysqli_error($link);
    }
    

$student = "CREATE TABLE Student(
    snum decimal(9,0) primary key NOT NULL,
    sname varchar(30),
    major varchar(25),
    level varchar(2),
    age decimal(3,0)
)";

if(mysqli_query($link, $student)){
    echo "Student Table Successfully Created .\n";
} else{
    echo "ERROR:  Not  executed $student. " . mysqli_error($link);
}


$enrolled = "CREATE TABLE Enrolled (

    snum decimal(9,0),
    cname varchar(40) ,
    primary key(snum,cname),
    foreign key (snum) REFERENCES
    Student(snum),
    foreign key (cname) REFERENCES
    Class(name)
        
    )";
    
    if(mysqli_query($link, $enrolled))
    {
        echo "Table Successfully Created \n";
    } else{
        echo "ERROR: Not  executed $enrolled. " . mysqli_error($link);
    }
    
 

$class = "CREATE TABLE Class(

name varchar(40) primary key NOT NULL,
meets_at varchar(20),
room varchar(10),
fid decimal(9,0)

)";

if(mysqli_query($link, $class)){
    echo "Class Table Successfully Created.\n";
} else{
    echo "ERROR: Not  executed $class. " . mysqli_error($link);
}

$suppliers = "CREATE TABLE Suppliers(
    sid int(9) primary key,
	sname varchar(30),
	address varchar(40)

)";

if(mysqli_query($link, $suppliers)){
    echo "Provider Table Successfully Created.\n";
} else{
    echo "ERROR: Not  executed $suppliers. " . mysqli_error($link);
}


$parts = "CREATE TABLE Parts(
    pid int(9) primary key,
	pname varchar(40),
	color varchar(15)

)";

if(mysqli_query($link, $parts)){
    echo "Goodies Table Successfully Created.\n";
} else{
    echo "ERROR: Not  executed $parts. " . mysqli_error($link);
}


$catalog = "CREATE TABLE Catalog(
    sid int(9),
	pid int(9),
	cost int(10),
	primary key(sid,pid),
	foreign key(sid) REFERENCES Suppliers(sid),
	foreign key(pid) REFERENCES Parts(pid)
)";

if(mysqli_query($link, $catalog)){
    echo "Stock Table Successfully Created.\n";
} else{
    echo "ERROR: Not  executed $catalog. " . mysqli_error($link);
}
