$(document).ready(function() 
{

var id_departamento = null;

  $.getJSON(base_url+'departamento/all',function(data)
  {materia = data;}).success(function() { //alert("second success");

    var auto = $( "#departamento" );
    auto.autocomplete({
    source: materia,
    minLength: 0,
    focus: function( event, ui ) {},
    select: function( event, ui ) {
      id_departamento = ui.item.id;
      $.getJSON(base_url+'carrera/all/'+id_departamento,function(data)
      {materia = data;}).success(function() { //alert("second success");
      var auto = $( "#carrera" );
      auto.autocomplete({
      source: materia,
      minLength: 0,
      focus: function( event, ui ) {},
      select: function( event, ui ) {
        $('#carrera_id').val(ui.item.id);
        return true;}
      });
  })

      return true;}
    });
  });

 


});