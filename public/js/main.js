$(document).ready(function () {
  $('#add-input').focus();
  $('#add-input').bind('keypress',function(event){
    var value = $(this).val();
    if( event.keyCode == "13" && value ) {
      var time = (new Date()).getTime();
      addItem(time, value, false);
      store(time, value, false);
      $(this).val('');
    }
  });
  $('#list').click( function(event){
    var target = $(event.target);
    if (target.hasClass('delete')) {
      target.parents('.list-group-item').remove();
      localStorage.removeItem(target.parents('.list-group-item').attr('data-time'));
      return false;
    }
    if (!target.hasClass('list-group-item')) {
      target = $(target).parents('.list-group-item');
    }
    var check = target.children('.check').not('.checked');
    if (check.length) {
      changeStatus(target.attr('data-time'), true);
      check.addClass('checked');
      check.next('.value').addClass('checked');
      check.next('.value').next('.delete').show();
    } else{
      changeStatus(target.attr('data-time'), false);
      target.children('.check.checked').removeClass('checked');
      target.children('.value.checked').removeClass('checked');
      target.children('.delete').hide();
    }
    return false;
  });
  store(0, 'KillTYZ 基础 Todo-List 功能实现', true);
  store(1, '浏览器本地存储 功能实现，请大胆刷新页面！', true);
  for(x in localStorage) {
    var obj = JSON.parse(localStorage.getItem(x));
    addItem(obj.time, obj.value, obj.checked);
  }
});

function store(time, value, checked) {
  localStorage.setItem(time, stringify(time, value, checked));
}
function changeStatus(time, checked) {
  var obj = JSON.parse(localStorage.getItem(time));
  obj.checked = checked ? true : false;
  localStorage.setItem(time, JSON.stringify(obj));
}
function stringify(time,value,checked) {
  var obj = new Object;
  obj.time = time;
  obj.value = value;
  obj.checked = checked;
  return JSON.stringify(obj);
}
function addItem(time, value, checked) {
  var node = checked ? '<a href="#" class="list-group-item" data-time="'+time+'"><span class="check checked"></span><span class="value checked">'+value+'</span><span class="delete glyphicon glyphicon-trash"></span></a>' : '<a href="#" class="list-group-item" data-time="'+time+'"><span class="check"></span><span class="value">'+value+'</span><span class="delete glyphicon glyphicon-trash" style="display: none;"></span></a>';
  $('#list').prepend(node);
}