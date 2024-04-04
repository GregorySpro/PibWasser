<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body style="font-family: Irish Grover;">
    <div class="desktop">
      <div class="div">
        <header class="header">
          <div class="overlap">
            <div class="nav">
              <div class="tarifs">
                <div class="overlap-group"><img src="rectangle-tarifs.svg" alt="" onclick="window.location.href = 'tarifs.php';" style="cursor:pointer;"><div class="tarifs-text" ><a href="tarifs.php" style="cursor:pointer;text-decoration:none;color:black">TARIFS</a></div></div>
              </div>
              <div class="RC">
                <div class="RC-text-wrapper"><img src="rectangle-rc.svg" alt="" onclick="window.location.href = 'rc.html';" style="cursor:pointer;"><div class="RC-text"><a href="rc.html" style="cursor:pointer;text-decoration: none;color:black">RC</a></div></div>
              </div>
              <div class="autres">
                <div class="autres-text-wrapper"><img src="rectangle-rc.svg" alt="" onclick="window.location.href = 'other.html';" style="cursor:pointer;"><div class="autres-text"><a href="other.html" style="cursor:pointer;text-decoration: none;color:black">AUTRES</a></div></div>
              </div>
              <div class="contact">
                <div class="contact-text-wrapper"><img src="rectangle-contact.svg" alt="" onclick="window.location.href = 'MeContact.html';" style="cursor:pointer;"><div class="MeContact-text"><a href="contact.html" style="cursor:pointer;text-decoration: none;color:black">CONTACT</a></div></div>
              </div>
              <img class="emoji" src="emoji.png" />
              <img class="img" src="emoji-1.png" />
            </div>
            <div class="logo" onclick="window.location.href = 'index.html';" style="cursor:pointer;"><img class="emoji-2" src="emoji-2.png" /></div>
          </div>
        </header>

        <body>
        <?php

$bddPDO = new PDO('mysql:host=sql309.infinityfree.com;dbname=if0_36307063_Produits','if0_36307063','RKT6tjRkVQ');
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = "SELECT * FROM liste_produits";
$result = $bddPDO->query($requete);

if (!$result){
    echo "La récupération des données à rencontrée un problème !";

}else{
    $nbr_produits = $result->rowCount();
    ?>

    <table style="border:black 1px solid;text-align:center;margin-top:300px;">
        <tr>
            <th style="border:black 1px solid;">nom du produit</th>
            <th style="border:black 1px solid;">prix du produit</th>
        </tr>

    <?php
    while($ligne=$result->fetch(PDO::FETCH_NUM)){
        echo "<tr>";
        foreach($ligne as $valeur){
            echo "<td style='border:black 1px solid;'>$valeur</td>";
        }
        echo "</tr>";
    }
    ?>


    </table>

    <?php
    $result->closeCursor();
}
?>

</body>
</html>