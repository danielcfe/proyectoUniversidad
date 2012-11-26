 $(document).ready(function() {
     // Stuff to do as soon as the DOM is ready;
     var availableTags = [
            "ActionScript",
            "AppleScript",
              "Scheme"
        ];

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
            var data = $('#formusers').serialize();
            console.dir(data);
          });

 }); 