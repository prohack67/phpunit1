<?php
    $student=array("Name"=>"Hitendra","Age"=>19,"Height"=>6.2,"City"=>"kutch");
    //print_r($student);
    echo $student["Name"]."<br>";
    echo $student["Age"]."<br>";
    echo $student["Height"]."<br>";
    echo $student["City"]."<br>";

    foreach($student as $key=>$val)
    {
        echo "<br>[".$key."]=".$val;
    }
    ?>