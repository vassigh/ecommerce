<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-08 02:39:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH/classes/Model/panier.php [ 34 ] in file:line
2014-12-08 02:39:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 02:39:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH/classes/Model/panier.php [ 34 ] in file:line
2014-12-08 02:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 02:40:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE) ~ APPPATH/classes/Model/panier.php [ 35 ] in file:line
2014-12-08 02:40:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 02:40:57 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 39 ] in file:line
2014-12-08 02:40:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap22/sit...', 39, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(39): PDOStatement->execute(Array)
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(35): Helper_Database->execute('insert into com...', Array)
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(48): Model_Panier->insert_update_Commande_produits('4')
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-08 02:41:36 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 39 ] in file:line
2014-12-08 02:41:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap22/sit...', 39, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(39): PDOStatement->execute(Array)
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(35): Helper_Database->execute('insert into com...', Array)
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(48): Model_Panier->insert_update_Commande_produits('5')
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-08 02:43:49 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 39 ] in file:line
2014-12-08 02:43:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap22/sit...', 39, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(39): PDOStatement->execute(Array)
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(35): Helper_Database->execute('insert into com...', Array)
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(48): Model_Panier->insert_update_Commande_produits('6')
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-08 02:45:34 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.commande_produits' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 39 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-08 02:45:34 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(39): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(35): Helper_Database->execute('insert into com...', Array)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(48): Model_Panier->insert_update_Commande_produits('7')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-08 02:56:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_commande ~ APPPATH/classes/Controller/Panier.php [ 46 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:46
2014-12-08 02:56:41 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 46, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:46
2014-12-08 02:59:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/classes/Controller/Panier.php [ 49 ] in file:line
2014-12-08 02:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 03:01:37 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 03:01:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 03:02:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:32
2014-12-08 03:02:59 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:32
2014-12-08 03:03:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:32
2014-12-08 03:03:26 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:32
2014-12-08 03:06:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 43 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:43
2014-12-08 03:06:51 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 43, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:43
2014-12-08 03:15:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: panier ~ APPPATH/classes/Model/panier.php [ 37 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:37
2014-12-08 03:15:58 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 37, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(47): Model_Panier->insert_update_Commande_produits('11')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:37
2014-12-08 03:31:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ON' (T_STRING) ~ APPPATH/classes/Model/panier.php [ 38 ] in file:line
2014-12-08 03:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 03:31:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ON' (T_STRING) ~ APPPATH/classes/Model/panier.php [ 38 ] in file:line
2014-12-08 03:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 03:32:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ON' (T_STRING) ~ APPPATH/classes/Model/panier.php [ 37 ] in file:line
2014-12-08 03:32:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 03:34:14 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '+=1' at line 2 ~ APPPATH/classes/Helper/Database.php [ 39 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-08 03:34:14 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(39): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(40): Helper_Database->execute('insert into com...', Array)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(47): Model_Panier->insert_update_Commande_produits('14', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-08 03:34:55 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*2' at line 2 ~ APPPATH/classes/Helper/Database.php [ 39 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-08 03:34:55 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(39): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(40): Helper_Database->execute('insert into com...', Array)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(47): Model_Panier->insert_update_Commande_produits('15', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-08 03:42:22 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 03:42:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 03:51:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 44 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:44
2014-12-08 03:51:06 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 44, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:44
2014-12-08 04:00:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 43 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:43
2014-12-08 04:00:22 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 43, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:43
2014-12-08 04:39:13 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 04:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 04:49:10 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 04:49:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 04:49:42 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 04:49:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 04:49:45 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 04:49:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:09:50 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:09:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:10:55 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:11:12 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:11:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(43): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:12:17 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:13:15 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:13:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:14:27 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:14:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:14:42 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:15:32 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 05:15:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:32:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!=' (T_IS_NOT_EQUAL) ~ APPPATH/classes/Controller/Produit.php [ 19 ] in file:line
2014-12-08 05:32:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 05:32:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '!=' (T_IS_NOT_EQUAL) ~ APPPATH/classes/Controller/Produit.php [ 19 ] in file:line
2014-12-08 05:32:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 05:55:39 --- EMERGENCY: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH/classes/Controller/Panier.php [ 30 ] in file:line
2014-12-08 05:55:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', '/home/wap22/sit...', 30, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(30): session_start()
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(22): Controller_Panier->action_view_panier()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 05:56:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: panier ~ APPPATH/classes/Controller/Panier.php [ 33 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:33
2014-12-08 05:56:00 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 33, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(22): Controller_Panier->action_view_panier()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:33
2014-12-08 05:57:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: panier ~ APPPATH/classes/Controller/Panier.php [ 33 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:33
2014-12-08 05:57:04 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 33, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(22): Controller_Panier->action_view_panier()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:33
2014-12-08 06:02:56 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Panier::action_view_panier(), called in /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Panier.php [ 28 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:02:56 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(28): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 28, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:03:48 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Panier::action_view_panier(), called in /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Panier.php [ 28 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:03:48 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(28): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 28, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:04:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Panier::action_view_panier(), called in /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Panier.php [ 28 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:04:22 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(28): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 28, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:04:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Panier::action_view_panier(), called in /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Panier.php [ 28 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:04:23 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(28): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 28, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:28
2014-12-08 06:04:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Panier.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:32
2014-12-08 06:04:39 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:32
2014-12-08 06:18:06 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:18:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(60): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 06:18:06 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:18:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(60): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 06:29:55 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:29:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(60): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 06:29:59 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:29:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(49): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 06:33:22 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:33:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(53): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 06:41:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: panier ~ APPPATH/classes/Controller/Panier.php [ 59 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:59
2014-12-08 06:41:14 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 59, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:59
2014-12-08 06:41:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: panier ~ APPPATH/classes/Controller/Panier.php [ 59 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:59
2014-12-08 06:41:46 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 59, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:59
2014-12-08 06:49:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: panier ~ APPPATH/classes/Controller/Panier.php [ 59 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:59
2014-12-08 06:49:59 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 59, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:59
2014-12-08 06:50:06 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(55): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 06:50:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: commande_produit ~ APPPATH/views/achat.php [ 17 ] in /home/wap22/sites/ecommerce/application/views/achat.php:17
2014-12-08 06:50:28 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/achat.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 17, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(77): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/achat.php:17
2014-12-08 06:51:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: commande_produit ~ APPPATH/views/achat.php [ 17 ] in /home/wap22/sites/ecommerce/application/views/achat.php:17
2014-12-08 06:51:14 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/achat.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 17, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(77): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/achat.php:17
2014-12-08 06:51:55 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:51:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(74): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 06:53:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: panier ~ APPPATH/classes/Controller/Panier.php [ 76 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:76
2014-12-08 06:53:31 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 76, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:76
2014-12-08 06:55:10 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Model/panier.php [ 16 ] in file:line
2014-12-08 06:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/wap22/sit...', 16, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(16): implode(',', '')
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(74): Model_Panier->getPanier('')
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-08 08:40:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 55 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 08:40:49 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 55, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 08:44:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 55 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 08:44:27 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 55, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 09:02:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 55 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 09:02:45 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 55, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 09:02:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: panier ~ APPPATH/classes/Controller/Panier.php [ 55 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 09:02:46 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 55, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:55
2014-12-08 09:19:05 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:19:05 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('4')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:24:48 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:24:48 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('4')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:25:23 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:25:23 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('4')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:25:42 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:25:42 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('4')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:26:52 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:26:52 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('5')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:27:27 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:27:27 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('5')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:36:59 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:36:59 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('7')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:43:56 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH/classes/Model/panier.php [ 27 ] in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 09:43:56 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(27): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap22/sit...', 27, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(57): Model_Panier->insertCommande('7')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/panier.php:27
2014-12-08 10:10:00 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 31 ] in file:line
2014-12-08 10:10:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap22/sit...', 31, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(31): PDOStatement->execute(Array)
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(58): Helper_Database->queryOne('select * from u...', Array)
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(76): Model_Panier->getUser(Array)
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-08 10:11:22 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 31 ] in file:line
2014-12-08 10:11:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap22/sit...', 31, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(31): PDOStatement->execute(Array)
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(59): Helper_Database->queryOne('select * from u...', Array)
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(76): Model_Panier->getUser(Array)
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-08 10:12:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id] ~ APPPATH/classes/Controller/Panier.php [ 76 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:76
2014-12-08 10:12:08 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 76, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:76
2014-12-08 10:12:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/achat.php [ 14 ] in /home/wap22/sites/ecommerce/application/views/achat.php:14
2014-12-08 10:12:42 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/achat.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 14, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(79): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/achat.php:14
2014-12-08 10:15:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/achat.php [ 14 ] in /home/wap22/sites/ecommerce/application/views/achat.php:14
2014-12-08 10:15:01 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/achat.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 14, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(79): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/achat.php:14
2014-12-08 10:15:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/achat.php [ 14 ] in /home/wap22/sites/ecommerce/application/views/achat.php:14
2014-12-08 10:15:51 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/achat.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 14, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(79): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/achat.php:14
2014-12-08 10:23:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/achat.php [ 18 ] in file:line
2014-12-08 10:23:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 10:23:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/achat.php [ 18 ] in file:line
2014-12-08 10:23:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 10:25:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/achat.php [ 18 ] in file:line
2014-12-08 10:25:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 10:25:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/achat.php [ 18 ] in file:line
2014-12-08 10:25:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 10:26:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/achat.php [ 18 ] in file:line
2014-12-08 10:26:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-08 10:31:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/achat.php [ 21 ] in file:line
2014-12-08 10:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line