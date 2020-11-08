$(document).ready(function(){


var $event_infos=$('#event_infos'),
    $pagination=$('#pagination');
/*for notification*/
var $notification_block = $('#notification_block'),
	$notification_button = $('#notification_button');

/*nav items*/
//display
var $modal =$('#id01'),
  $modal_content=$('#sittings_block'),
  
  $userlist_item=$('.userlist_item'),
  $userdemands_item=$('.userdemands_item'),
  $eventdemands_item=$('.eventdemands_item'),
  $reports_item=$('.reports_item'),

  $sittings_item=$('.sittings'),
  
  $users_table=$('.users_table'),
  $userdemands_table=$('.userdemands_table'),
  $eventdemands_table=$('.eventdemands_table'),
  $reports_table=$('.reports_table');

//making items corespond to block without sitting bcs its doesnt need to remove page content( it will be siplay front of him)
var $menu_items =[$userlist_item, $userdemands_item, $eventdemands_item, $reports_item];
var $block_items =[$users_table, $userdemands_table, $eventdemands_table, $reports_table];

//traitement sittings
var $editname_button =$('.editname_button'),
  $editpassword_button=$('.editpassword_button'),
  $editemail_button=$('.editemail_button'),
  
  $name_block=$('.name_block'),
  $password_block=$('.password_block'),
  $email_block=$('.email_block'),
  
  $editname_block=$('.editname_block'),
  $editpassword_block=$('.editpassword_block'),
  $editemail_block=$('.editemail_block'),
  
  $cancel_name=$('.cancel_name'),
  $cancel_password=$('.cancel_password'),
  $cancel_email=$('.cancel_email');

//making buttons coresponds to theire blocks in list with same index for sittings
var $editbuttons_list=[$editname_button,$editpassword_button,$editemail_button];
  $editblock_list=[$editname_block,$editpassword_block,$editemail_block];
  $block_list=[$name_block,$password_block,$email_block];
  $cancelbuttons_list=[$cancel_name,$cancel_password,$cancel_email];

/*event infos*/
var $participation = $('.participation'),
	$participation_icon = $('.participation_icon');

var $more_text = $('#more_text'),
	$dots = $('#dots'),
	$showmoreless_button = $('#showmoreless_button');

var $comments = $('.comments'),
	$comments_block = $('.comments_block');

var $report_button=$('.report_button'),
	$reportevent_block=$('#reportevent_block');



/*notifacation display */

$notification_button.click(function(e) {
  if($notification_block.css('display')=="block"){
    $notification_block.css('display','none');
    }
  else{
    if($notification_block.css('display')=="none"){
      $notification_block.css('display','block');
      }
  } 
});

/* to see : a fct to delate notification_block if click other place
$(window).click(function(e) {
  if($notification_block.css('display')=="block"){
    if (e.target != $notification_block) {
        $notification_block.css('display','none');
      }
    }
});
*/

/*nav items*/
//display block depend on button clicked
$menu_items.forEach(
  eventlisten2
  );
//block corespond to every button
function eventlisten2(item, index) {
  item.click(function(e){
    var $block_item_correspond=$block_items[index];
    goonsection2(item,$block_item_correspond);
  });
}
//display section when button corespond clicked and make other section invisible ..
function goonsection2(sectionitem,block) {
  console.log("fromsectiontoanother entred !!!" );
    //make other blocks hidden and (((events too
    $block_items.forEach(
      function(item, index){
          if(item != block){
            item.css('display','none');
          }
      }
    );  
    //events too and change pagination ( for now we will delete paginatio too)
    $event_infos.css('display','none');
    $pagination.css('display','none');
    //black bakcround color for other menu items
    $menu_items.forEach(
      function(item, index){
          if(item != sectionitem){
            item.css('background', '#111');
          }
      }
    );  
    sectionitem.css('background', '#55ACEE'); 
    //show th curent clicked block
    block.css({
            'display':'block',
            });
}

//display sittings block
$sittings_item.click(function(e) {
  $modal.css('display','block');
});
//traitement for sittings part
$editbuttons_list.forEach(
  eventlisten
  );
//block corespond for evry sittings button
function eventlisten(item, index) {
  item.click(function(e){
    var $editblock_item_correspond=$editblock_list[index],
      $block_item_correspond=$block_list[index]
      goonsection($block_item_correspond,$editblock_item_correspond);

  });
}
//go on section corespond to the button clicked
function goonsection(block,editblock) {
  console.log("fromsectiontoanother entred !!!" );
      if(editblock.css('display')=="none"){
        editblock.css('display','block');
        block.css('display','none');
      }
}
//display=non when cancels button are clicked 
$cancelbuttons_list.forEach(
  eventlisten1
  );
//correspond block for every cancel button
function eventlisten1(item, index) {
  item.click(function(e){
    event.preventDefault()
    var $editblock_item_correspond=$editblock_list[index],
      $block_item_correspond=$block_list[index]
      goonsection1($block_item_correspond,$editblock_item_correspond);
  });
}
//display=none fro the block corespond to the cancel button clicked
function goonsection1(block,editblock) {
  console.log("cancel sss" );
    
      if(block.css('display')=="none"){
        block.css('display','block');
        editblock.css('display','none');
      }
    }


/*event infos*/
//making everyflow when the content big then ecran size 
if($modal_content.height()<=400){

  $modal_content.css('overflow','hidden');
}
else{
  console.log("wtff");
}
//display report form
$report_button.click(function(e) {
  if ($reportevent_block.css('display') == "none") {
      $reportevent_block.css('display', 'block');
    } else {
      $reportevent_block.css('display', 'none');
    }
});
//like dislike button : participation button
$participation.click(function(e) {
	$participation_icon.toggleClass("fa-thumbs-down");
});
//show more text(description) button
$showmoreless_button.click(function(e) {
	if ($dots.css('display') == "none") {
    	$dots.css('display', 'inline');
    	$showmoreless_button.html("Read more");
    	$more_text.css('display', 'none');
  	} else {
    	$dots.css('display', 'none');
    	$showmoreless_button.html("Read less");
    	$more_text.css('display', 'inline');
  	}
});
//display comments
$comments.click(function(e) {
  if($comments_block.css('display')=="block"){
  	$comments_block.css('display','none');
  	$comments.css('background-color', '#555');
  	$comments.html("button to show comments");
  	}
  else{
  	if($comments_block.css('display')=="none"){
		$comments_block.css('display','block');
		$comments.css('background-color', '#55ACEE');
		$comments.html("click if you cant hide coms");		
  		}
 	}	
});


});