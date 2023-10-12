class Mesa {

    constructor(id, nombre, ancho, alto, x, y) {
        this.id = id;
        this.nombre = nombre;
        this.ancho = ancho;
        this.alto = alto;
        this.x = x;
        this.y = y;
    }
    pintar() {

        var div = $('<div>').attr("id", this.id).addClass("mesa").css({

            "width": this.ancho + "px",
            "height": this.alto + "px",

        }).draggable().appendTo('#almacen').data("mesa",this);
        //get coge el dom 
        div.get(0).objeto = this;
    }

    pintarSala() {

        var div = $('<div>').attr("id", this.id).addClass("mesa").css({

            "position": "absolute",
            "width": this.ancho + "px",
            "height": this.alto + "px",
            "left": this.x + "px",
            "top": this.y + "px",

        }).draggable().appendTo('#sala').data("mesa", this);

        console.log(this.id);
        //get coge el dom 
        div.get(0).objeto = this;
    }

    pintarReserva() {

        var div = $('<div>').attr("id", this.id).addClass("mesa").css({

            "position": "absolute",
            "width": this.ancho + "px",
            "height": this.alto + "px",
            "left": this.x + "px",
            "top": this.y + "px",

        }).appendTo('#sala').data("mesa", this);

        //console.log(this.id);
        //get coge el dom 
        div.get(0).objeto = this;
    }



    // pintarSala(id,x,y,ancho,alto){
    //     $("<div>").attr("id",id).addClass("mesa").css("left",x).css("top",y).css("width",ancho).css("height",alto).draggable().appendTo("#sala");
    //   }

    mesasCoger() {
        $(".mesa").draggable({
            start: function (ev, ui) {
                $(this).attr("data-y", ui.offset.top)
                $(this).attr("data-x", ui.offset.left)
            },
            revert: true,
            helper: "clone",
            revertDuration: 0
        });
    }
    almacenar() {
        $("#almacen").droppable({
            drop: function (ev, ui) {
                var mesa = ui.draggable;
                mesa.attr("style", "position:relative; width:" + mesa.get(0).objeto.ancho + "px; height:" + mesa.get(0).objeto.alto + "px");
                $(this).append(mesa);

                $.ajax({
                    method: "put",
                    url: "http://127.0.0.1:8000/api/mesa/" + mesa.data("mesa").id,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                    dataType: 'json',
                    data: {
                        "id": mesa.data("mesa").id,
                        "ancho": mesa.data("mesa").alto,
                        "alto": mesa.data("mesa").ancho,
                        "x": 0,
                        "y": 0,
                        "nombre": mesa.data("mesa").nombre
                    },
                    // data: { nombre:nombreMesa, ancho:ancho, alto:alto, x:top, y:left },
                    success: function (data) {
                        console.log(data);
                        return data;

                        //pintarSala();
                    },
                    error: function () {
                        console.log('Error en la peticion');
                        console.log(top)

                    }
                })
            }
        });
    }

    sala() {
        $("#sala").droppable({
            drop: function (ev, ui) {

                var difX = parseInt($(this).offset().left)
                var difY = parseInt($(this).offset().top)

                var mesa = ui.draggable;
                var left = parseInt(ui.offset.left);
                var top = parseInt(ui.offset.top)
                var width = parseInt(mesa.width())
                var height = parseInt(mesa.height())

                var pos1 = [left, left + width, top, top + height]
                // mesa1 = new Mesa(left, top, left + width, top + height)
                // mesa1.posicion();
                console.log(top)
                console.log(left)
                // mesa.posicion();
                // alert("Las coordenas de la mesa son: "+coordenadas());

                var mesaYa = $("#sala .mesa").eq(0);
            let valido = true;

                $.each(mesaYa, function (key, mesacopia) {
                    if (mesacopia != mesa && !$(mesacopia).hasClass('ui-draggable-dragging')) {
                        let posX = parseInt(mesacopia.offsetLeft);
                        let posY = parseInt(mesacopia.offsetTop);
                        let ancho = mesacopia.offsetWidth;
                        let longitud = mesacopia.offsetHeight;
                        let pos2 = [posX, posX + ancho, posY, posY + longitud];

                        if ((pos1[0] > pos2[0] && pos1[0] < pos2[1] ||
                                pos1[1] > pos2[0] && pos1[1] < pos2[1] ||
                                pos1[0] <= pos2[0] && pos1[1] >= pos2[1])

                            &&

                            (pos1[2] > pos2[2] && pos1[2] < pos2[3] ||
                                pos1[3] > pos2[2] && pos1[3] < pos2[3] ||
                                pos1[2] <= pos2[2] && pos1[3] >= pos2[3])) {
                            console.log('choca');
                            valido = false;
                        } 
                    }

                });

                if (valido) {

                   // const posicionreal = $("#sala").offset();
                    mesa.data("mesa").x = left - difX;
                    mesa.data("mesa").y = top - difY ;

                    $(this).append(mesa);
                    mesa.css({ position: 'absolute', top: mesa.data("mesa").y + "px", left: mesa.data("mesa").x + "px" });

                // console.log(id);

                $.ajax({
                    method: "put",
                    url: "http://127.0.0.1:8000/api/mesa/" + mesa.data("mesa").id,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                    dataType: 'json',
                    data: {
                        "id": mesa.data("mesa").id,
                        "ancho": mesa.data("mesa").alto,
                        "alto": mesa.data("mesa").ancho,
                        "x": mesa.data("mesa").x,
                        "y": mesa.data("mesa").y,
                        "nombre": mesa.data("mesa").nombre
                    },
                    // data: { nombre:nombreMesa, ancho:ancho, alto:alto, x:top, y:left },
                    success: function (data) {
                        console.log(data);
                       // location.reload();
                        //return data;

                        //pintarSala();
                    },
                    error: function () {
                        console.log('Error en la peticion');
                        console.log(top)
                    }
                })
            }

            }
        });
    }













    sala2() {
        $.ajax({
            method: "put",
            url: "http://127.0.0.1:8000/api/mesa",
            data: {
                top: val,
                left
            },
            success: function (data) {
                console.log(data);
                pintarReserva();
                $("#reserva").selectable();
            },
            error: function () {
                console.log('Error en la peticion');
                console.log(top)

            }
        })


    }

}

//metodoo sincroniza el contenio de tBody con los alumnos
//en la situacion actual
Mesa.prototype.pinta = function () {
    var div = $("<div>");
    div.addClass("mesa").appendTo('.almacen');
    div.draggable();
    console.log(div);
}

Mesa.prototype.posicion = function () {
    console.log(top);
    console.log(left);
}

Mesa.prototype.mueveMesa = function () {

}