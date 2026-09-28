/* Buscar los elemtos por su id */

let mensaje = document.getElementById("mensaje");
let boton = document.getElementById("btncambiar");

/* Escuchar el clik del botón */
boton.addEventListener("click", function(){
    /* Aqui se cambia el texto */
mensaje.textContent = "Gracias por ver mi portafolio :)"
})

/* Buscar los elementos */
let cajas = document.querySelectorAll(".lista-habilidades li");
let btnColor = document.getElementById("btnColor");
let btnLetra = document.getElementById("btnLetra");

/* Cambiar el color de las cajas */
btnColor.addEventListener("click", function () {
    cajas.forEach(function (caja) {
        caja.style.backgroundColor = "#0f2741";
        caja.style.color = "white";
    });
});

/* Cambiar el tipo de letra de las cajas */
btnLetra.addEventListener("click", function () {
    cajas.forEach(function (caja) {
        caja.style.fontFamily = "Georgia, serif";
        caja.style.fontStyle = "italic";
    });
});



let formulario = document.getElementById("formContacto");
let inputNombre = document.getElementById("nombre");
let inputEmail = document.getElementById("email");

formulario.addEventListener("submit", function (evento) {
    
    evento.preventDefault();

    let nombre = inputNombre.value.trim();
    let email = inputEmail.value.trim();

    if (nombre === "") {
        alert("Por favor, escribe tu nombre");
        inputNombre.focus();
        return;
    }

    if (email === "") {
        alert("El correo es obligatorio");
        inputEmail.focus();
        return;
    }

   
    alert("¡Gracias, " + nombre + "! Tus datos fueron enviados correctamente.");
    formulario.reset();
});