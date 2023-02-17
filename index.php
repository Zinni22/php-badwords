<!-- SEZIONE PHP -->
<?php

$paragrofoPrima = 'Yeah, è un altro giorno, mi alzo e corro, karma storto <br>
Punto tutto su me stesso quando gioco al Fantamorto <br>
Sono un film sulla felicità con una trama dark <br>
Come se stai all\'Acquapark e senti urlare, "Allah u Akbar" <br>
Stringo i denti tra macelli e cazzi vari <br>
Tra fratelli marginali con cervelli immaginari <br>
Per me sali sul palco e lì riveli quanto vali <br>
Sennò sembri il primo maschio con problemi vaginali, adieu <br>
Sta vita me la fotto in fretta <br>
Quindi tengo sempre il Settebello sotto il sotto sella <br>
Tu ancora ti stupisci che nessuno ti comprenda <br>
Se fai dischi mentre ti pulisci il culo con la merda <br>
Sono leggenda come B. B. King <br>
Mi riprendono in canotta mentre mi faccio una botta <br>
Sul CD di Skin, in onda sulla BBC <br>
Ops, l\'ho fatto un\'altra volta come Britney Spears'; 


$paragrafoDopo = str_replace( $_GET['parola'], '***', $paragrofoPrima);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <h1>
        Testo "Mob" - Lazza, Nitro, Salmo
    </h1>

    <div>

        <p>
            <?php echo $paragrofoPrima; ?>
        </p>

        <div class="form">
            <form action="" method="GET">

                <input type="text" name="parola" placeholder="Inserisci la parola da censurare">

                <button>
                    Cerca
                </button>
            </form>

            <p>
                Hai cercato la parola: <?php echo $_GET['parola']; ?>
            </p>
        </div>

        <p>
            <?php echo $paragrafoDopo; ?>
        </p>


    </div>

    
</body>
</html>

<style>
    body{
        font-family: arial;
    }
    .form{
        margin: 50px 0;
    }
    input{
        width: 200px;
    }
</style>