function Verif2(){
    msg="";

    I=document.getElementById("identifiant").value;
	if(Alpha(I)==false ||Estnum(I)==false || I.length>10 || I.length=="")
	msg+="Identifiant doit etre alphanumerique et de longueur maximale 10 caracteres.\n";

    N=document.getElementById("nom").value;
	if(N.length>15 || AlphaEsp(N)==false || N.length=="")
	msg+="Nom doit etre en Alphabetique et de longueur maximale 15 caracteres.\n";

    P=document.getElementById("prenom").value;
	if(P.length>15 || AlphaEsp(P)==false || P.length=="")
	msg+="Prenom doit etre en Alphabetique et de longueur maximale 15 caracteres.\n";

    mdp=document.getElementById("MDP").value;
	if(Alpha(mdp)==true ||Estnum(mdp)==false || mdp.length>20 || mdp.length=="")
	msg+="Mot de Passe doit etre numerique et de longueur maximale 20 caracteres.\n";

    P=document.getElementById("T3").value;
    if(P=="" || P<0)
    msg+="Prix Invalide \n";
	else if(Estnum(P)==false || AlphaEsp(P)==true)
	msg+="Prix Invalide\n";

	C1=document.getElementById("cours");
    C2=document.getElementById("chapitre");
	if((C1.checked==false) || (C2.checked==false))
	msg+="saisir de votre choix obligatoir \n";
    else if((C2.checked==true) || (C1.checked==false))
    msg+="Vous devez cocher la case 'Cours' si vous cochez la case 'Chapitre'. \n";

    if (msg != "") {
        alert(msg);
        return false;
      }
      return true;
}

function Alpha(ch){
	ch=ch.toUpperCase();
	for(var i=0; i<ch.length; i++)
		if((ch.charAt(i)<"A" || ch.charAt(i)>"Z") ) 
			return false;
	return true;
}

function Estnum(ch){
	for(var i=0; i<ch.length; i++)
		if((ch.charAt(i)<"0" || ch.charAt>"9") && (ch.charAt(i)==" "))
			return false;
		return true;	
}


