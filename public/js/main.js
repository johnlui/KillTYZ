$(document).ready(function () {
  $('#add-input').focus();
  $('#add-input').bind('keypress',function(event){
    if(event.keyCode == "13")
    {
      var value = $(this).val();
      $('#list').prepend('<a href="#" class="list-group-item"><span class="check"></span><span class="value">'+value+'</span><span class="delete glyphicon glyphicon-trash" style="display: none;"></span></a>');
      $(this).val('');
    }
  });
  $('#list').click( function(event){
    var target = $(event.target);
    if (target.hasClass('delete')) {
      target.parents('.list-group-item').remove();
      return false;
    }
    if (!target.hasClass('list-group-item')) {
      target = $(target).parents('.list-group-item');
    }
    var check = target.children('.check').not('.checked');
    if (check.length) {
      check.addClass('checked');
      check.next('.value').addClass('checked');
      check.next('.value').next('.delete').show();
    } else{
      target.children('.check.checked').removeClass('checked');
      target.children('.value.checked').removeClass('checked');
      target.children('.delete').hide();
    }
  });
});