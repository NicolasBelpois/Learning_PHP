<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo tableaux</title>
  </head>
  <body>
    <?php
$famille = ["Jéremy", "Jean-Huges", "Anne-Marie", "Anne"];
  print_r($famille);
  ?>
  <p><?php

$plat_preferer = ["Avoltini", "pate carbo", "hamburger"];
  print_r($plat_preferer);
     ?></p>

     <p><?php
$film_series = ["5 element", "GoT", "Westworld", "starwars"];
  print_r($film_series[0]);
      ?></p>
      <p><?php
$me = [ 'age' => 27,
        'ville' => 'Bruxelles',
        'prenom' => 'Nicolas',
        'taille' => 1.83,
        'aime_le_foot' => false,
        'aime_les_jeuxvideo' => true,
        'hobbie' => array("music", "jeux_video", "film", "series"),
      ];




$papa = [ 'age' => 58,
          'ville' => 'Brest',
          'prenom' => 'Jean-Huges',
          'taille' => 1.95,
          'aime_le_foot' => false,
          'aime_les_jeuxvideo' => true,
          'hobbie' => array("music", "informatique", "film", "cuisine")
      ];
      $me["papa"] = $papa;
      $me['hobbie'][] = "taxidermie";
      $me['prenom'] = 'Dieudonné';
            echo "<pre>";
            print_r($me);
            echo "</pre>";
          $result = count($papa['hobbie']);
          $result1 = count($me['hobbie']);
            echo $result + $result1;

            $toi = [ 'age' => 27,
                    'ville' => 'Bruxelles',
                    'prenom' => 'Erika',
                    'taille' => 1.63,
                    'aime_le_foot' => false,
                    'aime_les_jeuxvideo' => true,
                    'hobbie' => array("music", "psychologie", "film", "series"),
                  ];
$result_hobbie_int = array_intersect($me['hobbie'],$toi['hobbie']);
$result_hobbie_fus = array_merge($me['hobbie'],$toi['hobbie']);
  echo "<pre>";
  print_r($result_hobbie_int);
  print_r($result_hobbie_fus);
  echo "</pre>";
       ?></p>

       <p><?php
$web_developement = [
  'front_end' => array(),
  'back_end' => array()
];
$web_developement['front_end'][] = "xhtml";
$web_developement['back_end'][] = "Ruby on rails";
$web_developement['front_end'][] = "CSS";
$web_developement['back_end'][] = "flash";
$web_developement['back_end'][] = "Javascript";
$web_developement['front_end'][0] = "html";
$web_developement['back_end'][1] = "";

echo "<pre>";
print_r($web_developement);
echo "</pre>";
        ?></p>
  </body>
</html>
