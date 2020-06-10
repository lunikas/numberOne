// Bendras JS kodas

// Luko JS kodas

// Jurgitos kodas
var el = document.querySelector('.tabs');
    var instance = M.Tabs.init(el);

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems);
      });
