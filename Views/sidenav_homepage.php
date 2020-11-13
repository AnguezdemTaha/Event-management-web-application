<!-- this is sid nav fo rall pages  var -->
<div id="mySidenav" class="sidenav">
  
  <a href="javascript:void(0)" id="close_button" >&times;</a>
  <br>
  
  <?php if($_SESSION['user_type'] == null){ ?>
  <a id="home-website" class="home-website" href="#">Home</a>
  <a id="about-website" class="about-website" href="#">About</a>
  <a id="services-website" class="services-website" href="#">Services</a>  
  <?php } ?>
  <!--side nav for eventpage -->
  <!--double select -->
  <ul class="listinfo_Website">
    <li>
      <select name="pets" id="pet-select">
        <option value="">--choix double--</option>
        <option value="dog">place</option>
        <option value="cat">type</option>
        <option value="hamster">organisator</option>
      </select>
    </li>
  </ul>
  <!--php to distaing btw admin user manager_event -->
  <a id="all_events" href="#">All Evnets</a>
  
<?php if($_SESSION['user_type'] == "Student"){ ?>
  <a id="events_participed" href="#">Events participé</a>
<?php } ?>

<?php if($_SESSION['user_type'] == "Club"){ ?>
  <a id="myevents" href="#">My Events</a>
<?php } ?>

<?php if($_SESSION['user_type'] == "Admin"){ ?>
  <a class="userlist_item" href="#">users list</a>
  <a class="userdemands_item" href="#">demendes list</a>
  <a class="eventdemands_item" href="#">Event to approve</a>
  <a class="reports_item" href="#">reports</a>
<?php } ?>
  
  <a class="services-website1 sittings" href="#">sittings</a>

  
  
  <a class="services-website" href="#">log out</a>
</div>