<?php
    include('html.php');
?>
    <main>
        <section class="section">
            <div class="container">
                <h1 class="title">Actualit&eacutes</h1>
                    
                    <?php foreach($display as $key => $value):?>
                        <?php
                        $content = $value['content_post'];
                        $text = substr("$content", 0, 200);
                        ?>
                        <div class="articles">
                            <p class="category"><?=$value['name_category']?></p><br>
                            <h3><a class="linkTitle" href="details.php?id_post=<?= $value['id_post'];?>"><?=$value['title_post']?></a></h3><br>
                            <p><?=$text?>...</p><br>
                            <p>Publi&eacute le <?=$value['date_post']?> par <?=$value['name_user']?></p><br>
                        </div>
                    <?php endforeach;?>                    
            </div>
        </section>
    </main>
</body>
</html>