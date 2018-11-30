<?php
  /*
  ini_set('dispay_errors', 1);
  error_reporting(E_ALL); # geeft alle foutmeldingen weer

  $hello = "Hello World!"; # variabele met dollarteken aangeven
  var_dump($hello); # geeft de rauwe waarde van de variabele weer

  $voornaam = "Dorien";
  $achternaam = "Hulshagen";
  */


  include_once 'secured/_variables.php';
  #op deze manier staat alles veilig in de andere map en kan je er langs buiten niet meer aangeven


  #BTW berekenen oefening

  $product = 20;

?>




<!doctype html>
<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    <?php echo $hello . ' Liefs Dorien.' ;?> <br/> <!--Met een . kan je combineren-->
    <?php echo $hello , ' Liefs Dorien.' ;?> <br/> <!-- bij echo van string enkele quotes anders wel dubbele voor string -->
    <!-- . zorgt voor A + B = C (nieuwe string) en , zorgt voor A B
    een komma is dus sneller want er zijn geen berekeningen.-->
    <?php
      # 1 lijn commentaar doen we met de hashtag

      /*multilines op deze manier
      dit was ook zo in JS*/

      /*print en echo zijn hetzelfde commando in PHP */

      echo 'Ik ben ' , $voornaam , ' ' ,  $achternaam , ' en ik ben voor het eerst in PHP aan het programmeren.<br/>';
      print ('Ik ben ' . $voornaam . ' ' .  $achternaam . ' en ik ben voor het eerst in PHP aan het programmeren. <br/>');
      #print is een functie hierin moet je concatineren met een .

      #proberen een map te beveiligen --> in de map een map secured maken
      #in firstPHP mapje een bestand maken met extensie .htaccess
      #via git bash ingeven $ touch .htaccess want dat lukt niet gewoon via linkermuisklik
      #onderstaande in .htacces ingeven
      /*Order allow,deny
      Deny from all*/
      #als je bestandje naar secured map verplaatst is enkel deze map niet meer bereikbaar


      #BTW berekenen oefening
      $btw_bedrag = 0.21 * $product;
      $btw_bedrag_inclusief = $product + round($btw_bedrag, 2);
      echo 'De BTW van dit product bedraagt ' , $btw_bedrag , ' euro. <br/>';
      echo 'De totale prijs zal ' , $btw_bedrag_inclusief , ' euro bedragen.';



    ?>
    <address>
      Copyright &copy; <?php echo date('Y');?> Winbooks&reg;. <br/>
      Alle rechten voorbehouden. All rights reserved.

    </address>

  </body>
</html>
