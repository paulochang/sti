
/**
 * Main Application Object
 *
 * @type object
 */
var STI = STI || { } ;

/**
 *
 *
 * @type Class
 */
STI.Gallery = ( function () {

  /**
   * This module's namespace object.
   *
   * @type Class
   */
  var gallery = new Class ( {
    Implements : [ Options ],
    /**
     * The container element.
     */
    element : false,
    /**
     * The currently active slide.
     */
    current : 0,
    /**
     * This Gallery options.
     */
    options : {
      selectors : {
        slides : 'div.slide-element',
        nextBtn: 'img.next-arrow',
        prevBtn: 'img.prev-arrow',
        images : 'img.slide-image'
      }
    },
    /**
     * Class Constructor
     *
     * @param {Element} element
     * @param {Object} options
     * @returns {STI.Gallery}
     */
    initialize : function ( element, options ) {
      var self = this;
      this.element = $ ( element ) ;
      this.setOptions ( options ) ;

      this.slides = this.element.getElements ( this.options.selectors.slides ) ;
      this.length = this.slides.length;
      this.images = this.element.getElements ( this.options.selectors.images ) ;
      this.loadedslides = 0;

       if ( this.slides.length ) {
        this.slides.each(function(item){
          item.getChildren().set ( 'tween', { duration : 1000 } ) ;
          item.getChildren().setStyle ( 'opacity', 0 ) ;          
        })
        this.slides[0].getChildren().setStyle ( 'opacity', 1 ) ;        
      }

      this.element.spin();
      this.images.each( function( item ) {
        if( item.complete ) {
          self.imageLoadEventHandler();
        } else {
          item.addEvent ( 'load', function () {
              self.imageLoadEventHandler ();
          } );
        }
      });
      this.nextBtn = this.element.getElement( this.options.selectors.nextBtn);
      this.prevBtn = this.element.getElement( this.options.selectors.prevBtn);
      
      if ( this.length <= 0 ) {
        this.element.addClass('no-display');  
        return ;
      }

      if ( this.length == 1 ) {
        this.nextBtn.addClass('one-display');
        this.prevBtn.addClass('one-display');
      }

      this.attachNavigationEvents();

      this.current = -1 ;
      this.display ( 0 );

      gallery.galleries.push ( this ) ;
      this.start();
    },
    start : function () {
      var self = this ;
      if ( self.timer ) {
        clearInterval ( self.timer ) ;
      }
      self.timer = ( function () {
        self.next () ;
      } ).periodical ( 5000 ) ;
    },
    /**
     * Adds and event for next/previous button.
     *
     * @returns {undefined}
     */

    attachNavigationEvents : function () {
      var self = this,
        length = self.length ;

      this.element.addEvent( 'click:relay(' +  this.options.selectors.nextBtn + ')', function( event, target) {
        self.next();
        event.stop();
      } );

      this.element.addEvent( 'click:relay(' +  this.options.selectors.prevBtn + ')', function( event, target) {
        self.prev();
        event.stop();
      } );

    },

    /**
     * Spins the slides till last is loaded
     *
     * @param {type} index
     */
    imageLoadEventHandler : function () {
      var parent = this.element;
      this.loadedslides --;

      if ( this.loadedslides < 1 ) {
        parent.removeClass('loading');
        parent.unspin();
      }
    },
    /**
     * Check for the index bounds before displaying a Slide.
     *
     * @param {type} index
     */
    computeIndex : function ( index ) {
      var safeIndex = index ;

      if ( index < 0 ) {
        safeIndex = this.computeIndex ( this.length + index ) ;
      } else if ( index >= this.length ) {
        safeIndex = this.computeIndex ( index - this.length ) ;
      } else {
        safeIndex = index ;
      }

      return safeIndex ;

    },
    /**
     * Display the next slide.
     *
     * @returns {undefined}
     */
    next : function () {
      this.display ( this.current + 1 ) ;
    },
    /**
     * Display the previous slide.
     *
     * @returns {undefined}
     */
    prev : function () {
      this.display ( this.current - 1 ) ;
    },
    /**
     * Display the slide in the selected index.
     *
     * @param {Number} index the slide's index.
     * @returns {undefined}
     */
    display : function ( index ) {
      var currentSlide = this.slides[this.current];
       if ( currentSlide ) {
        currentSlide.getChildren().tween('opacity', 1, 0);
       }

      this.current = this.computeIndex(index);

      currentSlide = this.slides[this.current] ;

      if ( currentSlide ) {
        currentSlide.getChildren().tween('opacity', 0, 1);
      }
    }
  } ) ;

  /**
   * Stores all Gallery instances.
   */
  gallery.galleries = [ ] ;

  /**
   * Stops all currently running Gallery instances. Must be called before
   * ajax-updating the site's content to avoid memory leaking
   * via periodical functions.
   *
   * @returns {undefined}
   */
  gallery.stopAll = function () {
    gallery.galleries.each ( function ( instance ) {
      instance.stop () ;
    } ) ;
  } ;

  return gallery ;

} () ) ;

$ ( window ).addEvent ( 'domready', function () {
  STI.history.addEvent ( 'complete', function () {

    new Fx.SmoothScroll({
      duration: 200
    },window);
      
    if ( $ ( 'featured-slide' ) ) {
      new STI.Gallery ( 'featured-slide' ) ;
    }
  } ) ;
  
  if ( $ ( 'featured-slide' ) ) {
    new STI.Gallery ( 'featured-slide' ) ;
  }

} ) ;


