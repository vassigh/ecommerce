<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-05 06:32:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH/views/produits.php [ 48 ] in /home/wap22/sites/ecommerce/application/views/produits.php:48
2014-12-05 06:32:30 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 48, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(34): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:48
2014-12-05 06:50:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH/classes/Controller/Produit.php [ 20 ] in file:line
2014-12-05 06:50:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 06:51:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Produit.php [ 21 ] in file:line
2014-12-05 06:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 06:52:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Produit.php [ 19 ] in file:line
2014-12-05 06:52:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 06:52:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Produit.php [ 22 ] in file:line
2014-12-05 06:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 07:10:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: categorie ~ APPPATH/classes/Controller/Produit.php [ 18 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:18
2014-12-05 07:10:37 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 18, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:18
2014-12-05 07:54:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: categorie ~ APPPATH/classes/Controller/Produit.php [ 19 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:19
2014-12-05 07:54:47 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 19, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:19
2014-12-05 08:07:54 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant selected - assumed 'selected' ~ APPPATH/views/produits.php [ 57 ] in /home/wap22/sites/ecommerce/application/views/produits.php:57
2014-12-05 08:07:54 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/produits.php(57): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap22/sit...', 57, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(43): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_produits()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/produits.php:57
2014-12-05 08:19:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH/classes/Controller/Produit.php [ 25 ] in file:line
2014-12-05 08:19:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 09:07:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: search ~ APPPATH/classes/Controller/Produit.php [ 19 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:19
2014-12-05 09:07:01 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 19, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:19
2014-12-05 09:07:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: search ~ APPPATH/classes/Controller/Produit.php [ 19 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:19
2014-12-05 09:07:07 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 19, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php:19
2014-12-05 09:09:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Produit.php [ 19 ] in file:line
2014-12-05 09:09:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 09:40:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$', expecting ')' ~ APPPATH/classes/Model/produit.php [ 35 ] in file:line
2014-12-05 09:40:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 09:41:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Model/produit.php [ 78 ] in file:line
2014-12-05 09:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-05 10:20:38 --- EMERGENCY: PDOException [ HY093 ]: SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens ~ APPPATH/classes/Helper/Database.php [ 23 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-05 10:20:38 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(23): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/produit.php(69): Helper_Database->query('select * from p...', Array)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(45): Model_Produit->getLatestProduits(4, 0, '', 'Manifeste')
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Produit.php(8): Controller_Produit->action_produits()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Produit->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Produit))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-05 11:02:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/views/panier_commande.php [ 47 ] in /home/wap22/sites/ecommerce/application/views/panier_commande.php:47
2014-12-05 11:02:02 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/panier_commande.php(47): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap22/sit...', 47, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(34): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/panier_commande.php:47