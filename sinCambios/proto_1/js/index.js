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
});
