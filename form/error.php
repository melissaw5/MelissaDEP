<?php  
 
session_start();

$error = array();  
if(isset($_POST["submit"]))  
{  
      if(empty($_POST["day1a"]))  
      {  
          array_push($error,"Enter Day1a");
        //    $error = "<label class='text-danger'>Enter Day1a</label>";  
      }  
      if(empty($_POST["day1b"]))  
      {  
        array_push($error,"Enter Day1b");
        //    $error = "<label class='text-danger'>Enter Day1b</label>";  
      }  
      if(empty($_POST["day1c"]))  
      {  
        array_push($error,"Enter Day1c");
        //    $error = "<label class='text-danger'>Enter Day1c</label>";  
      }
      if(empty($_POST["day2a"]))  
      {  
        array_push($error,"Enter Day2a");
        //    $error = "<label class='text-danger'>Enter Day2a</label>";  
      }  
      if(empty($_POST["day2b"]))  
      {  
        array_push($error,"Enter Day2b");
        //    $error = "<label class='text-danger'>Enter Day2b</label>";  
      }  
      if(empty($_POST["day2c"]))  
      {  
        array_push($error,"Enter Day2c");
        //    $error = "<label class='text-danger'>Enter Day2c</label>";  
      }
      if(empty($_POST["day3a"]))  
      {  
        array_push($error,"Enter Day3a");
        //    $error = "<label class='text-danger'>Enter Day3a</label>";  
      }  
      if(empty($_POST["day3b"]))  
      {  
        array_push($error,"Enter Day3b");
        //    $error = "<label class='text-danger'>Enter Day3b</label>";  
      }  
      if(empty($_POST["day3c"]))  
      {  
        array_push($error,"Enter Day3c");
        //    $error = "<label class='text-danger'>Enter Day3c</label>";  
      }
      if(empty($_POST["day4a"]))  
      {  
        array_push($error,"Enter Day4a");
        //    $error = "<label class='text-danger'>Enter Day4a</label>";  
      }  
      if(empty($_POST["day4b"]))  
      {  
        array_push($error,"Enter Day4b");
        //    $error = "<label class='text-danger'>Enter Day4b</label>";  
      }  
      if(empty($_POST["day4c"]))  
      {  
        array_push($error,"Enter Day4c");
        //    $error = "<label class='text-danger'>Enter Day4c</label>";  
      }
      if(empty($_POST["day5a"]))  
      {  
        array_push($error,"Enter Day5a");
        //    $error = "<label class='text-danger'>Enter Day5a</label>";  
      }  
      if(empty($_POST["day5b"]))  
      {  
        array_push($error,"Enter Day5b");
        //    $error = "<label class='text-danger'>Enter Day5b</label>";  
      }  
      if(empty($_POST["day5c"]))  
      {  
        array_push($error,"Enter Day5c");
        //    $error = "<label class='text-danger'>Enter Day5c</label>";  
      }
      if(empty($_POST["day6a"]))  
      {  
        array_push($error,"Enter Day6a");
        //    $error = "<label class='text-danger'>Enter Day6a</label>";  
      }  
      if(empty($_POST["day6b"]))  
      {  
        array_push($error,"Enter Day6b");
        //    $error = "<label class='text-danger'>Enter Day6b</label>";  
      }  
      if(empty($_POST["day6c"]))  
      {  
        array_push($error,"Enter Day6c");
        //    $error = "<label class='text-danger'>Enter Day6c</label>";  
      }
      if(empty($_POST["day7a"]))  
      {  
        array_push($error,"Enter Day7a");
        //    $error = "<label class='text-danger'>Enter Day7a</label>";  
      }  
      if(empty($_POST["day7b"]))  
      {  
        array_push($error,"Enter Day7b");
        //    $error = "<label class='text-danger'>Enter Day7b</label>";  
      }  
      if(empty($_POST["day7c"]))  
      {  
        array_push($error,"Enter Day7c");
        //    $error = "<label class='text-danger'>Enter Day7c</label>";  
      }
      if(empty($_POST["day8a"]))  
      {  
        array_push($error,"Enter Day8a");
        //    $error = "<label class='text-danger'>Enter Day8a</label>";  
      }  
      if(empty($_POST["day8b"]))  
      {  
        array_push($error,"Enter Day8b");
        //    $error = "<label class='text-danger'>Enter Day8b</label>";  
      }  
      if(empty($_POST["day8c"]))  
      {  
        array_push($error,"Enter Day8c");
        //    $error = "<label class='text-danger'>Enter Day8c</label>";  
      }
      if(empty($_POST["day9a"]))  
      {  
        array_push($error,"Enter Day9a");
        //    $error = "<label class='text-danger'>Enter Day9a</label>";  
      }  
      if(empty($_POST["day9b"]))  
      {  
        array_push($error,"Enter Day9b");
        //    $error = "<label class='text-danger'>Enter Day9b</label>";  
      }  
      if(empty($_POST["day9c"]))  
      {  
        array_push($error,"Enter Day9c");
        //    $error = "<label class='text-danger'>Enter Day9c</label>";  
      }
      if(empty($_POST["day10a"]))  
      {  
        array_push($error,"Enter Day10a");
        //    $error = "<label class='text-danger'>Enter Day10a</label>";  
      }  
      if(empty($_POST["day10b"]))  
      {  
        array_push($error,"Enter Day10b");
        //    $error = "<label class='text-danger'>Enter Day10b</label>";  
      }  
      if(empty($_POST["day10c"]))  
      {  
        array_push($error,"Enter Day10c");
        //    $error = "<label class='text-danger'>Enter Day10c</label>";  
      }
      if(empty($_POST["day11a"]))  
      {  
        array_push($error,"Enter Day11a");
        //    $error = "<label class='text-danger'>Enter Day11a</label>";  
      }  
      if(empty($_POST["day11b"]))  
      {  
        array_push($error,"Enter Day11b");
        //    $error = "<label class='text-danger'>Enter Day11b</label>";  
      }  
      if(empty($_POST["day11c"]))  
      {  
        array_push($error,"Enter Day11c");
        //    $error = "<label class='text-danger'>Enter Day11c</label>";  
      }
      if(empty($_POST["day12a"]))  
      {  

        array_push($error,"Enter Day12a");
        //    $error = "<label class='text-danger'>Enter Day12a</label>";  
      }  
      if(empty($_POST["day12b"]))  
      {  
        array_push($error,"Enter Day12b");
        //    $error = "<label class='text-danger'>Enter Day12b</label>";  
      }  
      if(empty($_POST["day12c"]))  
      {  
        array_push($error,"Enter Day12c");
        //    $error = "<label class='text-danger'>Enter Day12c</label>";  
      }
      if(empty($_POST["day13a"]))  
      {  
        array_push($error,"Enter Day13a");
        //    $error = "<label class='text-danger'>Enter Day13a</label>";  
      }  
      if(empty($_POST["day13b"]))  
      {  
        array_push($error,"Enter Day13b");
        //    $error = "<label class='text-danger'>Enter Day13b</label>";  
      }  
      if(empty($_POST["day13c"]))  
      {  
        array_push($error,"Enter Day13c");
        //    $error = "<label class='text-danger'>Enter Day13c</label>";  
      }
      if(empty($_POST["day14a"]))  
      {  
        array_push($error,"Enter Day14a");
        //    $error = "<label class='text-danger'>Enter Day14a</label>";  
      }  
      if(empty($_POST["day14b"]))  
      {  
        array_push($error,"Enter Day14b");
        //    $error = "<label class='text-danger'>Enter Day14b</label>";  
      }  
      if(empty($_POST["day14c"]))  
      {  
        array_push($error,"Enter Day14c");
        //    $error = "<label class='text-danger'>Enter Day14c</label>";  
      }
      if(empty($_POST["q1"]))  
      {  
        array_push($error,"Enter q1");
        //    $error = "<label class='text-danger'>Enter q1</label>";  
      }  
      if(empty($_POST["q2"]))  
      {  
        array_push($error,"Enter q2");
        //    $error = "<label class='text-danger'>Enter q2</label>";  
      }  
      if(empty($_POST["q3"]))  
      {  
        array_push($error,"Enter q3");
        //    $error = "<label class='text-danger'>Enter q3</label>";  
      }
      if(empty($_POST["q4"]))  
      {  

        array_push($error,"Enter q4");
        //    $error = "<label class='text-danger'>Enter q4</label>";  
      }  
      if(empty($_POST["q5"]))  
      {  
        array_push($error,"Enter q5");
        //    $error = "<label class='text-danger'>Enter q5</label>";  
      }  
      if(empty($_POST["q6"]))  
      {  
        array_push($error,"Enter q6");
        //    $error = "<label class='text-danger'>Enter q6</label>";  
      }
      if(empty($_POST["q7"]))  
      {  
        array_push($error,"Enter q7");
        //    $error = "<label class='text-danger'>Enter q7</label>";  
      }  
      if(empty($_POST["q8"]))  
      {  
        array_push($error,"Enter q8");
        //    $error = "<label class='text-danger'>Enter q8</label>";  
      }  
      if(empty($_POST["q9"]))  
      {  
        array_push($error,"Enter q9");
        //    $error = "<label class='text-danger'>Enter q9</label>";  
      }
      if(empty($_POST["q10"]))  
      {  
        array_push($error,"Enter q10");
        //    $error = "<label class='text-danger'>Enter q10</label>";  
      }
    
}
?>