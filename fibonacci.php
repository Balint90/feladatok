<?php 
    function fibonacci($n) {
        //esetleg lecsekkolni, hogy nem túl nagy számot kaptunk-e a felhasználótól
        $fib=[];
        if ($n>=1) { $fib[] = 1; } //n=1
        if ($n>=2) { $fib[] = 1; } //n=2
        for ($i=2; $i < $n; $i++) { //n>=3-tól
            $fib[] = $fib[$i-1] + $fib[$i-2];
        }
        $fib = array_reverse($fib); //tömb megfordítása
        return $fib;
    }

    $n = isset($_POST['fib_n'])?($_POST['fib_n']<1?1:$_POST['fib_n']):1; //bonyolult(abb) post érték csekkolás
    $fibonacci = fibonacci($n);
    
    //visszatérési érték "összerakása"
    echo '[';
    echo $fibonacci[0];
    for ($i = 1; $i < count($fibonacci); $i++) echo ', ' . $fibonacci[$i];
    echo ']';
?>