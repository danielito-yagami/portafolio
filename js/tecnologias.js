//funcion para detectar los botones en un foreach de php

//funcion borrado

$(document).on('click',".borrar", (e)=>{

    //para determinar que boton se pulsa 

    const id = $(e.currentTarget).data('id')

    ajax("eliminar", id)

})


$(document).on('click','.editar',(e)=>{


const id = $(e.currentTarget).data('id')

console.log(id)
getTecnologia(id)

})

//Funciones para agregar las tecnologias 

//------------------Boton agregar -------------------
$("#aTecnologia").on('submit',function(e){

e.preventDefault()


//obteniendo los valores del formulario 
let nombre = $("#nombreT").val()
let descripcion = $("#desT").val()
let imagen = $("#imgT")[0].files[0]


console.log(imagen['name'])
ajax("agregar",0, nombre, descripcion, imagen)



})
//-------------------Boton de editar----------------//
$("#eTecnologia").on('submit',function(e){

e.preventDefault()

let id = $("#idET").text()

//console.log(id)

//obteniendo los valores del formulario 
let nombre = $("#enombreT").val()
let descripcion = $("#edesT").val()
let imagen = $("#eimgT")[0].files[0]
let ruta = $("#imagenT").attr("src")

//console.log(imagen['name'])
ajax("editar",id, nombre, descripcion, imagen, ruta)



})
//-----------------------------------------------//

//funcion AJAX para operaciones CRUD 
//Esta funcion para resolver promesas
//SE hace asincrona tambien recuerda que se resuelve 
//con await o then 

async function ajax(operacion, id = 0, nombre = "",des ="", imagen = "" , ruta = ""){

/*
Operaciones actualizar, eliminar, agregar
*/
let formData = new FormData()
formData.append("id", id)
formData.append("nombre", nombre)
formData.append("des", des)
console.log(des)
formData.append("imagen", imagen)
//console.log(imagen['name'])
let url =""
let nombreFoto = ""

if(operacion == "agregar"){



url = "../inc/backend/insertarTecnologia.php"

try {

let fecha = new Date().getFullYear()
nombreFoto =fecha +"-"+imagen['name']
console.log(nombreFoto)
formData.append('nombreFoto',nombreFoto)


}catch(error){

nombreFoto = ""
formData.append('nombreFoto',nombreFoto)
}


}else if(operacion == "editar"){

url = "../inc/backend/editarTecnologia.php"
//Valida si es verdadero la foto y la propiedad nombre de la img
if( imagen && imagen['name'] ){
console.log(ruta)
//caso donde si se sube la imagen
let fecha = new Date().getFullYear()
nombreFoto = fecha + "-"+imagen['name']
formData.append('nombreFoto',nombreFoto)
formData.append("ruta",ruta)


}else {
//Caso donde no se sube la imagen
/*
nombreFoto = ""
formData.append('nombreFoto',nombreFoto)
*/
}



/***
 * En una funcion con parametros esta forma no sirve
 * Se debe usar un if y evaluar el undefined 
 * porque imagen se toma como un arreglo vacio 
 */

/*
try {

nombreFoto = imagen['name']
console.log(nombreFoto)
let fecha = new Date().getFullYear()
//Este error no se debe cometer porque es fecha + undefined
let nombreImagen =fecha +"-"+nombreFoto
//console.log(nombreFoto)
console.log("CASO con foto")
formData.append('nombreFoto',nombreImagen)


}catch(error){

console.log("CASO sin foto")

nombreFoto = ""
formData.append('nombreFoto',nombreImagen)
}
*/


}else if(operacion == "eliminar"){

url = "../inc/backend/borrarTecnologia.php"

//Funcion asincrona debo hacer un then para completar
//promesa


let respuesta = await mensajeEliminar()

if(!respuesta){

    console.log("se corta")
    return 
}else {

    console.log("continua")
}



}
 $.ajax({

        url:url,
        type:'POST',
        cache:false,
        processData:false,
        contentType:false,
        data:formData,
        dataType:"json"
    })

    .done((datos)=>{
       
        let icon =""

        if(datos.codigo == "3"){

            icon = "warning"

        }else {


            icon ="success"
        }

        Swal.fire({

            title : datos.titulo,
            icon:icon,
            confirmButton:"cerrar",
            customClass:{

                title:"sombra",
                popup:"text-bg-dark border-warning",
                confirmButton:"btn btn-success"

            },
            buttonsStyling:false
        })

        setTimeout(()=>{

            window.location.reload()

        },1000)

    })
    .fail((error)=>{


        console.log(error)
    })


}

//funcion get para obtener id tecnologias 


function getId(id){

    const idx = id

    return idx


}


//funcion que setea los valores en el form 

function getTecnologia(id){



let url = "../inc/backend/getTecnologia.php";

let formData = new FormData()


formData.append('id', id)


$.ajax({

url:url,
type :"POST",
processData:false,
contentType:false,
data:formData,
//aqui para consumir en json 
dataType:"json",
cache:false

})
.done((datos)=>{



console.log(datos[0])

$("#enombreT").val(datos[0].nombre)
$("#edesT").val(datos[0].descripcion)
$("#idET").text(datos[0].id)
$("#imagenT").attr("src",datos[0].img)

console.log(datos[0].img)

})
.fail((error)=>{


    console.log(error)
})


}


async function mensajeEliminar(){

const respuesta = await Swal.fire({

title: "Estas seguro?",
text: "No podrás revertir esto",
type: "warning",
showCancelButton: true,
confirmButtonText: "borrar tecnologia",
buttonsStyling : false,
customClass :{

    confirmButton: "btn btn-success m-2",
    cancelButton: "btn btn-danger m-2",


}

})

if(respuesta.isConfirmed){

    return true

}else {


    return false
}


}