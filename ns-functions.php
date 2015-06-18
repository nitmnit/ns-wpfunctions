function ns_get_category_posts($id){
  if(!isset($id) && !isset($slug) && !isset($name)){
    return false;
  }
  
  if(isset($id)){
    query_posts('cat='.$id[id]);
    echo '<ul id="ns-cat'. $id['id'] .'">';
    while(have_posts()) : the_post();
    the_content();
    endwhile;
    wp_reset_query();
  }
   echo '</ul>';
}
 
add_shortcode('ns_posts', 'ns_get_category_posts');

function get_current_users_role(){
  global $current_user;
  $user_roles = $current_user->roles;
  $user_role = array_shift($user_roles);
  return $user_role;
}
