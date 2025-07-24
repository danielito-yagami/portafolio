//Para administrar los proyectos 

$("#aProyectos").on('click', (e)=>{


e.preventDefault()

let objeto = e.target.id

let accion = objeto.split("-")

console.log(accion[0])

let id = accion[1]


if(accion[0] == "editar"){

let formData = new FormData()

formData.append('id',id)

  let url = "../inc/backend/editarProyecto.php"

     $.ajax({

        url:url,
        type:'POST',
        cache:false,
        processData:false,
        contentType:false,
        data:formData

    })
    .done((datos)=>{

     
        //asignando valores al modal de edicion 
        $("#idProyecto").text(datos[0].id)
        $("#nombreE").val(datos[0].nombre)
        $("#descripcionE").val(datos[0].descripcion)
        $("#linkE").val(datos[0].link)
        $("#imagenE").attr("src",datos[0].imagen)


       
    })
    .fail((error)=>{


        console.log(error)
    })



}else if(accion[0] == "borrar"){


//let respuesta = window.confirm("Estas seguro de eliminar este proyecto?")
//Refactorizando a una funcion asincrona 

borrarProyecto(id)


}



})


//Boton de edicion de proyecto 

$("#eProyectoX").on('submit',(e)=>{

    e.preventDefault()
    //Obteniendo las propiedades 

     let id = $("#idProyecto").text() 
     let nombre = $("#nombreE").val()
     let descripcion = $("#descripcionE").val()
     let link = $("#linkE").val()
     let imagen = $("#imagenEX")[0].files[0]
     let ruta = $("#imagenE").attr("scr")

     let nombreImagen = ""

    try{

    let nombreFoto = imagen['name'];
    let fecha = new Date().getFullYear()
    nombreImagen = fecha+"-"+nombreFoto


    }catch(error){

    nombreFoto = ""

    console.log(error)
    }

    let formData = new FormData()

    formData.append('nombre',nombre)
    formData.append('descripcion',descripcion)
    formData.append('link',link)
    formData.append('imagen',imagen)
    formData.append('nombreImagen',nombreImagen)
    formData.append('id',id)
    formData.append('ruta',ruta)

    let url = "../inc/backend/proyectoEditar.php"
    
 $.ajax({

        url:url,
        type:'POST',
        cache:false,
        processData:false,
        contentType:false,
        data:formData

    })

    .done((datos)=>{


        console.log(datos)

        if(datos == "0" || datos == "1" || datos == "2"){

              Swal.fire({

            title: 'Proyecto actualizado',
            icon:"success",
            confirmButtonText:"cerrar",
            customClass:{
                title:"sombra",
                popup:"text-bg-dark border-warning",
                confirmButton:"btn btn-success"
            },
            buttonsStyling :false


        })

        setTimeout(()=>{

            window.location.reload()

        },3000)

        }else{

              Swal.fire({

            title: 'No se pudo eliminar tu proyecto',
            icon:"warning",
            confirmButtonText:"cerrar",
            customClass:{
                title:"sombra",
                popup:"text-bg-dark border-warning",
                confirmButton:"btn btn-danger"
            },
            buttonsStyling :false


        })

        
        setTimeout(()=>{

            window.location.reload()

        },3000)


        }

    })
    .fail((error)=>{


        console.log(error)

    })
})




//Funcion asincrona de borrado 


async function borrarProyecto(id){

//creando una variable resultado pero asincrona 
//y esta solo va a ejecutarse hasta que se apriete el boton de aceptar confirm
const respuesta = await Swal.fire({
  title: "Estas seguro?",
  text: "Se eliminara este proyecto",
  icon: "warning",
  showCancelButton: true,
  cancelButtonText:"cerrar",
  confirmButtonText: "Si borrar",
  buttonsStyling: false,
  customClass:{

    confirmButton :"btn btn-success m-2",
    cancelButton :"btn btn-danger m-2",

  },
});

//Ahora si resultado tiene una propiedad llamada is confirmed entonces es true

//--------------------------------------Inicio del IF-------------------------------

if(respuesta.isConfirmed){

    let formData = new FormData()

    formData.append('id',id)

    let url = "../inc/backend/borrarProyecto.php"

     $.ajax({

        url:url,
        type:'POST',
        cache:false,
        processData:false,
        contentType:false,
        data:formData

    })

    .done((datos)=>{


        console.log(datos)

        if(datos == "1" || datos == "2"){

            //alert("Proyecto eliminado con exito")
              Swal.fire({

            title: 'Proyecto eliminado',
            icon:"success",
            confirmButtonText:"cerrar",
            customClass:{
                title:"sombra",
                popup:"text-bg-dark border-warning",
                confirmButton:"btn btn-danger"
            },
            buttonsStyling :false


        })


            setTimeout(()=>{

             window.location.reload()


            },3000) 

        }else {

            Swal.fire({

            title: 'No se pudo eliminar tu proyecto',
            icon:"warning",
            confirmButtonText:"cerrar",
            customClass:{
                title:"sombra",
                popup:"text-bg-dark border-warning",
                confirmButton:"btn btn-danger"
            },
            buttonsStyling :false


        })


        }

    })
    .fail((error)=>{

        console.log(error)


    })



}else {


    return
}

//--------------------------------------Fin del if----------------------------------
}