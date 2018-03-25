jQuery(function(){
    if (typeof(Storage) !== "undefined") {
        jQuery("a[id^=addToWishlist-]").on("click", function(e) {
            e.preventDefault();
            jQuery.fn.updateWishlist();

            return false;
        });
    }
});