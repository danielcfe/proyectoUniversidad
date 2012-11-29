$(document).ready(function() 
{

  $.getJSON(base_url+'departamento/all',function(data)
  {departamento = data;}).success(function() { //alert("second success");

    var auto = $( "#departamento" );
    auto.autocomplete({
    source: departamento,
    minLength: 0,
    focus: function( event, ui ) {},
    select: function( event, ui ) {
      $('#departamento_id').val(ui.item.id);
      return true;}
    });
  });

});
