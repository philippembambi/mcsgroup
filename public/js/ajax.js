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
objetXHR.open("get", "getTerminal", true);

 objetXHR.onreadystatechange = init_terminal;
 objetXHR.send();
}

function init_terminal()
{
    if (objetXHR.readyState == 4) {
        if (objetXHR.status == 200) {
            var rep = objetXHR.responseText;
            var data = JSON.parse(rep);
 //        alert(data.success);
         console.log("Mcs Group Server response : " +data.success);

        }
           else{
               // alert(" Erreur serveur : " + objetXHR.status + "  -  " + objetXHR.statusText);
                objetXHR.abort();
                objetXHR = null;
               }
           }

}



function add_to_basket()
{
    var article = document.getElementById("art_id").value;
    var _token   = document.getElementById("token").value;

    localStorage.setItem("mcsarticle", article);

    objetXHR = creationXHR();
   var parametre = {article: article};

   objetXHR.open("get", "basket.add", false);

   objetXHR.onreadystatechange = init_basket;
   //objetXHR.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
   objetXHR.send(parametre);
}

function init_basket()
{
   if (objetXHR.readyState == 4) {
       if (objetXHR.status == 200) {

   console.info('Etat de readyState :' + objetXHR.readyState);
   var rep = objetXHR.responseText;
   var data = JSON.parse(rep);

   alert(data.success);
}
else{
    console.info(" Erreur serveur : " + objetXHR.status + "  -  " + objetXHR.statusText);
    alert(" Erreur serveur : " + objetXHR.status + "  -  " + objetXHR.statusText)
    objetXHR.abort();
    objetXHR=null;
   }
}
}


