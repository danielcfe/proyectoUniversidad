$(document).ready(function() 
{

  var $departamento = $("#departamento");
  var $carrera      = $("#carrera");

  
  //+--------------------------------------------+
  //|   DEPARTAMENTO                             |
  //+--------------------------------------------+
  //|   Controla el cambio y id del pepartamento |
  //+--------------------------------------------+
  $departamento.on('change', function()
  {
      var idDepartamento = $(this).val();
      $carrera.attr('disabled', '');

      // Evalua que el valor seleccionado de Departamento sea valido
      if ( idDepartamento != "" ) 
      {

          $carrera.empty(); // Borrar todas la opciones dentro del select
          $.getJSON(base_url+'pensum/json_carrera_dep/'+idDepartamento, function(data) 
          {
              $carrera.removeAttr('disabled'); // Habilita el <select> de carrera
              $.each(data, function(id, nombre) // Recorre las opciones para colocar los <option>
              {
                  $carrera.append('<option value="'+ id +'">'+ nombre +'</option>');
              });
          })
      }else
      {
          $carrera.empty(); // Borrar todas la opciones dentro del select
          $carrera.attr('disabled', ''); // Desabilita el <select> de carrera
      }

  });

});