jQuery(document).ready(function($) {
  

  var h3Item = $('.faq-item');

  h3Item.click(function(e) {
    $(this).toggleClass('active')
  })
});