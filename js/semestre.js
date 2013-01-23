$(document).ready(function() 
{

  var $accordionSemestre = $("#accordionSemestre");
  var $agregarSemes      = $("#agregarSemes");

  //+--------------------------------------------------------+
  //|   AGREGAR SEMESTRE                                     |
  //+--------------------------------------------------------+
  //|   agrega el acordion para el nuevo semestre del pensum |
  //+--------------------------------------------------------+
  $agregarSemes.on('click', function()
  {
      var numSemesMax = parseInt($("#numSemes").val());
      
      if(numSemesMax <= 11)
      {

        if(numSemesMax == 0)
          $(".penNoSeme").remove();

        numSemesMax++;
        var tagAcorSeme  = '<div class="accordion-group">';
            tagAcorSeme += '<div class="accordion-heading">';
            tagAcorSeme += '<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSemestre" href="#semestre'+numSemesMax+'">';
            tagAcorSeme += '<h3>Semestre #'+numSemesMax+'</h3>';
            tagAcorSeme += '</a>';
            tagAcorSeme += '</div>';
            tagAcorSeme += '<div id="semestre'+numSemesMax+'" class="accordion-body collapse">';
            tagAcorSeme += '<div class="accordion-inner">';
            tagAcorSeme += '<input type="hidden" value="'+numSemesMax+'", name="semestre" id="semestre">';
            tagAcorSeme += '<input type="hidden" value="" name="materia_id" id="materia_id">';
            tagAcorSeme += '<div class="span1"> <h4>Materia</h4> </div>'
            tagAcorSeme += '<div class="span3"> <input type="text" value="" name="materia" id="materia"> </div>';
            tagAcorSeme += '</div>';
            tagAcorSeme += '</div>';
            tagAcorSeme += '</div>';

        $accordionSemestre.append(tagAcorSeme);
      }

      $("#numSemes").val(numSemesMax);
  });



  var $accordion = $("div.accordion-heading");
  

  //+--------------------------------------------------------+
  //|   AUTOCOMPLETAR MATERIA                                |
  //+--------------------------------------------------------+
  //|   busca en BD las conincidencias que este en el texto  |
  //+--------------------------------------------------------+
  $accordion.live('click', function()
  {
      var $materia   = $(this).parent().children('div.accordion-body').children().children('div.span3').children();
      var $materiaId = $(this).parent().children('div.accordion-body').children().children('input#materia_id');

      $materia.val('');
      $materiaId.val('');
      $.getJSON(base_url+'semestre/json_get_materia',function(data)
      {dataMateria = data;}).success(function() 
      { //alert("second success");
        $materia.autocomplete(
        {
          source: dataMateria,
          minLength: 0,
          focus: function( event, ui ) {},
          select: function( event, ui ) {
          $materiaId.val(ui.item.codigo);
          return true;}
        });
      });
  });


});