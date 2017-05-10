<style type="text/css">
  .carousel-inner img {
  width:100%;
    height:100%;
}

#myCarousel {
  font-size:90%;
}

.carousel-controls-mini {

}

.carousel-controls-mini > a {
  border:1px solid #eee;
    width:20px;
    display:block;
    float:left;
    text-align:center;
}

.xde{ color: #7c795d; font-family: 'Source Sans Pro', sans-serif; font-size: 18px; font-weight: 400; line-height: 32px; margin: 0 0 24px; }


</style>

     <div class="col-md-6">
   
  <hr>
  
  <!-- Slider -->
  <div class="row-fluid">
    <div class="span9" id="slider">
      <!-- Top part of the slider -->
      <div class="row-fluid">
        <div class="span2" id="carousel-bounding-box">
          <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="active item" data-slide-number="0"><img class="img-rounded" src="<?php echo base_url('images/t.jpg'); ?>"></div>
              <div class="item" data-slide-number="1"><img class="img-rounded" src="<?php echo base_url('images/tt.jpg'); ?>"></div>
              <div class="item" data-slide-number="2"><img class="img-rounded" src="<?php echo base_url('images/tte.jpg'); ?>"></div>
              <div class="item" data-slide-number="3"><img class="img-rounded" src="<?php echo base_url('images/te.jpg'); ?>"></div>
              <div class="item" data-slide-number="4"><img class="img-rounded" src="<?php echo base_url('images/ttttt.jpg'); ?>"></div>
              <div class="item" data-slide-number="5"><img class="img-rounded" src="<?php echo base_url('images/ttttttt.jpg'); ?>"></div>
            </div>

          </div>
          
          <!-- Carousel nav -->
          <div class="carousel-controls-mini">
              <a href="#myCarousel" data-slide="prev">‹</a>
              <a href="#myCarousel" data-slide="next">›</a>
          </div>
          
        </div>
                  
        

        
        
        
      </div>
      
    </div>
  </div> <!--/Slider-->


</div>










      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                <p class="xde">A good teacher has greater influence in shaping the life of an individual even more than his/her parents. In our country’s culture, a teacher has been given a place above the almighty god. A good teacher’s proper guidance and support is very important in achieving one’s goal in life. Every successful individual always remembers the constructive role played by his/her teacher in their school-college days.</p>
                <small>Happy Teacher Days <cite title="Source Title"></cite></small>
              </blockquote>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->


<div class="col-md-7">
<br><br>

<iframe width="500px" height="400px" src="http://www.youtube.com/embed/7pHFOP--odQ?feature=player_detailpage" frameborder="0"></iframe>
</div>


        <div class="col-md-5">

          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Quotes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body clearfix">
              <blockquote class="pull-right">
                <p class="xde">A teacher plays great role in the student’s lives. Teachers are the real shapers of future of the students which can never be ignored. Teachers make their own lesson plan to make education more effective and interesting as well as facilitate students learning. Here we have listed some effective, inspiring, motivational and interesting quotes and quotations about teachers said by the famous and popular personalities all over the world. You can use such quotes to wish your teachers on their birthdays, teachers day or other special occasions</p>
              </blockquote>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


<script type="text/javascript">
  $('#myCarousel').carousel({
                interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length-1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
              $('#carousel-text').html($('#slide-content-'+id).html());
        });
</script>