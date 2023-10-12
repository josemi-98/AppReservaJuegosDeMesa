$( function() {
    var fechaSeleccionada=null;
    var difY=$("#sala").offset().top;
    var difX=$("#sala").offset().left;

    var diasFestivos=["27/02/2023","28/02/2023","01/03/2023"];
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };

    $.datepicker.setDefaults($.datepicker.regional['es']);
    
    $("#desde").datepicker({
        minDate:"D",
        maxDate:"3M+1D",

        onSelect:function(text, obj){
        
            //UNA VEZ SELECCIONADO
            fechaSeleccionada = new Date()

            let day = obj.currentDay
            let month = obj.currentMonth + 1
            let year = obj.currentYear

            if(month < 10){
                fechaSeleccionada=(year+'-0'+month+'-'+day);
            }else{
                fechaSeleccionada=(year+'-0'+month+'-'+day);
            }

            $.ajax( "http://127.0.0.1:8000/api/distribucion", 
            {
                method:"GET",
                dataType:"json"
            }).done(function(data){

                //COJO TODAS LAS MESAS Y LAS AÑADO AL ALMACEN
                for(let i=0;i<$(".mesa").length;i++){
                    var mesa=$(".mesa")[i];
                    $(mesa).css({position:"relative",top:0+"px",left:0+"px"});
                    $("#almacen").append(mesa);
                }

                //RECORRO LA DISPOSICION SEGUN EL DIA SELECCIONADO Y PINTA LAS MESAS EN SU NUEVA POSICION
                $.each(data, function(i,v){
                    if(fechaSeleccionada===data[i].fecha){
                        var id=data[i].mesa;

                        mesa=$('#'+id);
                        mesa.attr('name', data[i].id);
                        mesa.css({top:(data[i].y)+"px",left:(data[i].x)+"px"});
                        $("#sala").append(mesa);
                    }
                })

            })
        }
    })

    //datepicker para guardar la disposicion de la sala
    $('#fechaFin').datetimepicker(
        {
    dateFormat:"yy/mm/dd",
    minDate:"+1D",
    maxDate:"+3M +1D",
    firstDay:1,
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: 'yy/mm/dd',
    beforeShowDay: function(fecha){
                    
        var respuesta = [true,"",""];
        var dia = fecha.getDate();
        var mes = fecha.getMonth()+1;
        var anno = fecha.getFullYear();
        var cadenaFecha=((dia<10)?"0"+dia:dia)+"/"+
                        ((mes<10)?"0"+mes:mes)+"/"+anno;
        if (fecha.getDay()%6==0 || diasFestivos.indexOf(cadenaFecha)>-1){
            respuesta=[false,"",""];
        }
        return respuesta;
    },
    onSelect:function(text,obj){
        $("#hasta").datepicker("destroy").datepicker({
        dateFormat:"dd/mm/yy",
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: 'yy/mm/dd',
        firstDay:1,

            minDate: new Date(obj.currentYear, obj.currentMonth, obj.currentDay+1),
            maxDate: new Date(obj.currentYear, obj.currentMonth, obj.currentDay+23),
            // beforeShowDay: $.datepicker.noWeekends
            beforeShowDay: function(fecha){
                
                var respuesta = [true,"",""];
                var dia = fecha.getDate();
                var mes = fecha.getMonth()+1;
                var anno = fecha.getFullYear();
                var cadenaFecha=((dia<10)?"0"+dia:dia)+"/"+
                                ((mes<10)?"0"+mes:mes)+"/"+anno;
                if (fecha.getDay()%6==0 || diasFestivos.indexOf(cadenaFecha)>-1){
                    respuesta=[false,"",""];
                }
                return respuesta;
            }
        })
    }

}
      
    );




    
        $('#fechaInicio').datetimepicker(
            {
        dateFormat:"yy/mm/dd",
        minDate:"+1D",
        maxDate:"+3M +1D",
        firstDay:1,
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy/mm/dd',
        beforeShowDay: function(fecha){
                    
            var respuesta = [true,"",""];
            var dia = fecha.getDate();
            var mes = fecha.getMonth()+1;
            var anno = fecha.getFullYear();
            var cadenaFecha=((dia<10)?"0"+dia:dia)+"/"+
                            ((mes<10)?"0"+mes:mes)+"/"+anno;
            if (fecha.getDay()%6==0 || diasFestivos.indexOf(cadenaFecha)>-1){
                respuesta=[false,"",""];
            }
            return respuesta;
        },
        onSelect:function(text,obj){
            $("#hasta").datepicker("destroy").datepicker({
            dateFormat:"dd/mm/yy",
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy/mm/dd',
            firstDay:1,

                minDate: new Date(obj.currentYear, obj.currentMonth, obj.currentDay+1),
                maxDate: new Date(obj.currentYear, obj.currentMonth, obj.currentDay+23),
                // beforeShowDay: $.datepicker.noWeekends
                beforeShowDay: function(fecha){
                    
                    var respuesta = [true,"",""];
                    var dia = fecha.getDate();
                    var mes = fecha.getMonth()+1;
                    var anno = fecha.getFullYear();
                    var cadenaFecha=((dia<10)?"0"+dia:dia)+"/"+
                                    ((mes<10)?"0"+mes:mes)+"/"+anno;
                    if (fecha.getDay()%6==0 || diasFestivos.indexOf(cadenaFecha)>-1){
                        respuesta=[false,"",""];
                    }
                    return respuesta;
                }
            })
        }

    }
          
        );
    


  } );

