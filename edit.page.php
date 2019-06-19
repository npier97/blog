<?php
    include('html.php');
?>

<main>
    <section class="section">
        <div class="container">
            <form action="update.php" method="post">
                <fieldset>
                    <legend>Edition</legend>

                        <input type="hidden" name="postId" value="<?=$articleData[0]['id_post']?>">

                        <div class="field">
                            <label class="label">Titre</label>
                            <div class="control">
                                <input type="text" name="newTitle" value="<?=$articleData[0]['title_post']?>">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Contenu</label>
                            <div class="control">
                                <textarea class="textarea" name="newArticle"><?=$articleData[0]['content_post']?></textarea>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <input type="submit" name="update" value="Publier" class="button is-link">
                                <button class="button is-link"><a href="administration.php">Annuler</a></button>
                            </div>
                        </div>
                </fieldset>
            </form>
        </main>
    </body>
</html>