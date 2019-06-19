<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Blog - Administration des commentaires</title>
</head>
<body>
    <header>
        <nav>
        <a href="#">Mon compte</a>
        <a href="#">Live</a>
        <a href="../index.php">Accueil</a>
        <a href="../administration.php">Administration</a>
        </nav>
    </header>
    <main>
        <section class="section">
            <div class="container">
                <h1>Commentaires</h1>

                <table>
                    <thead>
                        <th colspan="2" id="tableHead">
                            <a href="https://www.betclic.fr/" target="_blank">Jusqu'a 100e offerts sur <img src="../img/Betclic.png" alt="betclicimg" id="betclic"> >> Cliquez pour en savoir plus !</a>
                        </th>
                    </thead>
                        <tr>
                            <td colspan="2" id="reminder">
                            Jouer comporte des risques : isolement, endettement... Appelez le 09-74-75-13-13 (appel non surtaxe)
                            </td>
                        </tr>
                    <?php foreach($displayComment as $key => $value):?>
                        <tr>
                            <td>
                                <p><?=$value['name_user']?>, le <?=$value['date_comment']?></p>
                            </td>
                            <td>
                                <a href='remove.comment.php?id_comment=<?= $value['id_comment'];?>&id_post=<?= $_GET['id_post']; ?>' id="deleteComment"><i class="fas fa-times"></i></a>
                                <p><?=$value['content_comment']?><p>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>

                </div>
            </section>
        </main>
    </body>
</html>