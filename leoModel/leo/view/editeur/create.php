
<form method="get" action="index.php">
    <fieldset>

        <legend>creation d'editeur:</legend>
        <p> 
            <input type ="hidden" name ="controller" value="editeur" />
        </p>
        <p>
            <input type='hidden' name='action' value='created'>
            <label for="n_id">nom</label> :
            <input type="text" placeholder="Ex : Gallimard" name="nom" id="n_id" required/>
        </p>
        <p>
            <label for="na_id">nationalite</label> :
            <input type="text" placeholder="Ex : Français" name="nationalite" id="na_id" required/>
        </p>
        <p>
            <label for="np_id">nomProprietaire</label> :
            <input type="text" placeholder="Ex : Antoine Gallimard" name="nomProprietaire" id="np_id" required/>
        </p> 
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset> 
</form>


