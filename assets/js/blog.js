jQuery(document).ready(function () {
  jQuery('.categories li a')
    .filter(function () {
      return this.href && this.href == location.href;
    })
    .parentsUntil('.categories li a')
    .addClass('activeMenu');
});
