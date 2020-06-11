// Bendras JS kodas

// Luko JS kodas

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.collapsible');
  var instances = M.Collapsible.init(elems);
});


// Jurgitos kodas
var el = document.querySelector('.tabs');
var options = {
  swipeable: false
}
var instance = M.Tabs.init(el, options);

document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems);

  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems);

  var elems = document.querySelectorAll('.tooltipped');
  var instances = M.Tooltip.init(elems);
});





