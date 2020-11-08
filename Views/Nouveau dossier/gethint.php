<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL

//$q = $_REQUEST["q"];

//$hint = "";

// lookup all hints from array if $q is different from ""
/*if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}*/
//$hint ="test" ."$q";

// Output "no suggestion" if no hint was found or output correct values

//echo $hint === "" ? "no suggestion" : $hint;




/*if (isset($_POST['fname']) && $_POST['username'] && isset($_POST['lname']) && $_POST['password']) {
    // do user authentication as per your requirements
    // ...
    // ...
    // based on successful authentication*/

      /*$movie = array( "title" => "Rear Window",
                "director" => "Alfred Hitchcock",
                "year" => 1954,
                "success" => 1 );*/

    //echo json_encode(array('success' => 1));
    //echo json_encode($movie);
    //echo "ahmed";
/*} else {
    //echo json_encode(array('success' => 1));
    echo "ahmed";
}*/



    /**
     * Nous créons deux variables : $username et $password qui valent respectivement "Sdz" et "salut"
     */
     
    $username = "a";
    $password = "a";
 
    if( isset($_POST['username']) && isset($_POST['password']) ){
 
        if($_POST['username'] == $username && $_POST['password'] == $password){ // Si les infos correspondent...
            //session_start();
            //$_SESSION['user'] = $username;
            //echo "Success";


            $movie = array( "title" => "Rear Window",
                "director" => "Alfred Hitchcock",
                "year" => 1954,
                "Success" => 1 ); 
            echo json_encode($movie);   
        }
        else{ // Sinon
            echo "Failed";
        }
    }


?>