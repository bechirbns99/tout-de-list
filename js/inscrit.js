function verif() {
    n = document.f.nom.value;
    p = document.f.pre.value;

    if (n.length == "") {
        alert("remplir votre nom");


    } else {
        for (i = 0; i < n.length; i++) {
            if (isNaN(n[i]) == false) {
                alert("verfier votre nom");
            }
        }

    }


    if (p.length == "") {
        alert("remplir votre prenom");

    } else {
        for (j = 0; j < n.length; j++) {
            if (isNaN(p) == false) {
                alert("verfier votre prenom");
            }
        }

    }

    if (document.f.date.value == "") {
        alert("donner votre date de naissance");
    }


    if ((document.f.s[0].checked == false) || (document.f.s[1].checked == false)(document.f.s[2].checked == false)) {
        alert("selectionner votre genre");

    }

    if ((document.f.x.checked == false) || (document.f.x1.checked == false) || (document.f.x2.checked == false)) {
        alert("selectionner votre niveau");

    }

    if (document.f.nat.selectedIndex == false) {
        alert("selctionner votre nationalité");

    }
    if (document.f.text.value == "") {
        alert("remplir votre bio");

    }

    em = document.f.e.value;
    if (em.length == "") {
        alert("remplir votre email");

    } else {
        for (i = 0; i < em.length; i++) {
            if (em[i].indexOf("@") == false) {
                alert("verfier votre email");

            }

        }
    }
    ps = document.f.e.value;
    if (ps.length == "") {
        alert("remplir votre passowrds");

    }

}