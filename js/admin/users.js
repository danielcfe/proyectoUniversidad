$(document).ready(function() {
     // Stuff to do as soon as the DOM is ready;
 var availableTags = [
        "ActionScript",
        "AppleScript",
          "Scheme"
    ];


 var materia = [
        "Matematica",
        "Castellano",
          "Scheme"
    ];

   var info = 2;
  $.post(base_url+'materia_c/all',function(data){
       console.dir(data);
    }, "json");



    function ajaxform(){
        return '&ajax=1';
    }
    function showError(data){
        var first = false;
        $boton = $('[name="submit"]');
        $.each(data, function(key,value) {
            var inputTarget = ' [name="'+key+'"]';    
            var target = $(inputTarget);
            if(!first){
                $(inputTarget).focus();
                first = true;
            }
            var labelError = $('<span display="none" class="label label-important">'+value+'</span>')
            .fadeIn("slow",function(){
                $boton.prop('disabled',true);
            })
            .delay(5000)
            .fadeOut("slow",function(){
                $boton.prop('disabled',false);
            });
            target.after(labelError);
        });
    }

    $( "#username" ).autocomplete({
        source: availableTags
    });

    $( "#birth_date" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd',
        minDate: "-90Y",
        maxDate: "+1M +10D",
        yearRange: '1900:' + new Date().getFullYear()
    });


    $('#formusers').submit(function(e){
        e.preventDefault();           
        var data = $('#formusers').serialize()+ajaxform();
        var target = base_url+"admin/ajax";
        console.dir(data);
        $.post(target,data,
         function(data){
          showError(data);

         }, "json")
        .success(function() { //alert("second success");
        })
        .error(function() { //alert("error"); 
        })
        .complete(function() { //alert("complete");
        });                    
    });

    

 }); 