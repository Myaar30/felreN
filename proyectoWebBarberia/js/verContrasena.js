function mostrar() {
    var tipo = document.getElementById("claveActual");
    if (tipo.type == 'password'){
        tipo.type = 'text';
    } else {
        tipo.type = 'password';
    }
}
function mostrar2() {
    var tipo = document.getElementById("nuevaClave");
    if (tipo.type == 'password'){
        tipo.type = 'text';
    } else {
        tipo.type = 'password';
    }
}

function mostrar3() {
    var tipo = document.getElementById("confirmacionClave");
    if (tipo.type == 'password'){
        tipo.type = 'text';
    } else {
        tipo.type = 'password';
    }
}
