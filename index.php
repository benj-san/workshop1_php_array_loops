<?php

    $wildersByGender = [
            'female' => [
                    'clemence',
                    'Marceline',
                    'Madjoula',
                    'Margot',
                    'najat',
                    'sophie',
                    'Orianne',
                    'marie'
            ],
            'male' => [
                    'Jean-Roch',
                    'rémi',
                    'Grégoire',
                    'Nathan',
                    'jérémy',
                    'ryad',
                    'Valentin l\'autre'
            ]
    ]

?>


<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        margin-bottom: 45px;
    }
</style>
<body>
    <main>
        <h1>Workshop #1 : Loops, mix PHP and HTML, SWITCH</h1>

        <?php
        $i = 1;
        $pText = "tesla";
            while($i<6){
        ?>

        <section>
            <h2 class="mySuppaClass">Hello je suis ton titre numéro <?= $i; ?></h2>
            <p>
                <?php
                    /*if($pText == "pokemon"){
                        echo"Texte sur les pokemons";
                    } elseif($pText == "tesla"){
                        echo"Texte sur les Tesla";
                    }elseif($pText == "booba"){
                        echo"Je prefère Kaaris";
                    }*/
                    switch ($pText){
                        case 'pokemon':
                            echo"Pika pika !";
                            break;
                        case 'tesla' :
                            echo"Texte sur les Tesla";
                        case 'booba':
                            echo"Je prefère Kaaris";
                            break;
                        default :
                            echo "";
                    }
                ?>
            </p>
        </section>

        <?php
                $i++;
            }

            foreach($wildersByGender as $gender => $names){

        ?>
        <article>
            <h2>Wilders : <?= $gender ?> :</h2>
            <ul>
                <?php
                    foreach($names as $name){
                ?>

                    <li><?= ucfirst($name) ?></li>

                <?php
                    }
                ?>

            </ul>
        </article>

        <?php
            }
        ?>

    </main>
    <footer>
        <a href="gender.php?gender=female">Female</a>
        <a href="gender.php?gender=male">Male</a>
    </footer>
</body>
</html>
