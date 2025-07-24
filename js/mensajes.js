

//Para obtener los datos del mensaje
$(document).on('click','.eMensaje',(e)=>{


    e.preventDefault();
    const id = $(e.currentTarget).data('id')
   
    getDatos(id)



})

$(document).on('click','.bMsj',(e)=>{


e.preventDefault()
const id = $(e.currentTarget).data('id')

operaciones("borrar",id)

})

$("#form-About").on('submit',(e)=>{

e.preventDefault()
let mensaje = $("#mensajeA").val()
operaciones("agregar",0,mensaje)


})

$("#form-eAbout").on('submit',(e)=>{

e.preventDefault()
let id = $("#mensaje-id").text()
let mensaje = $("#mensajeE").val()
console.log(id)
operaciones("editar",id,mensaje)


})



async function operaciones(operacion, id="", mensaje =""){

let formData = new FormData()

formData.append('id',id)
formData.append('mensaje',mensaje)

let ruta = ""

switch (operacion){

    case "agregar":

    ruta = "../inc/backend/agregarMensaje.php"

    break

    case "editar":
    
    ruta = "../inc/backend/editarMensaje.php"

    break

    case "borrar":

    ruta = "../inc/backend/borrarMensaje.php"

    

    break
}

  $.ajax({

    url:ruta,
    type:"POST",
    data:formData,
    processData: false,
    contentType: false,
    dataType:"json",
    cache:false

    })
    .done((datos)=>{

        let icon =""
        if(datos.codigo !=2){

            icon = "success"
            Swal.fire({

                title:datos.titulo,
                icon:icon,
                confirmButton:"cerrar",
                customClass:{

                    title:"sombra",
                    popup:"text-bg-dark border-warning",
                    confirmButton:"btn btn-success"
                },
                buttonsStyling:false,

            })

            setTimeout(()=>{

                window.location.reload()

            },2000)

        }else {

            icon = "warning"
            Swal.fire({

                title:datos.titulo,
                icon:icon,
                confirmButton:"cerrar",
                customClass:{

                    title:"sombra",
                    popup:"text-bg-dark border-warning",
                    confirmButton:"btn btn-success"
                },
                buttonsStyling:false,

            })

        }
        
    })
    .fail((error)=>{

        console.log(error)
    })
}


function getDatos(id){

let formData = new FormData();

formData.append('id',id)

let ruta = "../inc/backend/getMensaje.php"

$.ajax({

method :"POST",
url:ruta,
data:formData,
contentType: false,
processData: false,
dataType:"json",
cache:false

})
.done((datos)=>{

    $("#mensaje-id").text(datos[0].id)
    $("#mensajeE").val(datos[0].presentacion)


})
.fail((error)=>{


    console.log(error)
})

}