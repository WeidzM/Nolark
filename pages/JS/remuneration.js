const fixe = 1100;

window.addEventListener("load", function () {

    var ancien = parseInt(window.document.querySelector("#num_ancien").value);
    var S20 = parseInt(window.document.querySelector("#num_S20").value);
    var XS = parseInt(window.document.querySelector("#num_XS").value);
    var MT = parseInt(window.document.querySelector("#num_MT").value);
    var Prix_S20 = parseInt(window.document.querySelector("#prix_S20").value);
    var Prix_XS = parseInt(window.document.querySelector("#prix_XS").value);
    var Prix_MT = parseInt(window.document.querySelector("#prix_MT").value);
    var kilometres = parseInt(window.document.querySelector("#nbr_km").value);

    window.document.querySelector("#btn_envoyer").addEventListener("click", function () {

        var remuneration = 0;

        //Calcul des CA
        var CA_XS = XS * Prix_XS;
        var CA_MT = MT * Prix_MT;
        var CA_S20 = S20 * Prix_S20;

        //Prime
        remuneration += primeAncien(fixe, ancien)

        //Commission
        console.log(" Com XS " + commissionXS(CA_XS, XS) + " Com S20 " + commissionS20(CA_S20) + " Com SMT " + commissionMT(CA_MT, MT));
        remuneration += commissionXS(CA_XS,XS) + commissionS20(CA_S20) + commissionMT(CA_MT,MT)

        //Indemnité
        remuneration += calculIndemnité(kilometres)

        remuneration += fixe;

        window.document.querySelector("#remuneration").innerHTML = "La rémunération sera de : " + remuneration + " €";
    }, false);

}, false);

function primeAncien(fixe, nbAncien) {
    if(nbAncien>=10) {
        return 1.06*fixe;
    } else if (nbAncien>=5) {
        return 1.03*fixe;
    } else {
        return 0;
    }
}

function commissionS20(CA) {
    return CA * 0.02;
}

function calculIndemnité(km) {
    if (km * 0.15 >= 350) {
        return 350;
    }
    else {
        return km * 0.15;
    }
}

function commissionXS(CA,Vente) {
    if (Vente > 50) {
        return CA * 0.06;
    }
    else {
        return 0;
    }
}

function commissionMT(CA, Vente) {
    if (Vente <= 20) {
        return CA * 0.04;
    } else if (Vente > 20 && Vente <= 20) {
        return CA * 0.06;
    } else if (Vente > 50) {
        return CA * 0.1;
    } else {
        return 0;
    }
}