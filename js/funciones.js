/*var idreg = null;
function confirmation(idreg){
	console.dir(idreg);
if(confirm('Esta seguro que desea eliminar el registro?')){

var local = 'materia_c/eliminar/'+idreg;
location.href=local}
}
*/

$(document).ready(function(){

$(".delete").on('click',function(e){
	e.preventDefault();
	var id = $(this).data('id');
	if(confirm('Esta seguro que desea eliminar el registro '+$(this).data('uc')+'?')){
		var local = $(this).data('url')+id;
		location.href = local;
	}
});

});