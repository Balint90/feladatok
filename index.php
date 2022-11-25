<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feladatok</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body class="bg-dark text-white">
        <?php include "navbar.php" ?>
        <div class="container">
            <ol>
                <li>
                <pre>Fibonnaci reverse!
Írjon egy függvényt, ami bemenetként kap egy n>0 egész számot, és visszaadja a a Fibonnaci

számsort az első elemétől az n.-ig fordított sorrendben egy tömbben.

Példa: n=5 a Fibonnaci: [1,1,2,3,5] amit várunk [5,3,2,1,1]</pre>
                </li>
                <li>
                    <pre>Fej vagy írás
Készítsen egy függvényt, amely bemenetként kapja 0 < n < 18 értéket, és visszaadja egy pénzfeldobás összes lehetséges kimenetét (fej=H, írás=T), egy tömbben. Példa:

n=1 válasz: [„H”,”T”]

n=2 válasz: [„HH”,”HT”,”TH”,”TT”]
                    </pre>
                </li>
            </ol>
        

            <div class="row d-flex flex-row">
                
                <div class="col-6 px-5">
                        <div class="row mx-2">
                            <input class="form-control me-2" type="number" id="fibNum" value="1" min="1" max="10000" placeholder="1" aria-label="Fibonacci">
                        </div>
                        <div class="row mx-2">
                            <button class="btn btn-outline-success" id="fibSubmit">Fibonacci!</button>
                        </div>
                    <div class="d-flex justify-content-center mt-3" id="fibonacciResult"></div>
                </div>
                <div class="col-6 px-5">
                        <div class="row mx-2">
                            <input class="form-control me-2" type="number" id="HOTNum" value="1" min="1" max="17" placeholder="1" aria-label="Fibonacci">
                        </div>
                        <div class="row mx-2">
                            <button class="btn btn-outline-success" id="HOTSubmit">Fej vagy írás!</button>
                        </div>
                    <div class="d-flex justify-content-center mt-3" id="headandtailsResult">["H", "T"]</div>
                </div>
            </div>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="js/ajax.js"></script>
    </body>
</html>