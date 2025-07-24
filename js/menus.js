//Inicializando los menus

let about = $("#aboutX");
let tech = $("#techX");
let proyectos = $("#proyectosX");

$(document).ready(()=>{


about.css("display","none");
tech.css("display","none");
proyectos.css("display","block");

})

const mostrar = (parametro)=>{


return function(){    


if(parametro === "#proyectosX"){

 
    about.css("display","none");
    tech.css("display","none");
    proyectos.css("display","block");

}else if(parametro === "#techX"){

    about.css("display","none");
    tech.css("display","block");
    proyectos.css("display","none");

}else if(parametro ==="#aboutX"){
    about.css("display","block");
    tech.css("display","none");
    proyectos.css("display","none");

}
}
}

$("#proyectos").on('click', mostrar("#proyectosX"))
$("#tech").on('click', mostrar("#techX"))
$("#about").on('click', mostrar("#aboutX"))