<?php 


// ESERCIZIO 

// Ricreare la funzione vista a lezione per sommare un numero variabile di numeri (con lo spread operator) con queste variazioni:

// sfruttare il foreach come visto a lezione
// sfruttare il ciclo for
// provare con la funzione built-in array_reduce



// $a =21;
// $b =9;
// $c =7;
// $d =5;
// $e =24;
// $f =23;
// $g =3;

// function conta(...$nummeri){
    //         $risultato= array_reduce($numeri ,function($acc,$numero){
        
        //                 return $acc+=$numero;
        
        //             });
        //             echo $risultato;
        //         };
        
        //         conta($a,$b);
        
        
        
        //         $a =21;
        //         $b =9;
        //         $c =7;
        //         $d =5;
        //         $e =24;
        //         $f =23;
        //         $g =3;
        
        
        //         function conta(...$numeri) {
            //             $acc = 0;
            //             foreach ($numeri as $numero) {
                //                 $acc += $numero;
                //             }
                //             return $acc;
                //         }
                
                //         $result = conta($a + $b + $c * $d + $e * $f * $g);
                //         echo "Result: $result";
                //         
                
                // ALMENO 8 CARATTERI
                // ALMENO UNA MAIUSCOLA
                // ALMENO UN NUMERO
                // ALMENO UN CARATTERE SPECIALE
                // -->
                $pwd = readline("Inserisci la password: ");
                
                // if (strlen($pwd) >= 8) {
                    //     echo "La password è corretta. ";
                    // } else {
                        //     echo "La password è troppo corta. ";
                        // }
                        
                        // for ($i = 0; $i < strlen($pwd); $i++) {
                            //     if (ctype_upper($pwd[$i])) {
                                //         echo "Il carattere alla posizione $i è maiuscolo. ";
                                //     } else {
                                    //         echo "Il carattere alla posizione $i non è maiuscolo. ";
                                    //     }
                                    // }
                                    // for ($i = 0; $i < strlen($pwd); $i++) {
                                        //     if (is_numeric($pwd[$i])) {
                                            //         echo "Il carattere alla posizione $i è un numero. ";
                                            //     } else {
                                                //         echo "Il carattere alla posizione $i non è un numero. ";
                                                //     }
                                                // }
                                                // $arr =["*","%","&"];
                                                
                                                
                                                // for ($i = 0; $i < strlen($pwd); $i++) {
                                                    //     if (in_array($pwd[$i],$arr)) {
                                                        //         echo "Il carattere alla posizione $i è un carattere speciale \n. ";
                                                        //         break;
                                                        //     } else {
                                                            //         echo "Il carattere alla posizione $i non è un carettere speciale \n. ";
                                                            //     }
                                                            // }
                                                            
                                                            
                                                            
                                                            
                                                            function lunghezza($password){
                                                                if (strlen($password) >= 8) {
                                                                    return true;
                                                                    
                                                                }else {
                                                                    return false;
                                                                }}
                                                                $primo =lunghezza($pwd);
                                                                
                                                                function maiuscolo($password){  for ($i = 0; $i < strlen($pwd); $i++) {
                                                                    if (ctype_upper($pwd[$i])) {
                                                                        return true;
                                                                    } else {
                                                                        return false ;
                                                                    }}
                                                                    
                                                                }
                                                                
                                                                $secondo= minuscolo($pwd);
                                                                
                                                                function  numero($password){for ($i = 0; $i < strlen($pwd); $i++) {
                                                                    if (is_numeric($pwd[$i])) {
                                                                        return true;
                                                                    } else {
                                                                        return false;
                                                                    }}
                                                                    
                                                                }
                                                                $terzo =numero($pwd);
                                                                
                                                                function special($passsword){
                                                                    $arr =["*","%","&"];
                                                                    for ($i = 0; $i < strlen($pwd); $i++) {
                                                                        if (in_array($pwd[$i],$arr)) {
                                                                            return true;
                                                                            break;
                                                                        } else {
                                                                            return false;
                                                                        }}
                                                                        
                                                                    }
                                                                    
                                                                    $quarto =special($pwd);
                                                                    
                                                                    function finale(){
                                                                        $primo =lunghezza($password);
                                                                        $secondo= minuscolo($password);
                                                                        $terzo =numero($password);
                                                                        $quarto =special($password);
                                                                        if ($primo && $secondo && $terzo && $quarto) {
                                                                            echo"pass acc";
                                                                        }
                                                                        return $primo && $secondo && $terzo && $quarto;
                                                                    };
                                                                    
                                                                    $finale= finale($pwd);
                                                                    $count = 0;
                                                                    checkPsw($psw);
                                                                    
                                                                    do{
                                                                        
                                                                        $count++;
                                                                        $psw= readline("What is your password?:");
                                                                        if($count==0){
                                                                            break;
                                                                        }   
                                                                        if($count>4){ 
                                                                            echo "You have inserted the incorrect password too many times!";
                                                                        }
                                                                        
                                                                    }
                                                                    
                                                                    while(!finale($psw) && $count <=4);
                                                                    // print $psw;
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    