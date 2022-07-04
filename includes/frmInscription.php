<form action="index.php?page=inscription" method="post">

<div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" />
</div>

<div>
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" />
</div>

<div>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" />
</div>

<div>
    <label for="mdp1">Mot de passe :</label>
    <input type="password" name="mdp1" id="mdp1" />
</div>

<div>
    <label for="mdp2">Vérification mot de passe :</label>
    <input type="password" name="mdp2" id="mdp2" />
</div>

<div>
<input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
</div>

<input type="hidden" name="frmInscription">
</form>