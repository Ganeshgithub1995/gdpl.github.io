function director(id) {
  var heading = $(".test-a" + id).attr('data-heading');
  var description = $(".test-a" + id).attr('data-tttt');
  var image = $(".test-a" + id).attr('data-image');
  // alert(jhjhh);

  $.fancybox.open('<div class="message"><h2 class="fancmodalinnertext">' + heading + '</h2><img src="' + image + '" class="btechteamimgdesign"><p class="fancymodalparatext">' + description + '</p></div>');
}


$(document).ready(function () {
  $('.x').click(function () {
    $('.fancybox-container').hide();
    overlay.appendTo(document.body).remove();
    return false;
  });
});

