/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */

$(document).ready(function(){

/*for home_about_services */
var $menu_button = $('.menu_button'),
	$mySidenav = $('#mySidenav'),
	$main = $('#main'),
	$home_website=$('#home-website'),
	$about_website=$('#about-website'),
	$services_website=$('#services-website'),
	$home_block=$('#home-block'),
	$about_block=$('#about-block'),
	$services_block=$('#services-block');
  $close_button=$('#close_button');

/*for register_login_forgetpass */
var $modal =$('#register_login_forgetpass_modal'),
	$register_signin = $('#register-signin'),//button in the menu (principale)
	$registersignin_list=$('#registersignin_list'),
	$register=$('#register'),
	$login=$('#login'),
	$forget_pass=$('#forget_pass'),
	$register_button=$(".register_button"),
	$forget_pass_button=$(".forget_pass_button"),
	$login_button=$(".login_button");

/*every menu_item have same index as his block_item to make correspond eazy*/
var $menu_items =[$home_website, $about_website, $services_website];
var $block_items =[$home_block, $about_block, $services_block];

/*nav open close buttons*/

$menu_button.click(function(e){
  opencloseNav();
});
$close_button.click(function(e){
  opencloseNav();
});
//if the nav was open the button will close it if not it will open it
function opencloseNav() {
if($mySidenav.css('width')=="0px"){
  $mySidenav.css('width','250px');
  $main.css('marginLeft','250px');
  $('body').css('backgroundColor' ,'rgba(0,0,0,0.4)');
  }
else{
  $mySidenav.css('width','0');
  $main.css('marginLeft','0');
  $('body').css('backgroundColor' ,'white');
  }
}

/*nav showing correspond blocks when click on the nav(menu) items*/

//boucle on the menu_item
$menu_items.forEach(
	eventlisten
	);
//giving the correspond block of the button clicked
function eventlisten(item, index) {
  item.click(function(e){
    var $block_item_correspond=$block_items[index];
    goonsection(item,$block_item_correspond);
	});
}
//css(display+color+ ..) the button clicked and displaying the correspond block 
function goonsection(sectionitem,block) {
		//make other blocks hidden
		$block_items.forEach(
			function(item, index){
    			if(item != block){
    				item.css('display','none');
    			}
			}
		);	
		//black bakcround color for other menu items
		$menu_items.forEach(
			function(item, index){
    			if(item != sectionitem){
    				item.css('background', '#111');
    			}
			}
		);	
    //color for the nav item clicked
		sectionitem.css('background', '#55ACEE');	
		//show the curent clicked correspond to the button clicked
		block.css({
						  'display':'block',
						  'position': 'absolute',
  						'top': '20px',
  						'left': '0',
              'color': 'white',
  						'padding-left': '20px',
  						'padding-right': '20px',
  						'font-family': 'Arial, Helvetica, sans-serif',
  						'font-size': 'large'});
}

/*for register_login_forgetpass*/
//display modal
$register_signin.click(function(e) {
  $modal.css('display','block');
  console.log("displayed");
});
//register only display
 $register_button.click(function(e) {
    $register.css('display','block');
    $login.css('display','none');
    $forget_pass.css('display','none');
});
//login only display
 $login_button.click(function(e) {
    $login.css('display','block');
    $register.css('display','none');
    $forget_pass.css('display','none');
});
//forget_pass only display
 $forget_pass_button.click(function(e) {
    $forget_pass.css('display','block');
    $login.css('display','none');
    $register.css('display','none'); 
});
// When the user clicks anywhere outside of the modal, close it //////////// not working ?
window.onclick = function(event) {
  if (event.target == $modal) {
    $modal.style.display = "none";
  }
}


});




