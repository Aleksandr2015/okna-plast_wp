<?php

///Security Hooks///

	//Отключение сообщений об ошибках авторизации
	add_filter('login_errors',create_function('$a', "return null;"));
	//No display WordPress version in header
	remove_action('wp_head','wp_generator');

//Отключение сообщений о необходимости обновится
if( !current_user_can( 'edit_users' ) ){
	add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
	add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
	// для 3.0+
	add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
  
}

//Удаление из верхней панели :
//    function my_admin_bar_render() {
//      global $wp_admin_bar;      
//      $wp_admin_bar->remove_menu('my-account');    // мой аккаунт
//      $wp_admin_bar->remove_menu('search'); // поиск            
//      $wp_admin_bar->remove_menu('new-content'); // новый контент
//    }
//    add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );

//Если пользователь не администратор, скрыть следующее
add_action( 'admin_init', 'my_remove_menu_pages' );
 
function my_remove_menu_pages() {
	// Если пользователь не имеет прав на доавление пользователей
	if (!current_user_can('add_users')) {
    
//    //Удаление из верхней панели кнопки пунктов
//    function my_admin_bar_render() {
//      global $wp_admin_bar;
//      $wp_admin_bar->remove_menu('wp-logo'); // логотип
//      $wp_admin_bar->remove_menu('comments'); // комментарии
//      $wp_admin_bar->remove_menu('updates'); // обновления
//      $wp_admin_bar->remove_menu('new-content'); // доавить
//      $wp_admin_bar->remove_menu('site-name'); // имя сайта
//      $wp_admin_bar->remove_menu('search'); // поиск
//      $wp_admin_bar->remove_menu('my-account'); //мой аккаунт    
//    }
//    add_action( 'wp_before_admin_bar_render', 'my_admin_bar_render' );
    
    // Скрываем левую панель в админке
    function my_remove_adminmenu(){
      global $menu;
      $menu = array();  // Очищаем массив с пунктами меню
      // скрываем панль
      echo "
        <style type='text/css'>
        #adminbarsearch, /* поиск */
        #adminmenuwrap, /* меню */
        #adminmenuback,
        #pageparentdiv,
        #delete-action,
        #minor-publishing,
        #screen-options-link-wrap,
        #contextual-help-link-wrap,
        #wpbody .wrap>h2,
        #post-body-content
        { display:none!important; } 
        #publishing-action, #publishing-action input[type=submit] { width:100%; }         
        
        #wpcontent{margin-left:10px!important;}</style>";
    }
    add_action('admin_head', 'my_remove_adminmenu');    

	}
}

//добавление кнопки Выход в верхнюю панель
function admin_bar_logout( $wp_admin_bar ) {
    if ( is_user_logged_in() ) {
        $wp_admin_bar->add_menu(
            array(
                'id'     => 'my-log-out',
                'parent' => 'top-secondary',
                'title'  => __( 'Log out' ),
                'href'   => wp_logout_url(),
            )
        );
    }
}
add_action( 'admin_bar_menu', 'admin_bar_logout', 100 );

//Изменяем шрифт HTML редактора
function htm_change_editor_font(){
	echo "<style type='text/css'>
		#wp-content-editor-container textarea#content {
			font-family: Verdana;
			font-size: 14px;
			color: #333333;
		}
	</style>";
}
add_action('admin_print_styles', 'htm_change_editor_font');

//скрываем ненужные пункты меню для всех
//function remove_menus(){
//  remove_menu_page( 'index.php' );                  //Консоль
//  remove_menu_page( 'edit.php' );                   //Записи
//  remove_menu_page( 'upload.php' );                 //Медиафайлы
////  remove_menu_page( 'edit.php?post_type=page' );    //Страницы
////  remove_menu_page( 'edit-comments.php' );          //Комментарии
////  remove_menu_page( 'themes.php' );                 //Внешний вид
////  remove_menu_page( 'plugins.php' );                //Плагины
////  remove_menu_page( 'users.php' );                  //Пользователи
//  remove_menu_page( 'tools.php' );                  //Инструменты
////  remove_menu_page( 'options-general.php' );        //Настройки
//}
//add_action( 'admin_menu', 'remove_menus' );

// Замена стандартного логотипа WP при входе на фирменный
function custom_login_logo() {
    echo '
    <style type="text/css">
        h1 a { 
          background-image:url('.get_bloginfo('template_directory').'/img/fig-0.png) !important; 
          width: 200px !important;
          height: 200px !important;
          background-size: 200px !important;
        }
    </style>';
}
add_action('login_head', 'custom_login_logo');

//Редирект на главную страницу после входа в админку WordPress:
function custom_admin_default_page() {  
  return home_url();
}
add_filter('login_redirect', 'custom_admin_default_page');

//Редирект на главную страницу после выхода из админки WordPress:
function custom_loginout_default_page($logout_url, $redirect) {
  $go_to_url = home_url();
  if ( empty($redirect) )
    $logout_url = add_query_arg('redirect_to', urlencode($go_to_url), $logout_url);
  return $logout_url;
}
add_filter('logout_url', 'custom_loginout_default_page', 10, 2);



#все новые функции писать до этого комментария
	
?>