(function($) {

    // call the the functionality of add, edit form when elementor editor panel is open for edit
    elementor.hooks.addAction('panel/open_editor/widget/void-section-cf7', function (panel, model, view) {
        // declare some global variable to avaoid multiple searching on DOM
        var formId;
        var windowParent = window.parent;
        var modal, modalContainer, close, iframe, elUpdatePreviewButton;

        addEditHandler();

        function addEditHandler(){
            //console.log('add edit handler call');
            // current selected form by attr of form mark up 
            formId = model.attributes.settings.attributes.cf7;
            // modal elementor selector
            modal = windowParent.jQuery('#cf7_widget_elementor_contact_form_control_modal');
            modalContainer = modal.find('.cf7-widget-elementor-modal-content');
            modalLoading = modal.find('.cf7-widget-elementor-modal-content-loader');
            close = modal.find('.cf7-widget-elementor-modal-close');
            iframe = modal.find('.cf7-widget-elementor-modal-iframe');

            // elementor update preview button selector
            elUpdatePreviewButton = $('.elementor-update-preview');
            // hide button from edit panel
            //elUpdatePreviewButton.hide();

            // call initial form assign function for preventing data loose after switching widget
            addButtonFunction();

            // form edit button element selector
            var $elementEdit = $( '.void-cf7-edit-form-btn' ).find( '#void-cf7-edit-form-btn' );
            
            // form edit button click event function
            $elementEdit.on('click', function(e){
                e.preventDefault();
                editButtonFunction();
            });
            
            // form add new button element selector
            var $elementAdd = $( '.void-cf7-add-form-btn' ).find( '#void-cf7-add-form-btn' );
            // form add new button click event function
            $elementAdd.on('click', function(e){
                e.preventDefault();
                // loader add on modal
                modalLoading.addClass('loading');
                // insert src in iframe with edit link of selected form
                iframe.attr('src', voidCf7Admin.url+'admin.php?page=wpcf7-new');
                // set opacity 0 to hide iframe untill it's load contents, opacity will be 1 after it's load content from modal-editor.php scripts
                iframe.css('opacity', 0);
                // open modal with contact form add new url
                modal.show();
                // modal close button click event
                close.on('click', function(){
                    addButtonFunction();
                    // hide after completed all the actions        
                    modal.fadeOut(500);
                });
            });

        }

        //when moving from Advanced tab to content model variable is null so to pass it's data
        function cf7_data_pass_around_model(panel,model,view){
            // set timeout to load content tab's content
            setTimeout(function(){
                addEditHandler();
            }, 100);
        }

        // this ensures the data remains the same even after switching back from advanced tab to content tab
        $(".elementor-panel").mouseenter(function(){

            cf7_data_pass_around_model(panel,model,view);
            
        });

        function editButtonFunction(){
            // loader add on modal
            modalLoading.addClass('loading');
            // insert src in iframe with edit link of selected form
            iframe.attr('src', voidCf7Admin.url+'admin.php?page=wpcf7&post='+formId+'&action=edit');
            // set opacity 0 to hide iframe untill it's load contents, opacity will be 1 after it's load content from modal-editor.php scripts
            iframe.css('opacity', 0);
            // open modal with contact form edit url
            modal.show();
            // modal close button click event
            close.on('click', function(){
                // reload frondend panel to show updated data
                elUpdatePreviewButton.find('.elementor-update-preview-button').trigger('click');
                // modal modal after completed all the tasks
                modal.fadeOut(500);
            });
        }

        function addButtonFunction() {
            // element selector of form selector select2 from panel to avoid multiple search on DOM
            var elCf7 = panel.$el.find('[data-setting="cf7"]');
            // ajax request to admin-ajax for getting all contact form 7 from database
            $.ajax({
                // url of ajax request, value of voidCf7Admin.ajaxUrl is localized during enqueue script
                url: voidCf7Admin.ajaxUrl,
                type: 'POST',
                data: {
                    action: 'void_cf7_data'
                },
                // wp verify nonce automatically after sending nonce like this
                headers: {
                    'X-WP-Nonce': voidCf7Admin.wpRestNonce
                },
                dataType: 'json',
                // success function of ajax request
                success: function (output) {
                    // clear corrent option from form select select2
                    elCf7.empty();
                    // running loop by all from data after gettings it from ajax request
                    $.each(output, function(index, value){
                        // add option to form select select2 with new created from
                        elCf7.append('<option value="'+index+'">'+value+'</option>');
                    });
                    //set already selected value
                    elCf7.val( model.attributes.settings.attributes.cf7);

                    // disable select2 of form select if there was no data
                    if( elCf7.has('option').length == 0 ) {
                        elCf7.attr('disabled', 'disabled');
                    }else{
                        elCf7.removeAttr('disabled');
                    }
                },
                // error function of ajax request
                error: function (e) {
                    console.log(e);
                },
            });
            
        }
    });

})(jQuery);
