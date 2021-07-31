<?php


$criminals = array();

$criminals[] = array(
    'id' => 1,
    'age' => 27,
    'name' => 'Bandar',
    'country' => 'Kuwait',
    'arrested' => 'yes'

);


$criminals[] = array(
    'id' => 2,
    'age' => 22,
    'name' => 'Kalad',
    'country' => 'KSA',
    'arrested' => 'yes'

);


$criminals[] = array(
    'id' => 3,
    'age' => 29,
    'name' => 'Omar',
    'country' => 'UAE',
    'arrested' => 'yes'

);


$criminals[] = array(
    'id' => 4,
    'age' => 33,
    'name' => 'Yoesaf',
    'country' => 'Oman',
    'arrested' => 'yes'

);

$criminals[] = array(
    'id' => 5,
    'age' => 36,
    'name' => 'Jack',
    'country' => 'USA',
    'arrested' => 'no'

);


// New array for Not arrested

$criminals_Not_arrested = array();


$criminals[] = array(
    'id' => 6,
    'age' => 25,
    'name' => 'Ben',
    'country' => 'Canada',
    'arrested' => 'no'

);

$criminals[] = array(
    'id' => 7,
    'age' => 27,
    'name' => 'Bandar',
    'country' => 'Kuwait',
    'arrested' =>'no'

);

$criminals[] = array(
    'id' => 8,
    'age' => 35,
    'name' => 'Jon',
    'country' => 'UK',
    'arrested' => 'no'

);

$criminals[] = array(
    'id' => 9,
    'age' => 25,
    'name' => 'Mirfau',
    'country' => 'UK',
    'arrested' => 'no'

);

$criminals[] = array(
    'id' => 10,
    'age' => 31,
    'name' => 'Jaimes',
    'country' => 'New Zaleand',
    'arrested' => 'no'

);






function find($id){
    global $criminals;
    foreach ($criminals as $key => $value){
        if ($id == $value['name'] ){
            echo 'He is Criminal' ."<br>";
            
        }else
        echo 'not criminal' ."<br>";
        break;
        

    
        
        
        
    }
};
echo find("Bandar");


?>
