function Calculatrice(toto)
{
    this._ConteneurId = null;
    /*
    * Constructeur de la classe
    */
    
    this.Construct = function(titi)
    {
        this._ConteneurId = titi;
        this.CreateHtml();
    };
    
    this.CreateHtml = function()
    {
        let conteneurElement = document.getElementById(this._ConteneurId);
        conteneurElement.innerHTML =  '<table><tr id="tr1"><td id="tdeffacer"><button id="beffacer">Effacer</button></td><td colspan="3"><input placeholder="0" colspan="3"></td></tr><tr id="tr2"><td id="tdpourc"><button id="bpourc">%</button></td><td id="tdxcarre"><button id="bxcarre">x²</button></td><td id="tdrcarre"><button id="brcarre">√</button></td><td id="tddivi"><button id="bdivi">÷</button></td></tr><tr id="tr3"><td id="tdsept"><button id="bsept">7</button></td><td id="tdhuit"><button id="bhuit">8</button></td><td id="tdneuf"><button id="bneuf">9</button></td><td id="tdX"><button id="bX">X</button></td></tr><tr id="tr4"><td id="tdquatre"><button id="bquatre">4</button></td><td id="tdcinq"><button id="bcinqr">5</button></td><td id="tdsix"><button id="bsix">6</button></td><td id="tdsept"><button id="bsept">-</button></td></tr><tr id="tr5"><td id="tdun"><button id="bun">1</button></td><td id="tddeux"><button id="bdeux">2</button></td><td id="tdtrois"><button id="btrois">3</button></td><td id="tdplus"><button id="plus">+</button></td></tr><tr id="tr6"><td id="tdplusetmoin"><button id="bplusetmoin">+/-</button></td><td id="tdzero"><button id="bzero">0</button></td><td id="tdvirgule"><button id="bvirgule">,</button></td><td id="tdegal"><button id="begal">=</button></td></tr></table>';
    };

    this.Construct(toto);
}

// var calculette = new Calculatrice('TODO');