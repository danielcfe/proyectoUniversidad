// var materia = null;
// $(document).ready(function() {

//   // $.post(base_url+'materia_c/all',function(data){
//   // materia = data;
//   // console.dir(materia);
//   // },"json");
// ;

// $( "#unidad_curricular" ).autocomplete({
// source: function(request, response) {
//                 $.ajax({
//                 url: "http://localhost/proyectoUniversidad/materia_c/all",
//                 data: { term: $("#unidad_curricular").val()},
//                 dataType: "json",
//                 type: "POST",
//                 success: function(data){
//                     response(data);
//                     console.dir(data);
//                 }
//                 });
//            }
// });


// //  $( "#unidad_curricular" ).autocomplete({
// // minLength: 0,
// // source: materia,
// // focus: function( event, ui ) {
// // $( "#project" ).val( ui.item.unidad_curricular );
// // return false;
// // },
// // select: function( event, ui ) {
// // alert(ui.item.unidad_curricular);

// // return false;
// // }
// // })
// // .data( "autocomplete" )._renderItem = function( ul, item ) {
// // return $( "<li>" )
// // .data( "item.autocomplete", item )
// // .append( "<a>" + item.codigo + "<br>" + item.unidad_curricular + "</a>" )
// // .appendTo( ul );
// // };

// });

$(document).ready(function() 
{

  $.getJSON(base_url+'materia_c/all',function(data)
  {materia = data;}).success(function() { //alert("second success");

    var auto = $( "#unidad_curricular" );
    auto.autocomplete({
    source: materia,
    minLength: 0,
    focus: function( event, ui ) {},
    select: function( event, ui ) {return true;}
    });
  });

});

