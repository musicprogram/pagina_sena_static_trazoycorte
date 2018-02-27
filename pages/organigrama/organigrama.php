

 <h4 class="right-align cyan-text text-darken-2 "> ORGANIGRAMA DEL DEPARTAMENTO DE CORTE </h4> 



<br>  

<div id="diagram" >

  <div class="row">
    <div class="col s6">
      <img class="responsive-img z-depth-1 imgs" src="images/sena/confeccion1.jpg"></img>
    </div>
    <div class="col s6">
      <img class="responsive-img z-depth-1 imgs" src="images/sena/confeccion.jpg"></img>
    </div>
  </div>
  
</div>


<script type="text/javascript">

  

  $('#jefe').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/jefe.php').slideDown(560);
  })


  $('#auxiliar').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/auxiliar.php').slideDown(560);
  })


  $('#trazo').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/trazo.php').slideDown(560);
  })


  $('#extendido').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/extendido.php').slideDown(560);
  })

  $('#corte').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/corte.php').slideDown(560);
  })

  $('#oper').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/oper.php').slideDown(560);
  })


  $('#revision').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/revision.php').slideDown(560);
  })
  

  $('#empaque').click(function(){

    $('#diagram').load('pages/organigrama/organigram_concept/empaque.php').slideDown(560);
  })



  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
</script>





</div>
</div>




