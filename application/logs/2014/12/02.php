<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-02 03:20:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: produits ~ APPPATH/classes/Controller/Panier.php [ 10 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:10
2014-12-02 03:20:36 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 10, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:10
2014-12-02 03:23:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: paniers ~ APPPATH/classes/Controller/Panier.php [ 10 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:10
2014-12-02 03:23:08 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 10, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:10
2014-12-02 03:27:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: produit ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:27:42 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(13): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:36:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/panier.php [ 15 ] in file:line
2014-12-02 03:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 03:36:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/panier.php [ 15 ] in file:line
2014-12-02 03:36:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 03:36:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:36:53 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:37:17 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:37:17 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:38:07 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:38:07 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:39:11 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:39:11 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:39:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:39:41 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:40:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: toto ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:40:02 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:41:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:41:06 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:47:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:47:05 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:48:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nom ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:48:05 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:48:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: nom ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 03:48:53 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 04:12:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 04:12:35 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 04:12:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 04:12:44 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 04:17:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/produits.php [ 30 ] in file:line
2014-12-02 04:17:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:17:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/produits.php [ 30 ] in file:line
2014-12-02 04:17:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:22:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/panier.php [ 15 ] in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 04:22:28 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(14): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier.php:15
2014-12-02 04:25:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'id' (T_STRING), expecting ',' or ';' ~ APPPATH/views/produits.php [ 38 ] in file:line
2014-12-02 04:25:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:25:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'id' (T_STRING), expecting ',' or ';' ~ APPPATH/views/produits.php [ 38 ] in file:line
2014-12-02 04:25:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:33:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/panier.php [ 22 ] in file:line
2014-12-02 04:33:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:39:43 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/panier.php [ 22 ] in file:line
2014-12-02 04:39:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:40:09 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/panier.php [ 22 ] in file:line
2014-12-02 04:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:42:47 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/panier.php [ 22 ] in file:line
2014-12-02 04:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:42:54 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/panier.php [ 22 ] in file:line
2014-12-02 04:42:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 04:45:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 9 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:9
2014-12-02 04:45:58 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 9, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:9
2014-12-02 04:49:05 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Panier.php [ 15 ] in file:line
2014-12-02 04:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(15): array_push(NULL, '1')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-02 04:49:59 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Panier.php [ 15 ] in file:line
2014-12-02 04:49:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(15): array_push(NULL, '1')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-02 04:50:41 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Panier.php [ 15 ] in file:line
2014-12-02 04:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(15): array_push(NULL, '1')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-02 04:51:45 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Panier.php [ 15 ] in file:line
2014-12-02 04:51:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(15): array_push(NULL, '1')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-02 04:51:57 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Panier.php [ 15 ] in file:line
2014-12-02 04:51:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(15): array_push(NULL, '1')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-02 04:53:49 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/Controller/Panier.php [ 15 ] in file:line
2014-12-02 04:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(15): array_push(NULL, '1')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-02 05:45:20 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Helper_Database::query(), called in /home/wap22/sites/ecommerce/application/classes/Model/panier.php on line 26 and defined ~ APPPATH/classes/Helper/Database.php [ 20 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:20
2014-12-02 05:45:20 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(20): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 20, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(26): Helper_Database->query('select * from p...')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(20): Model_Panier->getPanier(Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:20
2014-12-02 09:20:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:20:58 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:22:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/produits.php [ 19 ] in file:line
2014-12-02 09:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-02 09:29:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:29:03 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:30:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:30:29 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:30:51 --- EMERGENCY: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH/views/produits.php [ 18 ] in file:line
2014-12-02 09:30:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/application/views/produits.php(18): session_start()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-02 09:33:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:33:44 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:36:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:36:22 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:37:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:37:05 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:39:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:39:15 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(20): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:45:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/views/produits.php [ 18 ] in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:45:24 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(86): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:18
2014-12-02 09:46:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: produit ~ APPPATH/views/produits.php [ 27 ] in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-02 09:46:22 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(87): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-02 09:46:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: produit ~ APPPATH/views/produits.php [ 27 ] in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-02 09:46:32 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(87): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-02 09:51:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: produit ~ APPPATH/views/produits.php [ 27 ] in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-02 09:51:15 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/User.php(86): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:27
2014-12-02 10:31:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Admin.php [ 12 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:12
2014-12-02 10:31:20 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 12, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:12
2014-12-02 10:31:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Admin.php [ 12 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:12
2014-12-02 10:31:32 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 12, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:12
2014-12-02 10:31:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Admin.php [ 12 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:12
2014-12-02 10:31:33 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 12, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:12
2014-12-02 10:31:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ad_produit ~ APPPATH/classes/Controller/Admin.php [ 14 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:14
2014-12-02 10:31:54 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 14, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:14
2014-12-02 16:42:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ad_produit ~ APPPATH\classes\Controller\Admin.php [ 32 ] in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:32
2014-12-02 16:42:28 --- DEBUG: #0 C:\wamp\www\ecommerce\application\classes\Controller\Admin.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\eco...', 32, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:32
2014-12-02 16:46:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date_edittion ~ APPPATH\classes\Controller\Admin.php [ 25 ] in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:25
2014-12-02 16:46:52 --- DEBUG: #0 C:\wamp\www\ecommerce\application\classes\Controller\Admin.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 25, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:25
2014-12-02 16:50:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date_edittion ~ APPPATH\classes\Controller\Admin.php [ 25 ] in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:25
2014-12-02 16:50:58 --- DEBUG: #0 C:\wamp\www\ecommerce\application\classes\Controller\Admin.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 25, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:25
2014-12-02 16:51:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: date_edition ~ APPPATH\classes\Controller\Admin.php [ 28 ] in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:28
2014-12-02 16:51:44 --- DEBUG: #0 C:\wamp\www\ecommerce\application\classes\Controller\Admin.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\eco...', 28, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\ecommerce\application\classes\Controller\Admin.php:28