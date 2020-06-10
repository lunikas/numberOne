// Bendras JS kodas

// Luko JS kodas
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems, options);
});



var el = document.querySelector('.tabs');
    var instance = M.Tabs.init(el);

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems);
      });
