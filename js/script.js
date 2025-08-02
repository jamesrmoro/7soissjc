jQuery(document).ready(function(jQuery){

    // module focus
    jQuery('.text-field-input').on('focus', function(){
        jQuery(this).closest('.input1_inner').addClass('focused');
    });

    jQuery('.text-field-input').on('blur', function(){
        if (jQuery(this).val() === '') {
            jQuery(this).closest('.input1_inner').removeClass('focused');
        }
    });

    setTimeout(function() {
        jQuery("input[type=tel]").mask("(99) 99999-9999");
        jQuery("input[name='telefone']").mask("(99) 99999-9999");
        jQuery("input[name='celular']").mask("(99) 99999-9999");
    }, 1000);

    jQuery("body").on("click", ".tab-mobile", function(){
        var id = jQuery(this).data('tab');
        jQuery(".tab-content").slideUp();
        jQuery("#"+id).slideToggle();
        jQuery(".tab-mobile").removeClass("active");
        jQuery(this).addClass("active");
        
    });

    jQuery("body").on("click", ".tab-mobile.active", function(){
        jQuery(".tab-mobile").removeClass("active");
    });

    jQuery('body').on('click', '.cookie-notice .accept', function(){
		localStorage.setItem("cookie-9imob", 'aceito');
		jQuery(".cookie-notice").fadeOut();
	});

	var status_cookie = localStorage.getItem('cookie-9imob');
	if (localStorage.getItem("cookie-9imob") == null) {
		jQuery(".cookie-notice").css("display", "block");
	}

    function closeModal() {
        jQuery(".bg-modal, .modal").fadeOut();
        jQuery(".modal .wrapper").html('');
        jQuery(".loader-fake").fadeIn();
    }

    jQuery('body').on('click', '.close-modal' ,function(e) {
        closeModal();
    });

    jQuery("body").on("click", ".open-modal-tour-js", function(e){
        e.preventDefault();
        url = jQuery(this).attr("data-url");
        jQuery(".modal .wrapper").append(jQuery('<iframe width="100%" height="600" src="'+url+'" frameborder="0"></iframe>'));
        setTimeout(() => {
            jQuery(".loader-fake").fadeOut();
        }, "2000")
        jQuery(".modal, .bg-modal").fadeIn();
    });

    jQuery("body").on("click", ".bg-modal", function(){
        closeModal();
    });

    jQuery(document).keyup(function(event){
        if(event.which=='27'){
            closeModal();
        }
    });

    setInterval(function(){ 
        setTimeout(function(){
            jQuery(".shake-whatsapp").addClass("shake-it");
            setTimeout(function(){
            jQuery(".shake-whatsapp").removeClass("shake-it");
            },5000)
        },5000)
    },15000);

     jQuery("body").on("click", ".button-whatsapp", function(){
      jQuery(this).fadeOut();
      jQuery(".whatsapp-aej").fadeIn();
      jQuery("#mensagem-whatsapp").focus();
      jQuery(".container-whatsapp .load").show();
      setTimeout(function(){
        jQuery(".container-whatsapp .load").hide();
        jQuery(".message-whatsapp").fadeIn();
      }, 1000);
    });

    jQuery('#mensagem-whatsapp').keyup(function() {
      if (jQuery(this).val() === "") {
        jQuery("#button-send").addClass('disabled');
      } else {
        jQuery("#button-send").removeClass('disabled');
      }
    });

    jQuery("body").on("click", ".text-whatsapp a.button-send", function(e){
        var texto_whatsapp = jQuery("#mensagem-whatsapp").val();
        var telefone = jQuery("#telefone-whatsapp").val();
        if(jQuery(window).width() > 1185) {
          jQuery("#button-send").attr("href", "https://web.whatsapp.com/send?phone="+telefone+"&text="+texto_whatsapp);
        } else {
          jQuery("#button-send").attr("href", "https://api.whatsapp.com/send?phone="+telefone+"&text="+texto_whatsapp);
        }
    });

    jQuery("body").on("click", ".close-whatsapp", function(){
      jQuery(".button-whatsapp").fadeIn();
      jQuery(".message-whatsapp").fadeOut();
      jQuery(".whatsapp-aej").fadeOut();
    });

    jQuery(".menu-item-has-children").prepend("<span class='icon-submenu'></span>");
    jQuery(".nav-item").on("click", function(e) {
        e.preventDefault();
        jQuery(this).toggleClass("open");
        jQuery(".rmm").toggleClass("open");
        if(jQuery(".rmm").hasClass("open")){
            jQuery(".tap-mobile").addClass("open");
        } else {
            jQuery(".tap-mobile").removeClass("open");
        }
    });
    jQuery("body").on("click", ".navbar-nav li a", function(){
      jQuery(".rmm, .nav-item, .tap-mobile").removeClass("open");
    });
    jQuery(".menu-item-has-children > .icon-submenu").click();
    jQuery(".icon-submenu").on("click", function(e) {
      jQuery(this).siblings().next(".sub-menu").toggleClass("sub-menu-show-mobile");
      jQuery(this).toggleClass("active");
    });
    jQuery("body").on("click", ".tap-mobile", function(){
      jQuery(".rmm, .nav-item, .tap-mobile").removeClass("open");
    });


    
});