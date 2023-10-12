$(function(){

    $.ajax( "http://127.0.0.1:8000/api/user", 
    {
        method:"GET",
        dataType:"json",
    }).done(function(data){

        var tabla = $("<table></table>");
        tabla.attr({
        id:"idtabla"});

        tabla.addClass("table table-white");

        var nuevoTr="<thead><tr><th>EMAIL</th><th>NOMBRE</th><th>CONTACTO</th><th>ROLES</th><th>INVITAR</th></tr></thead>";
        tabla.append(nuevoTr);


        $("#container").append(tabla);

        var tbody=$("<tbody>");

        $.each(data, function(i,v){
            var nuevoTr="<tr><td>"+data[i].email+"</td><td>"+data[i].nombre+"</td><td>"+data[i].contacto+"</td><td>"+data[i].roles+"</td><td><input type='checkbox' id="+data[i].id+"> </td></tr>";
            tbody.append(nuevoTr);
        })
        tabla.append(tbody);
        tabla.DataTable();

        //CREO EL ARRAY DE USUARIOS Y COJO EL ID DEL EVENTO
        var users=[];
        var evento_Id=$("#boton").attr("id");
    
        //CUANDO SE ELIGE UN USUARIO SE METE EN EL ARRAY DE USUARIOS SELECCIONADOS
        $('input[type=checkbox]').on('change', function() {
            if ($(this).is(':checked') ) {
                users.push($(this).prop("id"));
            }else {
                users=users.filter(user => user != $(this).prop("id"));
            }
        });

        //MANDA LAS INVITACIONES A LOS USUARIOS SELECCIONADOS
        $("#boton").click(function(){
            console.log("pulsado");
            for(let i=0;i<users.length;i++){
                invitar(users[i], evento_Id);
            }
        })

        
    }).fail(function(){
            alert("ERROR")
    })




    
    $.ajax( "http://127.0.0.1:8000/api/evento", 
    {
        method:"GET",
        dataType:"json",
    }).done(function(data){

        var tabla = $("<table></table>");
        tabla.attr({
        id:"idtabla"});

        tabla.addClass("table table-dark");

        var nuevoTr="<thead><tr><th>NOMBRE</th><th>FECHA</th><th>JUEGO</th><th>DESCRIPCION</th><th>INVITAR</th></tr></thead>";
        tabla.append(nuevoTr);


        $("#container2").append(tabla);

        var tbody=$("<tbody>");

        $.each(data, function(i,v){
            var nuevoTr="<tr><td>"+data[i].nombre+"</td><td>"+data[i].fechaInicio.date+"</td><td>"+data[i].fechaFin.date+"</td><td>"+data[i].descripcion+"</td><td><input type='checkbox' id="+data[i].id+"> </td></tr>";
            tbody.append(nuevoTr);
        })
        tabla.append(tbody);
        tabla.DataTable();

        //CREO EL ARRAY DE USUARIOS Y COJO EL ID DEL EVENTO
        var eventos=[];
        var user_Id=$("#boton2").attr("id");
    
        //CUANDO SE ELIGE UN USUARIO SE METE EN EL ARRAY DE USUARIOS SELECCIONADOS
        $('input[type=checkbox]').on('change', function() {
            if ($(this).is(':checked') ) {
                eventos.push($(this).prop("id"));
            }else {
                eventos=eventos.filter(evento => evento != $(this).prop("id"));
            }
        });

        //MANDA LAS INVITACIONES A LOS USUARIOS SELECCIONADOS
        $("#boton2").click(function(){
            console.log("pulsado");
            for(let i=0;i<eventos.length;i++){
                invitar(eventos[i], user_Id);
            }
        })

        
    }).fail(function(){
            alert("ERROR")
    })

})

function invitar(user_Id, evento_Id){
    $.ajax( "http://127.0.0.1:8000/api/invitacion", 
    {
        method:"POST",
        dataType:"json",
        data:{
            user: user_Id,
            evento: evento_Id
        }
    }).done(function(data){

        console.log("SE HAN ENVIADO LOS DATOS")

    }).fail(function(){
            alert("ERROR")
    })

}