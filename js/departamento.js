$(document).ready(function() 
{

  $.getJSON(base_url+'departamento/all',function(data)
  {departamento = data;}).success(function() { //alert("second success");

    var auto = $( "#departamento_id" );
    auto.autocomplete({
    source: departamento,
    minLength: 0,
    focus: function( event, ui ) {},
    select: function( event, ui ) {return true;}
    });
  });
});
