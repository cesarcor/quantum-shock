jQuery(document).ready(function () {
    jQuery('.controls#theme-slug-img-container li img').click(function () {
        jQuery('.controls#theme-slug-img-container li').each(function () {
            jQuery(this).find('img').removeClass('theme-slug-radio-img-selected');
        });
        jQuery(this).addClass('theme-slug-radio-img-selected');
    });
});
