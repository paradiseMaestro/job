<?php


// just add into variable "$horse" any position ang get some variation

$horse = "C2";



function get_variation($hrs){
    
    // create a coordinate plane 
    
    $X;
    
    $Y = (int) str_split($hrs)[1];
    
    
    // is validity
    if( (int) $Y >= 9 ){
        
        return "Неправильная позиция!";
        
    }
    
    
    
    // add the number by X

switch (str_split($hrs)[0]) {
    case "A":
        $X =  1;
        break;
    case "B":
        $X =  2;
        break;
    case "C":
        $X =  3;
        break;
    case "D":
        $X =  4;
        break;
    case "E":
        $X =  5;
        break;
    case "F":
        $X =  6;
        break;
    case "G":
        $X =  7;
        break;
    case "H":
        $X =  8;
        break;
    default:
       return "Неправильная позиция!";
};
    
    // go to position
    
    $position_is = [
        
        // move to up and right / move to up and left
        [$X+1,$Y+2],
        [$X-1,$Y+2],
        
        // move to right and down / move right and up
        [$X+2,$Y+1],
        [$X+2,$Y-1],
        
        // move to down and right / move down and left
        [$X+1,$Y-2],
        [$X-1,$Y-2],
        
        // move to left and down / move left and up
        [$X-2,$Y+1],
        [$X-2,$Y-1],
        
    ];
    
    // $variation = array();
    // array_push($variation, "Варианты");
    // print_r($position_is);
    print("Варианты:");
    
    // for the answer
    
    $сrd_for_chars = array(
        "1" => "A",
        "2" => "B",
        "3" => "C",
        "4" => "D",
        "5" => "E",
        "6" => "F",
        "7" => "G",
        "8" => "H"
    );
    
    
    for ($i = 0; $i < 8; $i++) {

         if( !($position_is[$i][0]<=8 and $position_is[$i][0]>=1) ){
            continue;
         }
         if( !($position_is[$i][1]<=8 and $position_is[$i][1]>=1) ){
            continue;
         }

        print_r("\n");
        print_r($сrd_for_chars[$position_is[$i][0]]);
        print_r($position_is[$i][1]);
    }
}

print_r(get_variation($horse));




