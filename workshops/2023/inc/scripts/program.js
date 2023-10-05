// Reimplementation of 'toggle', which is now deprecated
$.fn.toggle=function(){
  var functions=arguments
  return this.click(function(){
     var iteration=$(this).data('iteration')||0
     //	console.log(iteration)
     functions[iteration].apply(this,arguments)
     iteration= (iteration+1) %functions.length
     $(this).data('iteration',iteration)
    })
}

/* shows/hides target when clicking src with text vMark and hMark */
function toggleMark (src, target, vMark, hMark) {
 $(src).toggle
   (function () {
      $(this).parent().find(target).slideDown('slow');
      $(this).html(vMark); },
    function () {
      $(this).parent().find(target).slideUp('slow');
      $(this).html(hMark); }
   );
}

/* Shows/hides the abstract of a paper or talk */
function toggleAbstract () {
  var absClass = "show-abstract";
  var absElem = 'div.' + absClass;
  $('span.abstract').html("abstract");
  $('span.abstract').parent().append('<div class="'+absClass+'"></div>');
  $('span.abstract').click
     (function () {
        var abstract = $(this).attr('src');
        $(this).parent().find(absElem).html("... loading ...");
        $(this).parent().find(absElem).load(abstract);
        $(this).unbind('click');
        toggleMark(this, absElem, "hide abstract", "abstract");
        $(this).click();
  });
}

$(document).ready(function() {
  toggleAbstract();
});
