$(document).ready(function () {

    $.ajax({
        method: "get",
        url: "http://127.0.0.1:8000/api/mesa",
        dateType: "json"
    }).done(function (data) {
        console.log(data);
        $.each(data, function (key, data) {
            var ancho = data.ancho;
            var alto = data.alto;
            var id = data.id;
            var nombre = data.nombre;
            var x = data.x;
            var y = data.y;
            var mesa = new Mesa(id, nombre, alto, ancho, x, y)

            if (data.x==0 && data.y==0){
                
               console.log("No hay mesas para este dia.");
               $('#text').text('NO HAY MESAS PARA ESTE DIA').css({"display":"inline"});
                
                //si no tiene posicion la crea en el almacén
               mesa.pintar()
                
              }else{
                //si tiene posición la pinta en la sala
                mesa.pintarReserva();
              //  reserva();
              }

        })
        
    })

    //MODAL DEL FORMULARIO PARA CREAR UNA MESA
    $(".mesa").click(function(ev){

        ev.preventDefault();
debugger;
        $.ajax({
            url:"http://127.0.0.1:8000/api/juego",
            type:"GET",
            success: function(data){
              
              $.each(data, function (key, dato){
                $("<option>").val(dato.id).text(dato.nombre).appendTo($("#juego"))
    
                $("<div>").val(dato.id).text(dato.nombre).appendTo($("#card"))
                
               // $("#juego").append(html);
              })
                
            }
    });

        //PLANTILLA DEL FORMULARIO
        var plantilla=pintaPlantilla();
    
        //CARACTERISTICAS DEL MODAL
        var jqPlantilla=$(plantilla);
        jqPlantilla.dialog({
            height: 300,
            width: 350,
            modal: true,
        });

        //FORMULARIO DE CREACION DE UNA NUEVA MESA
        $("form[name='getMesa']").submit(function(ev){
            var form=$(this);
            var height=form.find("#height").val();
            var width=form.find("#width").val();

            nuevaMesa(height, width);
    
        });
    })

    //FUNCION PARA LA PLANTILLA DEL FORMULARIO DEL MODAL
function pintaPlantilla(){
    
    var plantilla=`
        <form name="getMesa">
            <div class="row g-3">
                <div class="col-12">
                    <div class="form-floating">
                        <label class="mb-2"> Eligue tu juego: </label>

                        <select class="form-control mb-3" name="juego" id="juego" >
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100 py-3">Crear</button>
                </div>
            </div>
        </form>`

    return plantilla;
}

    


    function reserva(fechaSeleccionada){
        //PINCHO LA MESA
        $(".mesa").click(function(){
            
            var mesa=($(this).attr("id"));
            var heightMesa=$(this).height();
            var widthMesa=$(this).width();
    
            $.ajax( "http://127.0.0.1:8000/api/juego", 
            {
                method:"GET",
                dataType:"json"
            }).done(function(data){
                           
                //RECORRO EL ARRAY DE MESAS Y LAS PINTO SEGUN SU POSICION GUARDADA BASE
                $.each(data, function(i,v){
                    if(heightMesa>data[i].height && widthMesa>data[i].width){
                        
                        $("select").append('<option value='+data[i].id+'>'+data[i].nombre+'</option>');
                    }
    
                })
    
                //CUANDO LE DE A SELECCIONAR RESERVA
                $("#reservar").click(function(ev){
                    ev.preventDefault();
                    console.log(fechaSeleccionada);
                    console.log(mesa);
                    console.log($("#juego").val());
                })
             
            })
        })
    }





    function validaForm(){
      // Campos de texto
      if($("#nombre").val() == ""){
          alert("El campo Nombre no puede estar vacío.");
          $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
          return false;
      }
    //   if($("#juego").val() == ""){
    //       alert("El campo juego no puede estar vacío.");
    //       $("#juego").focus();
    //       return false;
    //   }
    //   if($("#mesa").val() == ""){
    //       alert("El campo Dirección no puede estar vacío.");
    //       $("#mesa").focus();
    //       return false;
    //   }
    //   if($("#fechaInicio").val() == ""){
    //     alert("El campo Dirección no puede estar vacío.");
    //     $("#fechaInicio").focus();
    //     return false;
    // }
    // if($("#fechaFin").val() == ""){
    //   alert("El campo Dirección no puede estar vacío.");
    //   $("#fechaFin").focus();
    //   return false;
 // }
  if($("#participantes").val() == ""){
    alert("El campo Dirección no puede estar vacío.");
    $("#participantes").focus();
    return false;
}
  
      // Checkbox
      // if(!$("#mayor").is(":checked")){
      //     alert("Debe confirmar que es mayor de 18 años.");
      //     return false;
      // }
  
      return true; // Si todo está correcto
  }

  $(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
    $("#btnEnviar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
        if(validaForm()){                               // Primero validará el formulario.
            $.post("http://127.0.0.1:8000/api/reserva",$("#formdata").serialize(),function(res){
                $("#formulario");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
                if(res == 1){
                    $("#exito").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
                } else {
                    $("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                }
            });
        }
    });   
    


});



});