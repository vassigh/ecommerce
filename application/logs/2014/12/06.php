<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-06 05:45:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '€' (T_STRING), expecting ',' or ';' ~ APPPATH\views\panier_commande.php [ 47 ] in file:line
2014-12-06 05:45:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 06:02:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Produit.php [ 18 ] in file:line
2014-12-06 06:02:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 06:10:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: commande_prix ~ APPPATH\views\panier_commande.php [ 38 ] in C:\wamp\www\ecommerce\application\views\panier_commande.php:38
2014-12-06 06:10:31 --- DEBUG: #0 C:\wamp\www\ecommerce\application\views\panier_commande.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 38, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\eco...')
#2 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\eco...', Array)
#3 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\ecommerce\application\views\panier_commande.php:38
2014-12-06 06:18:05 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\Model\panier.php [ 16 ] in file:line
2014-12-06 06:18:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\eco...', 16, Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\panier.php(16): implode(',', NULL)
#2 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(11): Model_Panier->getPanier(NULL)
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_ajouter()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-12-06 08:33:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admin.php [ 58 ] in file:line
2014-12-06 08:33:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-06 08:45:10 --- CRITICAL: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 Erreur de syntaxe près de 'quantite='' ean13='3' resume='11' where id = '1'' à la ligne 1 ~ APPPATH\classes\Helper\Database.php [ 39 ] in C:\wamp\www\ecommerce\application\classes\Helper\Database.php:39
2014-12-06 08:45:10 --- DEBUG: #0 C:\wamp\www\ecommerce\application\classes\Helper\Database.php(39): PDOStatement->execute(Array)
#1 C:\wamp\www\ecommerce\application\classes\Model\admin.php(37): Helper_Database->execute('update produits...', Array)
#2 C:\wamp\www\ecommerce\application\classes\Controller\Admin.php(86): Model_Admin->updateProduit('1', 'Eug\xC3\xA9nie Grande...', 'Honor\xC3\xA9 de Balz...', 'Gallimard', 'Roman', '2012-08-13', '10.5', '', '3', '11', 'sss')
#3 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Admin->action_modifier()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\ecommerce\application\classes\Helper\Database.php:39
2014-12-06 09:39:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: quantité ~ APPPATH\views\contenus.php [ 71 ] in C:\wamp\www\ecommerce\application\views\contenus.php:71
2014-12-06 09:39:24 --- DEBUG: #0 C:\wamp\www\ecommerce\application\views\contenus.php(71): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 71, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\eco...')
#2 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\eco...', Array)
#3 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\ecommerce\application\classes\Controller\Contenu.php(21): Kohana_Response->body(Object(View))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Contenu->action_contenus()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contenu))
#9 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\ecommerce\application\views\contenus.php:71
2014-12-06 17:21:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: commande_prix ~ APPPATH\views\panier_commande.php [ 38 ] in C:\wamp\www\ecommerce\application\views\panier_commande.php:38
2014-12-06 17:21:44 --- DEBUG: #0 C:\wamp\www\ecommerce\application\views\panier_commande.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 38, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\eco...')
#2 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\eco...', Array)
#3 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\ecommerce\application\views\panier_commande.php:38
2014-12-06 17:24:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: prix ~ APPPATH\views\panier_commande.php [ 42 ] in C:\wamp\www\ecommerce\application\views\panier_commande.php:42
2014-12-06 17:24:47 --- DEBUG: #0 C:\wamp\www\ecommerce\application\views\panier_commande.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 42, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\eco...')
#2 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\eco...', Array)
#3 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\ecommerce\application\views\panier_commande.php:42
2014-12-06 17:34:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: commande_prix ~ APPPATH\views\panier_commande.php [ 38 ] in C:\wamp\www\ecommerce\application\views\panier_commande.php:38
2014-12-06 17:34:22 --- DEBUG: #0 C:\wamp\www\ecommerce\application\views\panier_commande.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\eco...', 38, Array)
#1 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(61): include('C:\\wamp\\www\\eco...')
#2 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\wamp\\www\\eco...', Array)
#3 C:\wamp\www\ecommerce\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\ecommerce\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\ecommerce\application\classes\Controller\Panier.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\ecommerce\system\classes\Kohana\Controller.php(84): Controller_Panier->action_commande()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#9 C:\wamp\www\ecommerce\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\ecommerce\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\ecommerce\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\ecommerce\application\views\panier_commande.php:38