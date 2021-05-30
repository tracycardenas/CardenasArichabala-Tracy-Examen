function seleccionarAutor() {
    let autor_id = document.getElementById("cbx_autor").value;
    //document.write(autor_id);
    if (autor_id == "") {
    document.getElementById("lblautorseleccionado").innerHTML = "-----";
    } else {
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    //alert("llegue");
    document.getElementById("lblautorseleccionado").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("GET","../../public/controladores/getautor.php?autor_id="+autor_id,true);
    xmlhttp.send();
    }
    return false;
}

function buscarLibro() {
    let nombreAutor = document.getElementById("nombreAutor").value;
    //document.write(autor_id);
    if (nombreAutor == "") {
    document.getElementById("informacion").innerHTML = "";
    } else {
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    //alert("llegue");
    document.getElementById("informacion").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("GET","../../public/controladores/buscar.php?nombreAutor="+nombreAutor,true);
    xmlhttp.send();
    }
    return false;
}