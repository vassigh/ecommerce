<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-01 03:12:58 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php:67
2014-12-01 03:12:58 --- DEBUG: #0 /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ga', NULL)
#1 /home/wap22/sites/icommerce/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ga')
#2 /home/wap22/sites/icommerce/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php:67
2014-12-01 03:13:19 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php:67
2014-12-01 03:13:19 --- DEBUG: #0 /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ga', NULL)
#1 /home/wap22/sites/icommerce/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ga')
#2 /home/wap22/sites/icommerce/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php:67
2014-12-01 03:13:32 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php:67
2014-12-01 03:13:32 --- DEBUG: #0 /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ga', NULL)
#1 /home/wap22/sites/icommerce/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ga')
#2 /home/wap22/sites/icommerce/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/wap22/sites/icommerce/system/classes/Kohana/Cookie.php:67
2014-12-01 03:14:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'cookie' not found ~ APPPATH/bootstrap.php [ 144 ] in file:line
2014-12-01 03:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 03:22:13 --- EMERGENCY: View_Exception [ 0 ]: The requested view /user/post could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap22/sites/icommerce/system/classes/Kohana/View.php:137
2014-12-01 03:22:13 --- DEBUG: #0 /home/wap22/sites/icommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/user/post')
#1 /home/wap22/sites/icommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('/user/post', NULL)
#2 /home/wap22/sites/icommerce/application/classes/Controller/Posts.php(17): Kohana_View::factory('/user/post')
#3 /home/wap22/sites/icommerce/application/classes/Controller/Posts.php(9): Controller_Posts->action_page()
#4 /home/wap22/sites/icommerce/system/classes/Kohana/Controller.php(84): Controller_Posts->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/icommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Posts))
#7 /home/wap22/sites/icommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/icommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/icommerce/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap22/sites/icommerce/system/classes/Kohana/View.php:137
2014-12-01 04:44:01 --- EMERGENCY: PDOException [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'icommerce' ~ APPPATH/classes/Helper/Database.php [ 14 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:14
2014-12-01 04:44:01 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(14): PDO->__construct('mysql:host=loca...', 'root', 'troiswa')
#1 /home/wap22/sites/ecommerce/application/classes/Model/user.php(8): Helper_Database->__construct()
#2 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(10): Model_User->__construct()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:14
2014-12-01 04:44:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view login.php could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 04:44:41 --- DEBUG: #0 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('login.php')
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('login.php', NULL)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(11): Kohana_View::factory('login.php')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 04:45:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: uuser ~ APPPATH/classes/Controller/User.php [ 15 ] in /home/wap22/sites/ecommerce/application/classes/Controller/User.php:15
2014-12-01 04:45:01 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/User.php:15
2014-12-01 05:29:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 41 ] in /home/wap22/sites/ecommerce/application/classes/Controller/User.php:41
2014-12-01 05:29:26 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 41, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/User.php:41
2014-12-01 05:40:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/User.php [ 39 ] in file:line
2014-12-01 05:40:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 05:41:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/User.php [ 39 ] in file:line
2014-12-01 05:41:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 05:42:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 35 ] in /home/wap22/sites/ecommerce/application/classes/Controller/User.php:35
2014-12-01 05:42:06 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 35, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/User.php:35
2014-12-01 05:47:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Post' not found ~ APPPATH/views/produits.php [ 3 ] in file:line
2014-12-01 05:47:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 05:48:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Post' not found ~ APPPATH/views/produits.php [ 3 ] in file:line
2014-12-01 05:48:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 05:57:56 --- EMERGENCY: ErrorException [ 2 ]: session_destroy(): Trying to destroy uninitialized session ~ APPPATH/classes/Controller/User.php [ 44 ] in file:line
2014-12-01 05:57:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'session_destroy...', '/home/wap22/sit...', 44, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(44): session_destroy()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-01 07:05:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view produits could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:05:54 --- DEBUG: #0 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('produits')
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('produits', NULL)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(10): Kohana_View::factory('produits')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:10:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view produits could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:10:55 --- DEBUG: #0 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('produits')
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('produits', NULL)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(10): Kohana_View::factory('produits')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:11:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view produits could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:11:33 --- DEBUG: #0 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('produits')
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('produits', NULL)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(10): Kohana_View::factory('produits')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:11:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view produits could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:11:56 --- DEBUG: #0 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('produits')
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('produits', NULL)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(10): Kohana_View::factory('produits')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:12:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/classes/Controller/Produit.php [ 13 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:13
2014-12-01 07:12:50 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 13, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:13
2014-12-01 07:30:13 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Produit as array ~ APPPATH/views/produits.php [ 16 ] in file:line
2014-12-01 07:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:32:55 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Produit as array ~ APPPATH/views/produits.php [ 16 ] in file:line
2014-12-01 07:32:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:33:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: produits ~ APPPATH/views/produits.php [ 16 ] in /home/wap22/sites/ecommerce/application/views/produits.php:16
2014-12-01 07:33:49 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:16
2014-12-01 07:34:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: produits ~ APPPATH/views/produits.php [ 16 ] in /home/wap22/sites/ecommerce/application/views/produits.php:16
2014-12-01 07:34:48 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:16
2014-12-01 07:36:42 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Produit.php [ 13 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:13
2014-12-01 07:36:42 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(13): Kohana_Core::error_handler(8, 'Array to string...', '/home/wap22/sit...', 13, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:13
2014-12-01 07:37:36 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Produit.php [ 13 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:13
2014-12-01 07:37:36 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(13): Kohana_Core::error_handler(8, 'Array to string...', '/home/wap22/sit...', 13, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:13
2014-12-01 09:23:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/produits.php [ 29 ] in /home/wap22/sites/ecommerce/application/views/produits.php:29
2014-12-01 09:23:34 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap22/sit...', 29, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(19): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:29
2014-12-01 09:29:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/produits.php [ 20 ] in /home/wap22/sites/ecommerce/application/views/produits.php:20
2014-12-01 09:29:10 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 20, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(19): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:20
2014-12-01 09:29:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/views/produits.php [ 20 ] in /home/wap22/sites/ecommerce/application/views/produits.php:20
2014-12-01 09:29:34 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 20, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(19): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:20
2014-12-01 09:33:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/views/produits.php [ 30 ] in file:line
2014-12-01 09:33:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 09:34:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: image ~ APPPATH/views/produits.php [ 27 ] in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-01 09:34:22 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(19): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-01 10:06:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/views/produits.php [ 37 ] in file:line
2014-12-01 10:06:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 16:45:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\produits.php [ 37 ] in file:line
2014-12-01 16:45:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 16:46:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function alert() ~ APPPATH\views\produits.php [ 37 ] in file:line
2014-12-01 16:46:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 16:47:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function alert() ~ APPPATH\views\produits.php [ 37 ] in file:line
2014-12-01 16:47:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line