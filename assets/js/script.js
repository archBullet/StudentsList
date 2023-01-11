$(function() {
	$(".table").tablesorter();
  });


  $(document).ready(function(){
    $(".search_area").keyup(function(){
    _this = this;
    
    $.each($(".table tbody tr"), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
            $(this).hide();
        } else {
            $(this).show();                
        }});
    });
});