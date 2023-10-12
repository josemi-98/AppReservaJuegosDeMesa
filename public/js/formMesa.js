$(document).ready(function () {


//Funcion que crea el dialog del formulario de una nueva funcion
        $(function () {
            var dialog, form,

                // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=ancho%29
                //anchoRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
                nombre = $("#nombre"),
                ancho = $("#ancho"),
                alto = $("#alto"),
                allFields = $([]).add(nombre).add(ancho).add(alto),
                tips = $(".validateTips");

            function updateTips(t) {
                tips
                    .text(t)
                    .addClass("ui-state-highlight");
                setTimeout(function () {
                    tips.removeClass("ui-state-highlight", 1500);
                }, 500);
            }

            function checkLength(o, n, min, max) {
                if (o.val().length > max || o.val().length < min) {
                    o.addClass("ui-state-error");
                    updateTips("El tamaño de " + n + " debe de ser entre " +
                        min + " y " + max + ".");
                    return false;
                } else {
                    return true;
                }
            }

            function checkRegexp(o, regexp, n) {
                if (!(regexp.test(o.val()))) {
                    o.addClass("ui-state-error");
                    updateTips(n);
                    return false;
                } else {
                    return true;
                }
            }

            // funcion que añade los valores de la mesa
            function addMesa() {
                var valid = true;
                allFields.removeClass("ui-state-error");

                valid = valid && checkLength(nombre, "mesa", 3, 16);
                valid = valid && checkLength(ancho, "ancho", 2, 4);
                valid = valid && checkLength(alto, "alto", 2, 4);

                valid = valid && checkRegexp(nombre, /^[a-z]([0-9a-z_\s])+$/i, "El nombre de la mesa debe de empezar por una letra");
                valid = valid && checkRegexp(ancho, /^([0-9])+$/, "solo se permiten numeros : 0-9");
                valid = valid && checkRegexp(alto, /^([0-9])+$/, "solo se permiten numeros : 0-9");

                if (valid) {
                    // $( "#users tbody" ).append( "<tr>" +
                    //   "<td>" + nombre.val() + "</td>" +
                    //   "<td>" + ancho.val() + "</td>" +
                    //   "<td>" + alto.val() + "</td>" +
                    // "</tr>" );
                    // Poner estado de "cargando"
                    const $nombre = $("#nombre"),
                        $ancho = $("#ancho"),
                        $alto = $("#alto"),
                        $respuesta = $("#respuesta");
                    $respuesta.html("Cargando...");
                    
                    $.post("http://127.0.0.1:8000/api/mesa", {
                        nombre: $nombre.val(),
                        ancho: $ancho.val(),
                        alto: $alto.val(),
                        x:0,
                        y:0
                    }, function (respuestaComoJson) {
                        // La decodificamos
                        let respuesta = JSON.parse(respuestaComoJson);
                        $respuesta.html(respuesta);
                        
                    })
                    dialog.dialog("close");
                }
               // var mesa = new Mesa();
               // mesa.pintar()
               // alert("Mesa creada")
               // location.reload();
                return valid;
            }

            dialog = $("#dialog-form").dialog({
                autoOpen: false,
                height: 400,
                width: 350,
                modal: true,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                },
                //botones del formulario modal
                buttons: {
                    "Crear una mesa": addMesa,
                    
                    Cancel: function () {
                        dialog.dialog("close");
                    }
                },
                close: function () {
                    form[0].reset();
                    allFields.removeClass("ui-state-error");
                }
            });

            form = dialog.find("form").on("submit", function (event) {
                event.preventDefault();
                addMesa();
            });

            $("#create-mesa").button().on("click", function () {
                dialog.dialog("open");
            });
        });



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
                
                //si no tiene posicion la crea en el almacén
                mesa.pintar();
              }else{
                
                //si tiene posición la pinta en la sala
                mesa.pintarSala();
              }

           // mesa.pintar(ancho, alto);

            mesa.mesasCoger();

            mesa.almacenar();

            mesa.sala();

        })

        
    })

    


});