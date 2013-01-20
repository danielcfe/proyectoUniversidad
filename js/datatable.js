$(document).ready(function(){
 
/*
    $('#tablamateria').dataTable({
    	 "bJQueryUI": true,
    	"sPaginationType": "full_numbers",
		"sDom": 'l<Tfr>t<ip>',
    	"oLanguage": 
		        {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "fnInfoCallback": null,
    "oAria": {
        "sSortAscending":  ": Activar para ordernar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordernar la columna de manera descendente"
    }
}				
            
    });


    $('#users').dataTable({
         "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": 'l<Tfr>t<ip>',
        "oLanguage": 
                {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "fnInfoCallback": null,
    "oAria": {
        "sSortAscending":  ": Activar para ordernar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordernar la columna de manera descendente"
    }
}               
            
    });

*/


    $('#tablarequisitos, #users, #tablacarrera, #tabladepartamento, #tablapensum, #tablaauditoria, #tablamateria').dataTable({
         "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": 'l<Tfr>t<ip>',
        "oLanguage": 
                {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "fnInfoCallback": null,
    "oAria": {
        "sSortAscending":  ": Activar para ordernar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordernar la columna de manera descendente"
    }
}               
            
    });
    


/*    $('#tablacarrera').dataTable({
         "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": 'l<Tfr>t<ip>',
        "oLanguage": 
                {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "fnInfoCallback": null,
    "oAria": {
        "sSortAscending":  ": Activar para ordernar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordernar la columna de manera descendente"
    }
}               
            
    });
    */

/*
    $('#tabladepartamento').dataTable({
         "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": 'l<Tfr>t<ip>',
        "oLanguage": 
                {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "fnInfoCallback": null,
    "oAria": {
        "sSortAscending":  ": Activar para ordernar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordernar la columna de manera descendente"
    }
}               
            
    });

$('#tablapensum').dataTable({
         "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": 'l<Tfr>t<ip>',
        "oLanguage": 
                {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "fnInfoCallback": null,
    "oAria": {
        "sSortAscending":  ": Activar para ordernar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordernar la columna de manera descendente"
    }
}               
            
    });

$('#tablaauditoria').dataTable({
         "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": 'l<Tfr>t<ip>',
        "oLanguage": 
                {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "fnInfoCallback": null,
    "oAria": {
        "sSortAscending":  ": Activar para ordernar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordernar la columna de manera descendente"
    }
}               
            
    });


*/


});