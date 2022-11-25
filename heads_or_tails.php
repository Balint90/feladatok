<?php 
    function h_o_t_recursive($n, $arr) {
        $items = ['H', 'T'];
        if ($n === 1) return $items; //kilépő feltétel
        for ($i=0; $i<count($items); $i++) {
            for ($k=0; $k<count($arr)/2; $k++)
                $arr = $arr + $arr;
        }
    }

    function h_o_t($n) {
        if ($n<1 || $n>17) { return 'Rossz input!';} //ha a tartományon kivűl esünk
        $arr = [];
        for ($i = 0; $i<pow(2,$n); $i++) { //2 hatványig megyünk
            $bin = decbin($i); //decimális szám átalakítása binárissá
            //0-ák hozzádaása az elejéhez, hogy mindegyik string ugyanolyan hosszú legyen
            $bin = str_pad($bin, $n, '0', STR_PAD_LEFT);
            // while (strlen($bin)<$n) $bin = '0'.$bin; 
            $bin = str_replace('0','H', $bin); //0-ák cseréje H-kra és 1-esek meg T-kre
            $bin = str_replace('1','T', $bin);
            $arr[] = $bin;
        }
        return $arr;
    }

    $n = isset($_POST['HOT_n'])?$_POST['HOT_n']:1; //HOT: HeadsOrTails
    $result = h_o_t($n);
    if ($result != 'Rossz input!') {
        echo '[';
        echo $result[0];
        for ($i = 1; $i < count($result); $i++) echo ', ' . $result[$i];
        echo ']';
    }
    else { echo $result; }
?>