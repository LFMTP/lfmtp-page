/* Load the abstract of a talk */
function loadAbstract (elem) {
  var label = "<b>Abstract:</b> ";
  var abstract = $(elem).attr('src');
  $(elem).load(abstract, function () {
                           $(elem).prepend(label);
                         });
}

$(document).ready(function() {
  $('.abstract').each (
     function (i) {
       loadAbstract($(this))
     });
});
