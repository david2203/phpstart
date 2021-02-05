<?php 
    //---------övning 1

    // function area($length, $width) {
    //    echo "The area of a rektangle with $length cm length and $width cm width is " . $length * $width . " cm^2";
    // }

    // area(5,5)


    //---------övning 2

    // function dubble($x) {
    //     echo $x * 2 . "<br> This is twice the value of $x ";
    // }

    // dubble(4);


    //----------övning 3
 
    // function dubble($x) {
    //     echo $x * 2 . "<br> This is twice the value of $x <br>";
    // }

    
    // function intervall($start, $end = 10 ) {
    //     for ($start; $start < $end; $start++) {
    //         dubble($start);
    //     }
    // }

    // intervall(5,20)


    //-----------övning 4

    // function convert($farenheit) {
    //     echo $farenheit . " Farenheit is the same as: " . ($farenheit-32)/1.8 . " Celcius";
    // }

    // convert(20)


    //-----------övning 5

    // function maximum($value1, $value2) {
    //     if ($value1 > $value2) {
    //         echo "This is the biggest value: " .$value1;
    //     }
    //     else if ($value2 > $value1) {
    //         echo "This is the biggest value: " .$value2;
    //     }
    //     else {
    //         echo "Both values are equaly big";
    //     }
        
    // }

    // maximum(40,40)


    //-----------övning 6 

   
    // function fakultet($x, $y=1) {
    //     $total = 1;
    //     for ($x; $x > $y; $x--) {
    //         $sum = ($total *= $x);
            
    //     }
    //     echo $sum;
        
    // }
    //  fakultet(6)
    
//--------övning 1

// function addition() {

// $total = 0;
// for($i = 0; $i<10;$i++) {
//     $sum = ($total += $i);
    
// }
// return $sum;
// }

// echo addition()


//--------övning 2

// for ($i = 0; $i <10; $i += 2) {
//     echo $i;
// }


//--------övning 3

// for ($i = 10; $i >=0 ; $i--) {
//     echo $i . "<br>";
// }
    

//--------övning 4
// for ($y = 0; $y <10; $y++) {
//     if ($y % 2 == 0) {
//         echo $y;
//     }
//     else {
//         continue;
//     }
// }


//--------övning 5

// $y = 0;
// while ($y <= 10) {
//     if($y % 2 == 0){
//         echo $y; 
//     }
//     $y++;
// }


//--------övning 7  

// function multiplyingSheep() {
//     $numberOfSheep = 4;
//     for($monthNumber = 1; $monthNumber <= 12; $monthNumber++) {
//         $numberOfSheep = $numberOfSheep * 4;
//         echo "There will be $numberOfSheep sheep after $monthNumber month(s) <br>";
//     }
// }

// multiplyingSheep();


//--------övning 8

// function mjau($m) {
//         if ($m >0 ){
//         for($m;$m>0;$m--){
//             echo "mjau "; 
//         }
//     }
//     else {
//         echo "😾";
//     }
// }

// mjau(0);


//--------array Övning 1

// $your_array=[23,45,54,12,77];

// echo $your_array[0] . " " . $your_array[4];


//--------array Övning 2 

//  $your_array=[23,45,54,12,77];

//  $your_array[4] = 1;

//  echo $your_array[4];


//--------array Övning 3

// $best_array = [1, 2, 3, 4, 5];

//  $count = count($best_array);

// for ($i = 0; $i < $count; $i++) {
//     echo $best_array[$i] . "<br>";
// }


//---------array Övning 4

// $best_array = [1, 2, 3, 4, 5];

// $count = count($best_array);
//  $total = 1;
//  for ($i = 0; $i < $count; $i++) {
//      $total = $best_array[$i] * $total;

//  }
// echo $total;


//----------array Övning 5

// $ok_array = ["fine", "FINE", "good", "what is thisstuff?", "sweet", "i don't even live here"];

// $count = count($ok_array);

// for ($i = 0; $i < $count; $i++) {
//           if(strlen($ok_array[$i]) <= 5) {
//               echo $ok_array[$i] . "<br>";
//           }
//      }


//----------array Övning 6

// $worst_array_yet = ["string", true, 42, "another string",54, true, 1];

// $count = count($worst_array_yet);
// $sum = 0;
//  for ($i = 0; $i < $count; $i++) {
//            if(is_string($worst_array_yet[$i])) {
//                echo $worst_array_yet[$i] . "<br>";
//            }
//            else{
//                $sum = $worst_array_yet[$i] + $sum;
//            }
          
           
//       }

//       echo $sum;

// function fact($n) {
//     if ($n === 0) { // vår base case, stoppar "loopen" 
//     return 1;
//     }
//     else {
//     return $n * fact($n-1); // <-- kallar sig själv och utför faktulteten.
//     }
//     }
    
//     echo "Svar 6: ";
//     echo fact(5);

?>