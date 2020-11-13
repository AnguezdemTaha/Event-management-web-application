
<?php if($events != null){ 
  foreach ($events as $event) { ?>
  


<div id="event_infos" class="flip-card">
<div class="flip-card-inner">
<!--front of our event card -->
<div class="flip-card-front">
  <div class="col-md-10 col-lg-10 col-lg-push-2 cardevent_block">
    <div class="row">

      <div class="col-md-4 col-lg-4">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <p>title : <?php echo $event["event_name"]?></p>
          </div>
          <div class="col-md-6 col-lg-6">
            <!--prob :inline -->
            <p class="eventblock_text">ev :</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div>
        </div>
        <div class="row">
          <img class="event_image" src="backround_img1.jpg" alt="Italian Trulli">
        </div>
        <div class="row">
          <p>date :</p>
        </div>
        <div class="row">
          <p>your rating: stars </p>
          <!-- very wrong its need alot of improve -->
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span> 
          <label for="input-1" class="control-label">One star:</label>
          <input id="input-1" name="input-1" class="rating rating-loading" value="1" data-min="0" data-max="5" data-step="0.5" data-size="xs">
        </div>
      </div>

      <div class="col-md-8 col-lg-8">
        <div class="row">
          <div class="col-md-10 col-lg-10">
            <p>somthing :</p>
          </div>
          <div class="col-md-1 col-lg-1 col-lg-push-1">
            <button  type="button" class="btn btn-success report_button" >
              <div class="menu-icon"></div>
              <div class="menu-icon"></div>
              <div class="menu-icon"></div>
            </button>
          </div>
          <div  id= "reportevent_block" class="reportevent_block">
            <li><a class="home-website" href="#">N1: report1</a></li>
            <li><a class="about-website" href="#">N2: report2</a></li>
            <li><a class="services-website" href="#">N3: report3</a></li>
          </div>
        </div>
        <div class="row">
          <p>somthing :</p>
        </div>
        <div class="row">
          <p>somthing :</p>
        </div>
        <div class="row">
          <p>somthing :</p>
        </div>
        <div class="row">
          <p>somthing :</p>
        </div>
        <div class="row">
          <p>alot of text here +showmore/less :</p>
          <!-- dots need to be dispplayed by js depend on text size -->
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more_text">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
          <button  id="showmoreless_button">Read more</button>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-4 col-lg-4">
        <a href="#" class="participation">
          <i  class="fa fa-thumbs-up participation_icon"></i>
          <span>your participation+icon (participation number)</span>
        </a>
      </div>
      <div class="col-md-4 col-lg-4">
        <a href="#" class="comments">
          <span>button to show comments</span>        
        </a>
      </div>
      <div class="col-md-4 col-lg-4">
        <a href="#" class="graphs"> 
          <span>button to show graphs/animated</span>         
        </a>
      </div>
    </div>

    <div class="row comments_block">
      <p> there is comments +show_less/more  this is an exemple here</p>
      <div class="usercomments">
        <div class="col-md-1 col-lg-">
          <p>img</p>
        </div>
        <div class="col-md-11 col-lg-11">
          <div class="row">
            <p>username</p>
          </div>
          <div class="row">
            <p>comment</p>
          </div>
        </div>
      </div>
      <div class="inputcomments">
        <div class="col-md-1 col-lg-">
          <p>img</p>
        </div>
        <div class="col-md-11 col-lg-11">
          <div class="row">
            <p>username</p>
          </div>
          <div class="row">
            <textarea id="w3review" name="w3review" rows="4" cols="100">
              At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
            </textarea>
          </div>
        </div>
      </div>   
    </div>
  </div>
</div>
<!--back of card-->
<div class="flip-card-back hide">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
</div>
</div>
</div>



<?php } }?>