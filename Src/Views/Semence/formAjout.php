<h1>Informations de la semence</h1>

<div>
    <form enctype="multipart/form-data" method="post" action="index.php?entity=semence&action=nouvelle">
        <div>
            <label for="inputTitle">Nom de la semence : </label>
            <input type="text" name="nomSem" required >
        </div>
        <div>
            <label for="inputTitle">Famille de la semence : </label>
            <input type="text" name="famSem" required >
        </div>
        <div>
            <label for="inputTitle">Photo de la semence : </label>
            <input type="file" name="pictSem"  >
        </div>
        <div>
            <label for="inputTitle">Quantite : </label>
            <input type="number" name="quantSem"  >
        </div>
        <div>
            <label for="inputTitle">Conseil : </label>
            <input type="text" name="conseilSem" >
        </div>
        <div>
            <label for="inputTitle">Periode de plantation : </label>
            <input type="text" name="ppDebut" required >
            <input type="text" name="ppFin" required >
        </div>
        <div>
            <label for="inputTitle">Periode de recolte : </label>
            <input type="text" name="prDebut" required >
            <input type="text" name="prFin" required >
        </div>
        <button type="reset">reset</button>
        <button type="submit">Soumettre</button>
    </form>    
</div>