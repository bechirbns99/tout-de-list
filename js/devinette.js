n = Math.floor((Math.random() + 1) * 10);
i = 0;
v = true;

do {
    do {
        x = Number(prompt("donnes un nombre "));
        i++;
        if (x < n) {
            document.write("plus petit <br>" + x);
            v = false;
        } else if (x > n) {
            document.write("plus grand<br>" + x);
            v = false;

        } else {
            document.write("bravo le nombre est<br> " + x);
            v = true;
            break;
        }

    } while (i < 8);
    if ((i == 8) || (v == false)) {
        document.write("maleureux le nombre est " + n);
    }
    t = prompt("vous voulez repeter o/n");
}
while (t == "o");