<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-10 06:50:57 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant setItems - assumed 'setItems' ~ APPPATH/classes/Helper/Paypal.php [ 104 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php:104
2014-12-10 06:50:57 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php(104): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap22/sit...', 104, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(87): Helper_Paypal->send()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php:104
2014-12-10 06:57:16 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant itemList - assumed 'itemList' ~ APPPATH/classes/Helper/Paypal.php [ 104 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php:104
2014-12-10 06:57:16 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php(104): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap22/sit...', 104, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(87): Helper_Paypal->send()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php:104
2014-12-10 06:57:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: itemList ~ APPPATH/classes/Helper/Paypal.php [ 104 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php:104
2014-12-10 06:57:42 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 104, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(87): Helper_Paypal->send()
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Paypal.php:104
2014-12-10 07:41:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Panier.php [ 85 ] in file:line
2014-12-10 07:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 08:13:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Panier.php [ 89 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:89
2014-12-10 08:13:31 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 89, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:89
2014-12-10 09:44:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$paypal' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Panier.php [ 113 ] in file:line
2014-12-10 09:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line