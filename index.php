<?php
if(isset($_REQUEST['email'])){
     mail($_REQUEST['email'], 'Carte de voeux cadeau !', 'http://anthonyt.student.codeur.online/carte-voeux/index.html', null,
     'anthony.t@codeur.online');
   }
   header('Location: /carte-voeux/index.html');
     exit();
