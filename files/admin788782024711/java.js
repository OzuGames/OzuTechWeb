const formulario = document.getElementById("formulario")

const registro = document.getElementById("registro")

const exito = document.getElementById("exito")

formulario.addEventListener('submit', (e) => {

    e.preventDefault()



    fetch("https://sheet.best/api/sheets/030977be-624f-48ab-85d5-699e199ece0a", {

        method: "POST",

        mode: "cors",

        headers: {

            'Content-Type' : 'application/json'

        },

        body: JSON.stringify({

            "Datos personales": formulario.datospydelimplicado.value,

            "Hechos": formulario.hechos.value

        })

    })





})


/*ACTUALIZACIÓN*/

function abrir(){

    document.getElementById("actualizacionve").style.display="block";


}

function cerrar(){

    document.getElementById("actualizacionve").style.display="none";

   

}

function abririncidenciaycerrar(){

    document.getElementById("actualizacionve").style.display="none";



}




/*NOTICIAS*/

function bien(){

    document.getElementById("noticiave").style.display="block";


}

function mal(){

    document.getElementById("noticiave").style.display="none";

   

}

function dospave(){

    document.getElementById("noticiave").style.display="none";

    
    

}


