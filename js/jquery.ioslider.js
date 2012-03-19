(function($) {
    
    $.fn.ioslider = function(options) {
        
        var defaults = {
            size: 'large',
			width: 250,  
   height: 374,  
   padding: 10, 
   toStart: '#button_'+$(this).attr('id')
        };
        
        var options = $.extend({}, defaults, options);
        
        return this.each(function(i) {
            
            var $this = $(this);
            var $elem = $this.attr('id');
         
			$group = $this.children();
  $this.css({'left' : -options.padding+'px'});
  $group.css({
  'display' : 'block',
  'float': 'left',
  'width': options.width+'px',
  'height': options.height+'px',
  'padding-left': options.padding+'px',
  'padding-right': options.padding+'px'
  });
  
  if(options.size == 'medium'){
  $this.wrap('<div class="screenM">');
  $('.screenM').wrap('<div class="caseM">');
  $('<div class="earsectionM"><div class="cameraM"></div><div class="speakerM"></div></div>').insertBefore('.screenM');
  $('<div id="button_'+$elem+'" class="buttonM"><div class="buttonsquareM"></div></div>').insertAfter('.screenM');
  }else if(options.size == 'small'){
  $this.wrap('<div class="screenS">');
  $('.screenS').wrap('<div class="caseS">');
  $('<div class="earsectionS"><div class="cameraS"></div><div class="speakerS"></div></div>').insertBefore('.screenS');
  $('<div id="button_'+$elem+'" class="buttonS"><div class="buttonsquareS"></div></div>').insertAfter('.screenS');
  }else{
  $this.wrap('<div class="screen">');
  $('.screen').wrap('<div class="case">');
  $('<div class="earsection"><div class="camera"></div><div class="speaker"></div></div>').insertBefore('.screen');
  $('<div id="button_'+$elem+'" class="button"><div class="buttonsquare"></div></div>').insertAfter('.screen');
  }
  $length = $group.length;
  $width = $length*(options.width+(options.padding*2));
  
  $right = $length-1;
  $right = 0-$right;
  $right = $right*(options.width+(options.padding*2));
 $go = -options.padding;
  
  $this.css({'width': $width});
  $this.draggable({ axis: 'x',
  stop: function(){
 
 $left = $this.position().left;
 
  $this.css('left');
 $lefty = Math.floor((1-$left)/((options.width+(options.padding*2))/2));
 if($go < $left){
 $current = $lefty - 1; }
 else{
 $current = $lefty;
 }
 
 
 
 if($current <= 0){ 
 $go = 0;
 }else if($current >= $length){ 
 $go = 0-(($length-1)*(options.width+(options.padding*2)));
 }else{
 if($current == 1){
 $go = -(options.width+(options.padding*2));
 }else{
 $go = 0-(($current-1)*(options.width+(options.padding*2)));
 }
  }
 
 $this.animate({'left': ($go-options.padding)});
 
}
  });
  
 $(options.toStart).click(function(){
  $this.animate({'left': (0-options.padding)});
  
  
  });
        });
    };
})(jQuery);