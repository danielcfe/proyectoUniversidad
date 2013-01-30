            var languaje_esp = {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "_MENU_ Registros Listados",
                    "sZeroRecords": "No se han encontrado Registros.",
                    "sInfo": "_START_ hasta _END_ de _TOTAL_ Registros",
                    "sInfoEmpty": "0 hasta 0 de 0 Registros",
                    "sInfoFiltered": "(Filtradas  de _MAX_  Registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sPrevious": "Anterior",
                        "sNext":     "Siguiente",
                        "sLast":     "Ultimo"
                    }
                };  

$(document).ready(function(){
 
$.extend( true, $.fn.DataTable.TableTools.classes, {
    "container": "btn-group",
    "buttons": {
        "normal": "btn",
        "disabled": "btn disabled"
    },
    "collection": {
        "container": "DTTT_dropdown dropdown-menu",
        "buttons": {
            "normal": "",
            "disabled": "disabled"
        }
    }
} );

// Have the collection use a bootstrap compatible dropdown
$.extend( true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
    "collection": {
        "container": "ul",
        "button": "li",
        "liner": "a"
    }
} );



var tables = $('#tablaplanevaluacion, #tablaevaluaciones,#tablapensum,#tablarequisitos, #users, #tablacarrera, #tabladepartamento, #tablapensum, #tablaauditoria, #tablamateria');

    
    
                var Table = tables.dataTable( {
                //  "bJQueryUI": true,
                    "sScrollX": "100%",
                //  "sScrollY": "300px",
                    "sScrollXInner": "100%",
                    "bScrollCollapse": true,
                    "sDom": "<'row-fluid'<'span6'Tl><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>", // bootstrap
                    "oTableTools": {
                                "sSwfPath": base_url+"media/swf/copy_csv_xls_pdf.swf",
                                "aButtons": [
                                    {   
                                    "sExtends": "copy",
                                    "sButtonText": "Copiar"
                                    },
                                    {
                                        "sExtends": "print",
                                        "sButtonText": "Imprimir",
                                        "sInfo": "Por Favor apretar la tecla (Esc) para salir"
                                    },
                                    {
                                        "sExtends":    "collection",
                                        "sButtonText": 'Guardar <span class="caret" />',
                                        "aButtons":    [ 
                                            {
                                            "sExtends": "xls",
                                            "sButtonText": "Excel"
                                            },  
                                            {
                                                "sExtends": "pdf",
                                                "sButtonText": "PDF",
                                                "sPdfOrientation": "landscape",
                                                "sPdfMessage": "Reporte Alexis."
                                            },
                                         ]
                                    }
                                ]
                    },  // bootstrap

                    "aoColumnDefs": [
            {
                // `data` refers to the data for the cell (defined by `mData`, which
                // defaults to the column being worked with, in this case is the first
                // Using `row[0]` is equivalent.
                "mRender": function ( data, type, row ) {
                    return data;
                },
                "aTargets": [ 0 ]
            },
           // { "bVisible": false,  "aTargets": [ 3 ] }

           // ,{ "sClass": "center", "aTargets": [ 4 ] }
        ],
                    "oLanguage": languaje_esp

                    } );/*.columnFilter();

                new FixedColumns(Table,{ 
                    "iLeftColumns": 2,
                    "iLeftWidth": 500

                });*/

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
/*

    $('#tablarequisitos, #users, #tablacarrera, #tabladepartamento, #tablapensum, #tablaauditoria, #tssssssssssssablamateria').dataTable({
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