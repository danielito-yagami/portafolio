
$("#aProyectoX").on('submit',(e)=>{


e.preventDefault()

let nombre = $("#nombre").val()

let descripcion = $("#descripcion").val()
let link = $("#link").val()
//Para obtener la propiedades de las fotos
let imagen = $("#imagen")[0].files[0]

//Creando el nombre de la foto 

let nombreImagen = ""

try{

    let nombreFoto = imagen['name'];
    let fecha = new Date().getFullYear()
    nombreImagen = fecha+"-"+nombreFoto


}catch(error){


    console.log(error)
}


let formData = new FormData()


formData.append('nombre',nombre)
formData.append('descripcion',descripcion)
formData.append('link',link)
formData.append('imagen',imagen)
formData.append('foto',nombreImagen)

let url = "../inc/backend/insertarUsuario.php"

 $.ajax({

        url:url,
        type:'POST',
        cache:false,
        processData:false,
        contentType:false,
        data:formData

    })


    .done((data)=>{


        //alert("Proyecto insertado")
        //Probando swal para no usar swal y usar boostrap 


        Swal.fire({

            title: 'Proyecto agregado',
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

       

    })
    .fail((fail)=>{



        console.log("error")
    })


})

