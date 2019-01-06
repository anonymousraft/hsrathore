<div class="row row-padding" style="margin-bottom:5%; padding-bottom:0% !important;">
<div id="bars">
  <div class="bar" data-percent="100">
		<h3>WordPress</h3>
		<canvas class="bar-circle" width="130" height="130 "></canvas>
	</div>
<div class="bar" data-percent="100">
		<h3>HTML5</h3>
		<canvas class="bar-circle" width="130" height="130"></canvas>
	</div>
<div class="bar" data-percent="80">
		<h3>JavaScript</h3>
		<canvas class="bar-circle" width="130" height="130"></canvas>
	</div>
<div class="bar" data-percent="75">
		<h3>PHP</h3>
		<canvas class="bar-circle" width="130" height="130"></canvas>
	</div>
	<div class="bar" data-percent="80">
		<h3>Git/Version</h3>
		<canvas class="bar-circle" width="130" height="130"></canvas>
	</div>
  <div class="bar" data-percent="80">
    <h3>Graphics</h3>
    <canvas class="bar-circle" width="130" height="130"></canvas>
  </div>
</div>
</div>
<script>
(function() {

  var Progress = function( element ) {

    this.context = element.getContext( "2d" );
    this.refElement = element.parentNode;
    this.loaded = 0;
    this.start = 4.72;
    this.width = this.context.canvas.width;
    this.height = this.context.canvas.height;
    this.total = parseInt( this.refElement.dataset.percent, 10 );
    this.timer = null;

    this.diff = 0;

    this.init();
  };

  Progress.prototype = {
    init: function() {
      var self = this;
      self.timer = setInterval(function() {
        self.run();
      }, 25);
    },
    run: function() {
      var self = this;

      self.diff = ( ( self.loaded / 100 ) * Math.PI * 2 * 10 ).toFixed( 2 );
      self.context.clearRect( 0, 0, self.width, self.height );
      self.context.lineWidth = 10;
      self.context.fillStyle = "#ffffff";
      self.context.strokeStyle = "#ffffff";
      self.context.textAlign = "center";
      self.context.font = "17px Roboto";
      self.context.fillText( self.loaded + "%", self.width * .5, self.height * .5 + 2, self.width);
      self.context.beginPath();
      self.context.arc( 65, 65, 60, self.start, self.diff / 10 + self.start, false );
      self.context.stroke();

      if( self.loaded >= self.total ) {
        clearInterval( self.timer );
      }

      self.loaded++;
    }
  };

  var CircularSkillBar = function( elements ) {
    this.bars = document.querySelectorAll( elements );
    if( this.bars.length > 0 ) {
      this.init();
    }
  };

  CircularSkillBar.prototype = {
    init: function() {
      this.tick = 25;
      this.progress();

    },
    progress: function() {
      var self = this;
      var index = 0;
      var firstCanvas = self.bars[0].querySelector( "canvas" );
      var firstProg = new Progress( firstCanvas );



      var timer = setInterval(function() {
        index++;

        var canvas = self.bars[index].querySelector( "canvas" );
        var prog = new Progress( canvas );

        if( index == self.bars.length ) {
            clearInterval( timer );
        }

      }, self.tick * 100);

    }
  };

  document.addEventListener( "DOMContentLoaded", function() {
    var circularBars = new CircularSkillBar( "#bars .bar" );
  });

})();
</script>
