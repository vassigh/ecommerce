<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-12 02:22:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantite_demandee ~ APPPATH/classes/Controller/Ajaxcart.php [ 29 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 02:22:00 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 29, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 02:45:31 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
                                    order by produits.id asc' at line 2 ~ APPPATH/classes/Helper/Database.php [ 23 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 02:45:31 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(23): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(22): Helper_Database->query('?              ...')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(37): Model_Panier->getPanier(Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 04:39:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 59 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:39:27 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 59, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:40:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 59 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:40:39 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 59, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:45:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 61 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:45:39 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 61, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 61 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:55 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 61, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 61 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:56 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 61, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 61 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:57 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 61, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 61 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:48:58 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 61, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:49:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 61 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:49:59 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 61, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:61
2014-12-12 04:50:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantite_demandee ~ APPPATH/classes/Controller/Ajaxcart.php [ 29 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 04:50:44 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 29, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 04:50:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 59 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:50:55 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 59, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:52:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantite_demandee ~ APPPATH/classes/Controller/Ajaxcart.php [ 29 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 04:52:00 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 29, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 04:52:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: tab ~ APPPATH/classes/Controller/Ajaxcart.php [ 59 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:52:44 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 59, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:59
2014-12-12 04:56:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantite_demandee ~ APPPATH/classes/Controller/Ajaxcart.php [ 29 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 04:56:58 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 29, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 05:02:57 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
                                    order by produits.id asc' at line 2 ~ APPPATH/classes/Helper/Database.php [ 23 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:02:57 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(23): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(22): Helper_Database->query('?              ...')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(37): Model_Panier->getPanier(Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:03:26 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
                                    order by produits.id asc' at line 2 ~ APPPATH/classes/Helper/Database.php [ 23 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:03:26 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(23): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(22): Helper_Database->query('?              ...')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(37): Model_Panier->getPanier(Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:06:25 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
                                    order by produits.id asc' at line 2 ~ APPPATH/classes/Helper/Database.php [ 23 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:06:25 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(23): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(22): Helper_Database->query('?              ...')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(37): Model_Panier->getPanier(Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:10:05 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
                                    order by produits.id asc' at line 2 ~ APPPATH/classes/Helper/Database.php [ 23 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:10:05 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(23): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(22): Helper_Database->query('?              ...')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(40): Model_Panier->getPanier(Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:23
2014-12-12 05:27:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Ajaxcart.php [ 54 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:54
2014-12-12 05:27:56 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap22/sit...', 54, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_soustraire()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:54
2014-12-12 05:28:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantite_demandee ~ APPPATH/classes/Controller/Ajaxcart.php [ 29 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 05:28:54 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 29, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Ajaxcart.php:29
2014-12-12 09:07:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: transaction ~ APPPATH/classes/Controller/Panier.php [ 113 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:113
2014-12-12 09:07:17 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 113, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:113