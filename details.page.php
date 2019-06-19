<?php
    include('html.php');
?>
    <main>
        <section class="section">
            <div class="container">
            <h1>Article <?=$articleData[0]['title_post'];?></h1>
                
                <div>
                    <h3><?=$articleData[0]['title_post']?></h3><br>
                    <p><?=$articleData[0]['content_post']?></p><br>
                    <p>Publi&eacute le <?=$articleData[0]['date_post']?> par <?=$articleData[0]['name_user']?></p><br>
                </div>
                <hr>

                <table>
                    <thead>
                        <th colspan="2" id="tableHead">
                            <a href="https://www.betclic.fr/" target="_blank">Jusqu'a 100e offerts sur <img src="img/Betclic.png" alt="betclicimg" id="betclic"> >> Cliquez pour en savoir plus !</a>
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
                                <?=$value['name_user']?>, le <?=$value['date_comment']?>
                            </td>
                            <td>
                                <?=$value['content_comment']?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
                <hr>

                    <form action="add_comment.php" method="post">
                        <div class="field">
                            <label class="label">Pseudo</label>
                            <select name="pseudo" id="pseudo">
                                <option value="1">john</option>
                                <option value="2">jack</option>
                            </select>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                                <input type="email" name="email" id="email"required>
                        </div>

                        <div class="field">
                            <label class="label">Commentaire</label>
                            <div class="control">
                                <textarea class="textarea" name="comment" placeholder="Textarea"></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="postId" value="<?=$articleData[0]['id_post']?>">

                        <div class="field is-grouped">
                            <div class="control">
                                <input type="submit" name="submitComment" value="Commenter" class="button is-link">
                            </div>
                        </div>
                    </form>
            </div>
        </section>
    </main>
    </body>
</html>