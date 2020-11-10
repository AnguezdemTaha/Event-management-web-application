$(document).ready(function(){

var $mySidenav = $('#mySidenav'),

	$userlist_item=$('.userlist_item'),
	$userdemands_item=$('.userdemands_item'),
	$eventdemands_item=$('.eventdemands_item'),
	$reports_item=$('.reports_item'),

	$users_table=$('.users_table'),
	$userdemands_table=$('.userdemands_table'),
	$eventdemands_table=$('.eventdemands_table'),
	$reports_table=$('.reports_table');



var $menu_items =[$userlist_item, $userdemands_item, $eventdemands_item, $reports_item];
var $block_items =[$users_table, $userdemands_table, $eventdemands_table, $reports_table];


$menu_items.forEach(//fct:
	eventlisten
	);

function eventlisten(item, index) {
  //document.getElementById("demo").innerHTML += index + ":" + item + "<br>";
  console.log("foreatc fct entred");
  item.click(function(e){
    console.log("item clicked just wowoowow");
    var $block_item_correspond=$block_items[index];
    goonsection(item,$block_item_correspond);

	});
}


function goonsection(sectionitem,block) {
	console.log("fromsectiontoanother entred !!!" );
		//make other blocks hidden
		$block_items.forEach(//fct:
			function(item, index){
    			if(item != block){
    				item.css('display','none');
    			}
			}
		);	
		//black bakcround color for other menu items
		$menu_items.forEach(//fct:
			function(item, index){
    			if(item != sectionitem){
    				item.css('background', '#111');
    			}
			}
		);	
		//after if we have more elements we can do a list better
		sectionitem.css('background', '#55ACEE');	
		//show th curent clicked block
		block.css({
						'display':'block',
						/*'position': 'absolute',
  						'top': '20px',
  						'left': '0',
  						
 						'color': 'white',
  						'padding-left': '20px',
  						'padding-right': '20px',
  						
  						'font-family': 'Arial, Helvetica, sans-serif',
  						'font-size': 'large'*/
  					});
}




});