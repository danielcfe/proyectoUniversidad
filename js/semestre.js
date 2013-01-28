$(document).ready(function() 
{


  //+--------------------------------------------------------+
  //|   AGREGAR SEMESTRE                                     |
  //+--------------------------------------------------------+
  //|   agrega el acordion para el nuevo semestre del pensum |
  //+--------------------------------------------------------+
  var $accordionSemestre = $("#accordionSemestre");
  var $agregarSemes      = $("#agregarSemes");

  $agregarSemes.on('click', function()
  {
      var numSemesMax = parseInt($("#numSemes").val());
      
      if(numSemesMax <= 11)
      {

        if(numSemesMax == 0)
          $(".penNoSeme").remove();

        numSemesMax++;
        var tagAcorSeme  = '<div class="accordion-group btn">';
            tagAcorSeme += '<div class="accordion-heading">';
            tagAcorSeme += '<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSemestre" href="#semestre'+numSemesMax+'">';
            tagAcorSeme += '<h4>Semestre '+numSemesMax+'</h4>';
            tagAcorSeme += '</a>';
            tagAcorSeme += '</div>';
            tagAcorSeme += '<div id="semestre'+numSemesMax+'" class="accordion-body collapse">';
            tagAcorSeme += '<div class="accordion-inner">';
            tagAcorSeme += '<input type="hidden" value="'+numSemesMax+'", name="semestre" id="semestre">';
            tagAcorSeme += '<input type="hidden" value="" name="materia_id" id="materia_id">';
            tagAcorSeme += '<div class="span1"> <h4>Materia</h4> </div>'
            tagAcorSeme += '<div class="span3"> <input type="text" value="" name="materia" id="materia"> </div>';
            tagAcorSeme += '<div class="span12">';
            tagAcorSeme += '<table class="table" id="tableMateria">';
            tagAcorSeme += '<tr>';
            tagAcorSeme += '<td><h5>Codigo</h5></td>';
            tagAcorSeme += '<td><h5>Uni. Curricular</h5></td>';
            tagAcorSeme += '<td><h5>H. Teoricas</h5></td>';
            tagAcorSeme += '<td><h5>H. Practicas</h5></td>';
            tagAcorSeme += '<td><h5>Total Horas</h5></td>';
            tagAcorSeme += '<td><h5>Uni. Credito</h5></td>';
            tagAcorSeme += '<td><h5>Cod. Prelacion</h5></td>';
            tagAcorSeme += '<td></td>';
            tagAcorSeme += '</tr>';
            tagAcorSeme += '</table>';
            tagAcorSeme += '</div>';
            tagAcorSeme += '</div>';
            tagAcorSeme += '</div>';
            tagAcorSeme += '</div>';

        $accordionSemestre.append(tagAcorSeme);
      }

      $("#numSemes").val(numSemesMax);
  });
  

  //+--------------------------------------------------------+
  //|   AUTOCOMPLETAR MATERIA                                |
  //+--------------------------------------------------------+
  //|   busca en BD las conincidencias que este en el texto  |
  //+--------------------------------------------------------+
  var $accordion  = $("div.accordion-heading");
  var $idPensum   = $("#idPensum");

  $accordion.live('click', function()
  {
      var $parent       = $(this).parent(); 
      var $materia      = $(this).parent().find('input#materia');
      var $materiaId    = $(this).parent().find('input#materia_id');
      var $tableMateria = $(this).parent().find('table#tableMateria');

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
          select: function( event, ui ) 
          {
              $materiaId.val(ui.item.codigo);
              agregarMateriaSemest($parent, ui.item);
              return true;
          }
        });
      });
  });



  //+---------------------------------------------------------------+
  //|   AGREGAR MATERIA                                             |
  //+---------------------------------------------------------------+
  //|   Agrega la materia a un pensum especifico junto el semestre  |
  //+---------------------------------------------------------------+
  function agregarMateriaSemest($objectTag, data)
  {

    var $materiaId    = $objectTag.find('input#materia_id');
    var $semestre     = $objectTag.find('input#semestre');
    var $tableMateria = $objectTag.find('table#tableMateria');
    var numSemesAnt   = parseInt($semestre.val());

    if (--numSemesAnt != 0)
    {
        var $accorSemes       = $("div#semestre"+numSemesAnt);
        var $tagTableSemesAnt = $accorSemes.find('table#tableMateria tbody tr');


        if ($tagTableSemesAnt.length == 1) 
        {
            alert("Debe Registrar Materias en el Semestre Anterior");
        }else
        { ajax_agreMatSem($tableMateria, $idPensum.val(), $materiaId.val(), $semestre.val(), data); }  
    }
    else
    { ajax_agreMatSem($tableMateria, $idPensum.val(), $materiaId.val(), $semestre.val(), data); }

  }

  //+---------------------------------------------------------------+
  //|   ELIMINARMATERIA                                             |
  //+---------------------------------------------------------------+
  //|   Elimina la materia a un pensum especifico junto el semestre |
  //+---------------------------------------------------------------+
  var $eliminarMat = $('button#eliminarMat');

  $eliminarMat.live('click', function()
  {
      var $tablaTr  = $(this).parent().parent();
      var materiaId = $(this).val();

      $.ajax(
      {
        url: base_url+'semestre/borrar_semestre',
        type: "POST",
        data: { pensum: $idPensum.val(), materia: materiaId },
        success: function()
        { 
          $tablaTr.fadeOut(500, function()
          {
              $(this).remove();
          }); 
        },
        error: function(error)
        { alert("Problema al intentar eliminar"); }
      });
  });



  function ajax_agreMatSem($objectTag, penid, matCod, semNum, data)
  {
      $.ajax(
      {
        url: base_url+'semestre/agregar_semestre',
        type: "POST",
        data: { pensum: penid, materia: matCod, semes: semNum },
        success: function()
        { 
          var tagTableMat  = '<tr>';
              tagTableMat += '<td>'+data.codigo+'</td>';
              tagTableMat += '<td>'+data.unidad_curricular+'</td>';
              tagTableMat += '<td>'+data.horas_teoricas+'</td>';
              tagTableMat += '<td>'+data.horas_practicas+'</td>';
              tagTableMat += '<td>'+data.total_horas+'</td>';
              tagTableMat += '<td>'+data.uni_credito+'</td>';
              tagTableMat += '<td>'+data.cod_prelacion+'</td>';
              tagTableMat += '<td><button class="btn btn-mini btn-danger" id="eliminarMat" type="button" value="'+data.codigo+'"><i class="icon-remove-sign"></i></td>';
              tagTableMat += '</tr>'; 

              $objectTag.append(tagTableMat); 
        },
        error: function(error)
        { 
          var tagTableMat  = '<tr class="error">';
              tagTableMat += '<td style="text-align:center;" colspan="8"><h5>Problemas al registrar la materia en el semestre</h5></td>';
              tagTableMat += '</tr>';
          $objectTag.append(tagTableMat);
          $objectTag.find("tbody tr.error").fadeOut(2500, function()
          {
              $(this).remove();
          });

        }
      });
  }


});