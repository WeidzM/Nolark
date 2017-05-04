const fixe = 1100;

window.addEventListener("load", function () {
    window.document.querySelector("#nbr_accident").addEventListener("change", function () {
        window.document.querySelector("#compt_accident").value = window.document.querySelector("#nbr_accident").value;
    }, false);

    window.document.querySelector("#btn_envoyer").addEventListener("click", function () {

        var accidents = parseInt(window.document.querySelector("#nbr_accident").value);
        var kilometres = parseInt(window.document.querySelector("#nbr_km").value);
        var ancien = parseInt(window.document.querySelector("#age_ancien").value);
        var remuneration = 0;
        remuneration += primeAccident(accidents, primeAncien(ancien) + primeKilometres(kilometres));
        window.document.querySelector("#remuneration").innerHTML = "La rémunération sera de : " + remuneration + " €";

        //testUnitaire(primeAncien(2)==0);
        //testUnitaire(primeAncien(3)==0);
        //testUnitaire(primeAncien(4)==300);
        //testUnitaire(primeAncien(5)==331");
        //testUnitaire(primeAccident(0, 100)==100);
        //testUnitaire(primeAccident(1, 100)==50);
        //testUnitaire(primeAccident(2, 100) == 33);
        //testUnitaire(primeAccident(2, 100) == 20); //faux
        //testUnitaire(primeAccident(3, 100)==25);
        //testUnitaire(primeAccident(3, 100)==25);
        //testUnitaire(primeAccident(3, 100)==25);
        //testUnitaire(primeKilometres(100)==1);
        //testUnitaire(primeKilometres(400)==4);
        //testUnitaire(primeKilometres(400)==9); //faux
        //testUnitaire(primeKilometres(12)==0.12);

    }, false);

}, false);



function primeAncien(nb) {
    if(nb>3) {
        return 300 + Math.max(0,((nb-4)*30));
    } else {
        return 0;
    }
}

function primeAccident(nb,prime) {
    switch (true) {
        case nb == 1:
            return prime * 0.5;
        case nb == 2:
            return prime * 0.33;
        case nb == 3:
            return prime * 0.25;
        case nb >= 4:
            return 0;
        default:
            return prime;
    }
}

function primeKilometres(km) {
    if (km * 0.01 >= 900) {
        return 900;
    }
    else {
        return km * 0.01;
    }
}

function testUnitaire(test) {
    var testEnString = JSON.stringify(test);
    var message = "Test unitaire de " + testEnString;
    var p = document.createElement('p');
    if(test){
        message += " : OK";
        p.style.color = "green";
    }
    else{
        message += " : Erreur";
        p.style.color = "red";
    }
    p.innerHTML = message;
    document.body.appendChild(p)
}