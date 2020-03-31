<?php
$woodchunk = true;
$rope = true;
$nails = true;
$knife = true;




?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device=width, initial-scale-1.0">
     <title>Document</title>
  </head>  

  <body>
  <h1>Inventář</h1>
<?php
if($woodchunk)  {echo '<img src="https://images.obi.cz/product/CZ/1500x1500/332529_1.jpg" alt="Dřevo" />';
}
if($rope) {echo '<img src="https://images.obi.cz/product/DE/1500x1500/944063_2.jpg" alt="Provaz" />';
}
if($nails) {echo '<img src="https://www.soutok.com/4155-big_default_2x/hrebiky-100mm-5kg-.jpg" alt="Hřebíky" />';
}
if($knife) {echo '<img src="https://i.pinimg.com/236x/ac/85/df/ac85dff096cc5c145b0a194973a56493--knife-making-make-a-difference.jpg" alt="Nůž" />';
}

?>

<h1>Můžeš vyrobit</h1>
<?php

if($rope && $knife && $woodchunk ) {
    echo '<img src="https://i.pinimg.com/originals/2f/88/ea/2f88ea584eb56f57a5ccee01b5e16cf4.jpg" alt="Luk" />';
} elseif($nails && $woodchunk) {
    echo '<img src="https://www.jedishop.cz/_obchody/www.jedishop.cz/prilohy/298/foam-bat-baby-sitter-bat-with-nails-89-cm-0.jpg.big.jpg" alt="Pálka s hřebíky" />';
} elseif($rope && $woodchunk) {
    echo '<img src="https://i.ytimg.com/vi/YZLSVzQEbEk/maxresdefault.jpg" alt="Nunčaky" />';
} elseif($knife && $woodchunk) {
    echo '<img src="https://authorizedboots.com/wp-content/uploads/2016/01/javeline-spear.3.jpg" alt="Kopí" />';
} else {
    echo '<img src="https://images.squarespace-cdn.com/content/v1/538bee3ae4b0aafa5a5ac79e/1421819269557-PYRMRUS8YQGBG3XT82UK/ke17ZwdGBToddI8pDm48kLxnK526YWAH1qleWz-y7AFZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVH33scGBZjC30S7EYewNF5iKKwhonf2ThqWWOBkLKnojuqYeU1KwPvsAK7Tx5ND4WE/Hazardous+%22No%22+Buy+Recycling+Materials" alt="Nedostatek materiálu" />';
}



?>
  


  
</body>
</html>
>