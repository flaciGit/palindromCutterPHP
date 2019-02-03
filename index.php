<?php

    $palindrom =
     "abbaeae";
    //"aabcbadaa";
    
    $collectPalindroms = array();
    
    echo "String: " . $palindrom . "<br>";
    echo "All palindromes: (minimum length: 2 characters) ";
    printAllPalindromes($collectPalindroms, $palindrom);
    
    
    function isPalindrom($palindrom, $k, $l) {

        while($k < $l) {
            
            if($palindrom{$k} != $palindrom{$l})
                return false;
            $k++;
            $l--;
        }
        return true;
    }
    
    function printAllPalindromes($collectPalindroms, $palindrom) {
        
        $start = 0;
        $end = strlen($palindrom);
        while($start < $end) {
            
            $i = $end;
            
            while($i > $start) {
                
                if(isPalindrom($palindrom, $start, $i)){
                    
                    array_push($collectPalindroms,substr($palindrom,$start,$i-$start+1));
                }
                $i--;
            }
            $start++;
        }
        
        for($i = 0; $i < sizeof($collectPalindroms);$i++) {
            echo $collectPalindroms[$i] . " ";
        }
        
    }

?>