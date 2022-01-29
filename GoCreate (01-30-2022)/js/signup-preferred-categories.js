function control(j) {
    var total = 0;
    for (var i = 0; i < document.pick.categ.length; i++) {
        if (document.pick.categ[i].checked) {
            total = total + 1;
        }
        if (total > 3) {
            document.pick.categ[j].checked = false;
            return false;
        }
    }
}