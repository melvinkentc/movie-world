(function(d) {
    'use strict';
  
    const icon = d.querySelector('.icon');
    const theBody = d.querySelector('body');
  
    if (icon && theBody) {
      icon.addEventListener('click', function() {
        theBody.classList.toggle('menu-open');
      });
    }
  
  }(document));