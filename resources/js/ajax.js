    /*---------------------------MOTEUR AJAX DE KARTABLE By Philippe Mbambi Mayele : philippembambi413@gmail.com -----------------------*/
    function creationXHR()
    { // fonction générique de l'instiaciation de l'objet XmlHttpRequest
        var resultat=null;
        try {
            // Test pour les navigateurs : Mozilla, Opera, safari...
            resultat= new XMLHttpRequest();
            }
            catch (Error)
            { try {
                // Test pour les navigateurs Internet Explorer > 5.0
                resultat= new ActiveXObject("Msxml2.XMLHTTP"); }
                catch (Error) {
                    try { // Test pour le navigateur Internet Explorer 5.0
                    resultat= new ActiveXObject("Microsoft.XMLHTTP"); }
                    catch (Error) { resultat= null;
                    } }  }
                    return resultat;
                 }


function getTerminal()
{
    objetXHR = creationXHR();
  objetXHR.open("get", "./getTerminal", true);

   objetXHR.onreadystatechange = init_terminal;
   objetXHR.send();
}

function init_terminal()
{
    if (objetXHR.readyState == 4) {
        if (objetXHR.status == 200) {
       alert(reponse);

       }
           else{
                alert(" Erreur serveur : " + objetXHR.status + "  -  " + objetXHR.statusText);
                objetXHR.abort();
                objetXHR = null;
               }
           }

}

