<?php
    include('html.php');
?>
        <main>
        <section class="section">
            <div class="container">
                <form action="add.php" method="post">
                    <fieldset>
                        <legend>Nouvel article</legend>

                            <div class="field">
                                <label class="label">Titre</label>
                                <div class="control">
                                    <input type="text" name="title" placeholder="Titre">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Contenu</label>
                                <div class="control">
                                    <textarea class="textarea" name="article" placeholder="Textarea"></textarea>
                                </div>
                            </div>

                            <div class="field">
                            <label class="label">Auteur</label>
                                <div class="control">
                                    <select name="pseudo" id="pseudo">

                                    <?php foreach($userTable as $value):?>
                                        <option value="<?=$value['id_user']?>"><?=$value['name_user']?></option>
                                    <?php endforeach;?>

                                    </select>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Categorie</label>
                                <div class="control">
                                    <select name="category" id="category">
                                    
                                    <?php foreach($categoryTable as $value):?>
                                        <option value="<?=$value['id_category']?>"><?=$value['name_category']?></option>
                                    <?php endforeach;?>

                                    </select>
                                </div>
                            </div>

                            <div class="field is-grouped">
                                <div class="control">
                                    <input type="submit" name="submit" value="Publier" class="button is-link">
                                    <button class="button is-link"><a href="admin/articles.php">Annuler</a></button>
                                </div>
                            </div>
                    </fieldset>
                </form>
        </main>
    </body>
</html>