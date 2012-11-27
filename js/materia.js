var materia = null;
$(document).ready(function() {

 $.post(base_url+'materia_c/all',function(data){
 materia = data;
 console.dir(materia);
 });

// $( "#unidad_curricular" ).autocomplete({
// source: materia
// });


 $( "#unidad_curricular" ).autocomplete({
minLength: 0,
source: materia,
focus: function( event, ui ) {
$( "#project" ).val( ui.item.unidad_curricular );
return false;
},
select: function( event, ui ) {
alert(ui.item.unidad_curricular);

return false;
}
})
.data( "autocomplete" )._renderItem = function( ul, item ) {
return $( "<li>" )
.data( "item.autocomplete", item )
.append( "<a>" + item.codigo + "<br>" + item.unidad_curricular + "</a>" )
.appendTo( ul );
};

});
