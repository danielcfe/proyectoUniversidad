var idreg = null;
function confirmation(idreg){
	console.dir(idreg);
if(confirm('Esta seguro que desea eliminar el registro?')){

var local = 'materia_c/eliminar/'+idreg;
location.href=local}
}