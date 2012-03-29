jQuery(document).ready( function()
{
   DUDE.rollover.init();
});

DUDE = {};

DUDE.rollover =
{
  init: function()
  {
    this.preload();

    jQuery(".socicon").hover(
      function () { jQuery(this).attr( 'src', DUDE.rollover.newimage(jQuery(this).attr('src')) ); },
      function () { jQuery(this).attr( 'src', DUDE.rollover.oldimage(jQuery(this).attr('src')) ); }
    );
 },
   
 preload: function()
 {
   jQuery(window).bind('load', function() {
     jQuery(".socicon").each( function( key, elm ) { jQuery('<img>').attr( 'src', DUDE.rollover.newimage( jQuery(this).attr('src') ) ); });
   });
  },
   
  newimage: function( src ){ return src.substring( 0, src.search(/(\.[a-z]+)/) ) + '_o' + src.match(/(\.[a-z]+)/)[0]; },
  oldimage: function( src ){ return src.replace(/_o/, ''); }
};
