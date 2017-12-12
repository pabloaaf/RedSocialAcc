$(document).ready(function () {
    $('#sidebarCollapse').click(function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
    $('#principal').show();
    $('[change]').click(function(){
     	$('section').each(function(){
			$(this).hide();
		});
		$('#'+$(this).attr('change')).show();
    });
    $('#mens').addClass("active");
    $("#panelNuev").hide();
    $("#nuevo").click(function(){
      $("#panelNuev").show();
      $("#panelGen").hide();
    });
    $("#enviar").click(function(){
      $("#panelNuev").hide();
      $("#panelGen").show();
    });

    //CAMBIAR
    /*
  publicaciones();
  function publicaciones() {
    $("#public").show();
    $("#sig").hide();
    $("#seg").hide();
  }
  function seguidores() {
    $("#public").hide();
    $("#sig").hide();
    $("#seg").show();
  }
  function siguiendo() {
    $("#public").hide();
    $("#sig").show();
    $("#seg").hide();
  }*/
});
