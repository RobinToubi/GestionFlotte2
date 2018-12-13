<?php $this->titre = 'Centre Technique '.$centre['CraisonSociale']; ?>

<?php $this->banniere = 'Centre Technique '.$centre['CraisonSociale'] ?>

    <article>
        <header>
				<h1>Centre Technique <?= $centre['CraisonSociale'] ?></h1>
        </header>

        <hr/>

        <b>Adresse :</b><br/>
        <?echo $centre['Cadresse']?><br/>
        <?echo $centre['CcodePostal']?> <?echo $centre['Cville']?><br/>

        <b>Numero de téléphone : </b> <?echo $centre['Ctelephone']?><br/>

        <hr/>

        <h2>Modifier le centre technique</h2>

        <form action="index.php?action=modifierCentre&idCentre=<?echo $centre['Cagrement']?>" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="raisonsociale">Raison Sociale</label>
                    </td>
                    <td>
                        <input id="raisonsociale" type="text" name="raisonsociale" value="<?echo $centre['CraisonSociale']?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">Adresse</label>
                    </td>
                    <td>
                        <input id="adresse" type="text" name="adresse" value="<?echo $centre['Cadresse']?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="codepostal">Code Postal</label>
                    </td>
                    <td>
                        <input id=codepostal type="number" name="codepostal" value="<?echo $centre['CcodePostal']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ville">Ville</label>
                    </td>
                    <td>
                        <input id="ville" type="text" name="ville" value="<?echo $centre['Cville']?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telephone">Téléphone</label>
                    </td>
                    <td>
                        <input id="telephone" type="number" name="telephone" value="<?echo $centre['Ctelephone']?>"/>
                    </td>
                </tr>                
                </table>
            <input type="submit" value="Modifier">
        </form>
        

    </article>
    <hr />