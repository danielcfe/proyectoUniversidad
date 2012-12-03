$(document).ready(function() 
{

var id_departamento = null;


  $.getJSON(base_url+'materia_c/all/',function(data)
      {materia = data;}).success(function() { 

   /*   var auto = $( "#materia_codigo" );
      auto.autocomplete({
      source: materia,
      minLength: 0,
      focus: function( event, ui ) {},
      select: function( event, ui ) {
          console.dir(ui);
       return true;
     }
      });
*/





          var auto = $( "#materia_codigo" );
           auto.autocomplete({
            minLength: 0,
            source: materia,
            focus: function( event, ui ) {
                $( "#project" ).val( ui.item.label );
                return false;
            },
            select: function( event, ui ) {

              console.dir(ui);
              /*
                $( "#project" ).val( ui.item.label );
                $( "#project-id" ).val( ui.item.value );
                $( "#project-description" ).html( ui.item.desc );
                $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );*/
 
                return false;
            }
        })
        .data( "autocomplete" )._renderItem = function( ul, item ) {
            return $( "<li>" )
                .data( "item.autocomplete", item )
                .append( "<a>" + item.unidad_curricular + "<br>" + item.codigo + "</a>" )
                .appendTo( ul );
        };











  })




/*
  $.getJSON(base_url+'departamento/all',function(data)
  {materia = data;}).success(function() { //alert("second success");

    var auto = $( "#departamento" );
    auto.autocomplete({
    source: materia,
    minLength: 0,
    focus: function( event, ui ) {},
    select: function( event, ui ) {

           var Item = $('<div></div>').attr('data-id',ui.item.id).addClass('alert alert-info').html(ui.item.label);//'<li >'++'</li>';
        $('#pensumMateria').append(Item);


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
*/
 


});