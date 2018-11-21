<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $age = rand (1,100);
    $gender = 'Homme';
    function TwoVariable($age,$gender)
    {
      if ($gender == "Homme" && $age >= 18) {
         return "Vous êtes un homme et vous êtes majeur.";
       } else if ($gender == "Homme" && $age < 18) {
         return "Vous êtes un homme et vous êtes mineur.";
       } else if ($gender == "Femme" && $age >= 18) {
         return "Vous êtes une femme et vous êtes majeure.";
       } else {
         return "Vous êtes une femme et vous êtes mineure.";
       }
    }
    ?>
    <p><?php
    echo TwoVariable($age,$gender);
    ?></p>
    <p><?php
    echo $age .' '. $gender;
    ?></p>
  </body>
</html>
