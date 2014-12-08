<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-07 03:10:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Panier.php [ 16 ] in file:line
2014-12-07 03:10:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-07 03:11:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id] ~ APPPATH\classes\Controller\Panier.php [ 16 ] in C:\wamp\www\ecommerce\application\classes\Controller\Panier.php:16
2014-12-07 03:11:34 --- DEBUG: #0 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_ajouter()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\ecommerce\application\classes\Controller\Panier.php:16
2014-12-07 04:16:09 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 04:16:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(43): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 04:19:00 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 04:19:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(43): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 04:19:30 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 04:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(43): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 04:20:58 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 04:20:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(43): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 04:21:14 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 04:21:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(32): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 05:07:46 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 05:07:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(43): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 05:07:53 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 05:07:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(32): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 05:11:18 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 05:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(32): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 05:12:01 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 05:12:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(32): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 05:12:21 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 05:12:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(32): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 05:12:56 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 05:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(32): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 05:13:59 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-07 05:13:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', '')
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(32): Model_Panier->getPanier('')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-07 12:47:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Helper\Database.php [ 39 ] in file:line
2014-12-07 12:47:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\eco...', 39, Array)
#1 C:\wamp\www\ecommerce\application\classes\Helper\Database.php(39): PDOStatement->execute(Array)
#2 C:\wamp\www\ecommerce\application\classes\Model\panier.php(28): Helper_Database->execute('insert into com...', Array)
#3 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(45): Model_Panier->insertCommande(Array)
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_achat()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-07 12:50:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id] ~ APPPATH\classes\Model\panier.php [ 28 ] in C:\wamp\www\ecommerce\application\classes\Model\panier.php:28
2014-12-07 12:50:36 --- DEBUG: #0 C:\wamp\www\ecommerce\application\classes\Model\panier.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 28, Array)
#1 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(45): Model_Panier->insertCommande(Array)
#2 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\ecommerce\application\classes\Model\panier.php:28