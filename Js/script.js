var Requete = new XMLHttpRequest();
var cherche = document.getElementById('recherche');
var url ="./Traitements/Traitement_1.php?valeur=$_GET['valeur']";
Requete.open('GET', url , true);

Requete.onreadystatechange = function ()
 {
   if(Requete.readyState == 4)
   {
       document.getElementById('all').innerHTML = Requete.responseText;
   } 
 }
    Requete.send();