(function($) {
    // Hook into the "cf7-widget-promotion-notice" class we added to the notice, so
    // Only listen to YOUR notices being dismissed
    var elNotice = $('.cf7-widget-promotion-notice');

    $( document ).on( 'click', '.cf7-widget-promotion-notice .notice-dismiss', function () {
        // Read the "data-notice" information to track which notice
        // is being dismissed and send it via AJAX
        var type = $( this ).closest( '.cf7-widget-promotion-notice' ).data( 'notice' );
        var nonce = $( this ).closest( '.cf7-widget-promotion-notice' ).data( 'nonce' );

        // Make an AJAX call
        // Since WP 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.ajax({
            // url of ajax request, value of voidCf7Admin.ajaxUrl is localized during enqueue script
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'dismissed_promotional_notice_handler',
                type: type,
                status: 'remind-me-later',
            },
            // wp verify nonce automatically after sending nonce like this
            headers: {
                'X-WP-Nonce': nonce
            },
            dataType: 'json',
        });
    });

    elNotice.find( '.cf7-widget-never-show' ).on( 'click', function (e) {
        e.preventDefault();
        // Read the "data-notice" information to track which notice
        // is being dismissed and send it via AJAX
        var type = $( this ).closest( '.cf7-widget-promotion-notice' ).data( 'notice' );
        var nonce = $( this ).closest( '.cf7-widget-promotion-notice' ).data( 'nonce' );

        elNotice.hide();

        // Make an AJAX call
        // Since WP 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.ajax({
            // url of ajax request, value of voidCf7Admin.ajaxUrl is localized during enqueue script
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'dismissed_promotional_notice_handler',
                type: type,
                status: 'never-show',
            },
            // wp verify nonce automatically after sending nonce like this
            headers: {
                'X-WP-Nonce': nonce
            },
            dataType: 'json',
        });
    });

    $( document ).on( 'click', '.void-cf7-widget-data-track-notice .notice-dismiss', function () {
        // Read the "data-notice" information to track which notice
        // is being dismissed and send it via AJAX
        var type = $( this ).closest( '.void-cf7-widget-data-track-notice' ).data( 'notice' );
        var nonce = $( this ).closest( '.void-cf7-widget-data-track-notice' ).data( 'nonce' );
        // Make an AJAX call
        // Since WP 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.ajax({
            // url of ajax request, value of voidCf7Admin.ajaxUrl is localized during enqueue script
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'dismissed_usage_data_track_void_cf7',
                type: type,
                status: 'remind-me-later',
            },
            // wp verify nonce automatically after sending nonce like this
            headers: {
                'X-WP-Nonce': nonce
            },
            dataType: 'json',
        });
    });

})(jQuery);