function Calculatrice(ConteneurId)
{

    /*
    * Constructeur de la classe
    */
    this.Construct = function(ConteneurId)
    {
        this.CreateHtml();
    };
    
    this.CreateHtml = function()
    {
        let tableau = document.createElement('table') ;
        let body = document.getElementsByTagName('body')[0];
       

        body.appendChild(tableau);
        console.log(tableau);

        let l1 = document.createElement('tr'); 
        tableau.appendChild(l1);
        let l1c1 = document.createElement('button');
        l1.appendChild(l1c1);
        let l1c2 = document.createElement('input');
        l1c2.setAttribute('colspan', 3);

        l1c1.innerHTML ='AC';

        l1c2.innerHTML ='input';

        l1.appendChild(l1c2);

        let l2 = document.createElement('tr');
        tableau.appendChild(l2);

        let l2c1 = document.createElement('td');
        l2.appendChild(l2c1);
        let l2c2 = document.createElement('td');
        l2.appendChild(l2c2);
        let l2c3 = document.createElement('td');
        l2.appendChild(l2c3);
        let l2c4 = document.createElement('td');
        l2.appendChild(l2c4);

        

        let l3 = document.createElement('tr');
        tableau.appendChild(l3);

        let l3c1 = document.createElement('td');
        l3.appendChild(l3c1);
        let l3c2 = document.createElement('td');
        l3.appendChild(l3c2);
        let l3c3 = document.createElement('td');
        l3.appendChild(l3c3);
        let l3c4 = document.createElement('td');
        l3.appendChild(l3c4);

        

        let l4 = document.createElement('tr');
        tableau.appendChild(l4);

        let l4c1 = document.createElement('td');
        l4.appendChild(l4c1);
        let l4c2 = document.createElement('td');
        l4.appendChild(l4c2);
        let l4c3 = document.createElement('td');
        l4.appendChild(l4c3);
        let l4c4 = document.createElement('td');
        l4.appendChild(l4c4);

      

        let l5 = document.createElement('tr');
        tableau.appendChild(l5);

        let l5c1 = document.createElement('td');
        l5.appendChild(l5c1);
        let l5c2 = document.createElement('td');
        l5.appendChild(l5c2);
        let l5c3 = document.createElement('td');
        l5.appendChild(l5c3);
        let l5c4 = document.createElement('td');
        l5.appendChild(l5c4);

        

        let l6 = document.createElement('tr');
        tableau.appendChild(l6);

        let l6c1 = document.createElement('td');
        l6.appendChild(l6c1);
        let l6c2 = document.createElement('td');
        l6.appendChild(l6c2);
        let l6c3 = document.createElement('td');
        l6.appendChild(l6c3);
        let l6c4 = document.createElement('td');
        l6.appendChild(l6c4);

    //    ajout de fonction sur les boutons


        l6c1.innerHTML ='+/-';
        let bplusetmoin = document.createElement("button");
        l6c1.appendChild(bplusetmoin)
        bplusetmoin.setAttribute('type','texte');

        l6c2.textContent ='0';
        let bzero = document.createElement("button");
        l6c2.appendChild(bzero)
        bzero.setAttribute('type','texte');

        l6c3.innerHTML =',';
        let bvirgule = document.createElement("button");
        l6c3.appendChild(bvirgule)
        bvirgule.setAttribute('type','texte');

        l6c4.innerHTML ='=';
        let begal = document.createElement("button");
        l6c4.appendChild(begal)
        begal.setAttribute('type','texte');

        l5c1.innerHTML ='1';
        let bun = document.createElement("button");
        l5c1.appendChild(bun)
        bun.setAttribute('type','texte');

        l5c2.innerHTML ='2';
        let bdeux = document.createElement("button");
        l5c2.appendChild(bdeux)
        bdeux.setAttribute('type','texte');

        l5c3.innerHTML ='3';
        let btrois = document.createElement("button");
        l5c3.appendChild(btrois)
        btrois.setAttribute('type','texte');

        l5c4.innerHTML ='+';
        let bplus = document.createElement("button");
        l5c4.appendChild(bplus)
        bplus.setAttribute('type','texte');

        l4c1.innerHTML ='4';
        let bquattre = document.createElement("button");
        l4c1.appendChild(bquattre)
        bquattre.setAttribute('type','texte');

        l4c2.innerHTML ='5';
        let bcinq = document.createElement("button");
        l4c2.appendChild(bcinq)
        bcinq.setAttribute('type','texte');

        l4c3.innerHTML ='6';
        let bsix = document.createElement("button");
        l4c3.appendChild(bsix)
        bsix.setAttribute('type','texte');

        l4c4.innerHTML ='-';
        let btiret = document.createElement("button");
        l4c4.appendChild(btiret)
        btiret.setAttribute('type','texte');

        l3c1.innerHTML ='7';
        let bsept = document.createElement("button");
        l3c1.appendChild(bsept)
        bsept.setAttribute('type','texte');

        l3c2.innerHTML ='8';
        let bhuit = document.createElement("button");
        l3c2.appendChild(bhuit)
        bhuit.setAttribute('type','texte');

        l3c3.innerHTML ='9';
        let bneuf = document.createElement("button");
        l3c3.appendChild(bneuf)
        bneuf.setAttribute('type','texte');

        l3c4.innerHTML ='X';
        let bX = document.createElement("button");
        l3c4.appendChild(bX)
        bX.setAttribute('type','texte');

        l2c1.innerHTML ='%';
        let pourc = document.createElement("button");
        l2c1.appendChild(pourc)
        pourc.setAttribute('type','texte');

        l2c2.innerHTML ='x²';
        let xcarre = document.createElement("button");
        l2c2.appendChild(xcarre)
        xcarre.setAttribute('type','texte');

        l2c3.innerHTML ='√';
        let rcarre = document.createElement("button");
        l2c3.appendChild(rcarre)
        rcarre.setAttribute('type','texte');

        l2c4.innerHTML ='÷';
        let divis = document.createElement("button");
        l2c4.appendChild(divis)
        divis.setAttribute('type','texte');

        console.log(tableau);

        let nombre = document.createElement("placeholder");
        


        



    };

    this.Construct(ConteneurId);
}

var calculette = new Calculatrice('TODO');






