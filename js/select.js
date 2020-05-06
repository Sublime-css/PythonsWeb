var addclass = 'highlight';
var $cols = $('.page').click(function(e) {
    $cols.removeClass(addclass);
    $(this).addClass(addclass);
});