<?php
//declare some variables
    $day='Saturday'; // added ' to the end of Saturday
    $count=300;
    
//Output to screen
    echo "I just wanted to say that's fine"; // changed the string to speech marks
    echo '<br />';
    echo 'The day is '. $day; // concatenating
    echo '<br />';
    print 'The count is '. $count;
    echo '<br />';
//test some conditions
    if ($count ==300){ // double equals
        echo 'correct';
    }else{
        echo 'incorrect';
    }
    echo '<br />';
    $time =14;
    if($time < 12 ){
        echo 'Good morning';
    } elseif($time>=12  && $time<=18){
        echo 'Good afternoon';
    } else{ // brackets to close statement before another
        echo 'Good Evening';            
    }
?>
