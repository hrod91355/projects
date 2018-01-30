<?php
/**
 * Created by PhpStorm.
 * User: hectorrodarte
 * Date: 1/29/18
 * Time: 3:31 PM
 */

//Indexed array
$array = array("Daniel", "Jane", "Jacob", "john", "mary ann");

//adding data to array using push
$data = array("first", "second");
$data[] = "John";
$data[] = 15;
array_push($data, "Daniel", 23, 43, "joe");
array_push($data, 17);

//Associative arrays
$data = array("first" => "Daniel", "last" => "Jones", "age" => 25);
print_r($data);


//Multidimensional arrays
$data = array(array("Daniel", "Jones"), "John", "Jane");