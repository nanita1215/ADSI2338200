<!-- The Modal -->
<div id="cf7_widget_elementor_contact_form_control_modal" class="cf7_widget_elementor_contact_form_control_modal" style="display: none;">

  <!-- Modal content -->
  <div class="cf7-widget-elementor-modal-content">
    <div class="cf7-widget-elementor-modal-content-loader loading"></div>
    <span class="cf7-widget-elementor-modal-close">&times;</span>
    <!-- iframe to open contact form edit or add functionality -->
    <iframe style="opacity: 0;" onload="voidCf7IframeOnLoad()" class="cf7-widget-elementor-modal-iframe" ></iframe>
  </div>
</div>


<script type="text/javascript">
  // menu hide wp admin menu function after onload iframe contants
  function voidCf7IframeOnLoad() {
    // select iframe
    var loader = document.getElementsByClassName("cf7-widget-elementor-modal-content-loader");
    var iframe = document.getElementsByClassName("cf7-widget-elementor-modal-iframe");
    iframe[0].style.opacity = 0;

    // check iframe found
    if(iframe != null && iframe.length > 0){
      // select wpadminbar, wpcontent, wpadmibar, wp-toolbar for modify it
      var adminBar = iframe[0].contentWindow.document.getElementById("wpadminbar");
      var wpToolBar = iframe[0].contentWindow.document.getElementsByClassName("wp-toolbar");
      var adminMenu = iframe[0].contentWindow.document.getElementById("adminmenumain");
      var wpContent = iframe[0].contentWindow.document.getElementById("wpcontent");
      var addNewButton = iframe[0].contentWindow.document.querySelectorAll('a.page-title-action');
      
      // remove add new button on editor
      if(addNewButton != null && addNewButton.length > 0){
        addNewButton[0].style.display = "none";
      }
      // wp admin bar hide
      if(adminBar != null){
        adminBar.style.display = "none";
      }

      // wp toolbar padding top remove
      if(wpToolBar !=null && wpToolBar.length > 0){
        wpToolBar[0].style.paddingTop = '0px';
      }

      // wp admin menu hide
      if(adminMenu != null){
        adminMenu.style.display = "none";
      }

      // wp content margin left hide
      if(wpContent != null){
        wpContent.style.marginLeft = "0px";
        // loader remove on modal after removing everything
        loader[0].classList.remove("loading");
      }

      // set opacity 1 to show iframe after hiding all the wp bars
      iframe[0].style.opacity = 1;

      // prevent flickering after save form
      var saveButton = iframe[0].contentWindow.document.querySelectorAll('input.button-primary[name=wpcf7-save]');
      saveButton.forEach(function(item, index){
        saveButton[index].onclick = function(){
          iframe[0].style.opacity = 0;
          if(loader != null && loader.length > 0){
            // loader add again on modal
            loader[0].classList.add("loading");
          }
        }
      });

      // prevent flickering after copy form
      var copyButton = iframe[0].contentWindow.document.querySelectorAll('input.copy.button[name=wpcf7-copy]');
      copyButton.forEach(function(item, index){
        copyButton[index].onclick = function(){
          iframe[0].style.opacity = 0;
          if(loader != null && loader.length > 0){
            // loader add again on modal
            loader[0].classList.add("loading");
          }
        }
      });

      // prevent flickering after delete form
      var deleteButton = iframe[0].contentWindow.document.querySelectorAll('input.delete.submitdelete[name=wpcf7-delete]');
      deleteButton.forEach(function(item, index){
        deleteButton[index].onclick = function(){
          iframe[0].style.opacity = 0;
          if(loader != null && loader.length > 0){
            // loader add again on modal
            loader[0].classList.remove("loading");
          }
        }
      });

    }

  }

</script>