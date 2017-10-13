;(function($) {
   $.fn.menuOverlays = function(options) {
      var settings = $.extend({
         // These are the defaults.
         highlightClass: "active"
      }, options );

      /* creat markup */
      var overlay = $('<div/>', {
          'class' : 'faustedition overlay'
      });

      var top = $('<div/>', {
          'class' : 'overlay-top'
      });
      
      var close = $('<i/>', {
          'class' : 'close fa fa-cancel-circled fa-lg'
      }).appendTo(top);

      top.appendTo(overlay);

      var content = $('<div/>', {
          'class' : 'overlay-content'
      }).appendTo(overlay);

      var background = $('<div/>', {
          'class' : 'overlay-background'
      }).appendTo(overlay);

      $('body').append(overlay);

      
      return this.each(function() {
         var $this = $(this);
         
         $this.on('click', 'a[href^="#"]', function(event) {
            event.preventDefault();
            $(this).blur();
            
            var template = $(this).attr('href');
            var content = $(template).html();

            if ( typeof content !== "undefined" && content != "" ) {
               var that = $(this);
               that.addClass(settings.highlightClass);
               
               $('body').find('.overlay .close').click(function(event) {
                  $(this).closest('.overlay').hide().find('.overlay-content').empty()
                  that.removeClass(settings.highlightClass);
               });

               $('body').find('.overlay .overlay-content').append(content);
               $('body').find('.overlay').fadeIn('fast');
            }
         });
      });
   };
})(jQuery);
