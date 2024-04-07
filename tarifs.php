<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="desktop">
      <div class="div">
        <header class="header">
          <div class="overlap">
            <div class="nav">
              <div class="tarifs">
                <div class="overlap-group"><img style="width:180px;cursor:pointer;" src="rectangle-tarifs.webp" alt="" onclick="window.location.href = 'tarifs.php';"><div class="tarifs-text" ><a href="tarifs.php" style="cursor:pointer;text-decoration: none;color:black">TARIFS</a></div></div>
              </div>
              <div class="RC">
                <div class="RC-text-wrapper"><img style="width:180px;cursor:pointer;" src="rectangle-rc.webp" alt="" onclick="window.location.href = 'rc.html';"><div class="RC-text"><a href="rc.html" style="cursor:pointer;text-decoration: none;color:black">RC</a></div></div>
              </div>
              <div class="autres">
                <div class="autres-text-wrapper"><img style="width:180px;cursor:pointer;" src="rectangle-rc.webp" alt="" onclick="window.location.href = 'other.html';"><div class="autres-text"><a href="other.html" style="cursor:pointer;text-decoration: none;color:black">AUTRES</a></div></div>
              </div>
              <div class="contact">
                <div class="contact-text-wrapper"><img style="width:180px;cursor:pointer;" src="rectangle-contact.webp" alt="" onclick="window.location.href = 'MeContacter.html';"><div class="contact-text"><a href="MeContacter.html" style="cursor:pointer;text-decoration: none;color:black">CONTACT</a></div></div>
              </div>
              <img class="emoji" src="emoji.webp" />
              <img class="img" src="emoji-1.webp" />
            </div>
            <div class="logo" onclick="window.location.href = 'index.html';" style="cursor:pointer;"><img class="emoji-2" src="emoji-2.webp" /></div>
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
    <div style="display:flex;width:100%;">
      <table style="margin-left:auto;margin-right:auto;border:black 1px solid;text-align:center;margin-top:300px;">
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
    </div>
    

    <?php
    $result->closeCursor();
}
?>

</body>
</html>