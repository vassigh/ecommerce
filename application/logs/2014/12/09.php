<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-09 02:56:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH/classes/Model/panier.php [ 67 ] in file:line
2014-12-09 02:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 02:56:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Helper/Config.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 02:56:29 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Config.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(18): Helper_Config->get('host', 'mail')
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(10): Helper_Mail->__construct()
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(18): Model_Panier->__construct()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 02:57:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Helper/Config.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 02:57:30 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Config.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(18): Helper_Config->get('host', 'mail')
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(10): Helper_Mail->__construct()
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(18): Model_Panier->__construct()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_ajouter()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 03:02:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Helper/Config.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 03:02:59 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Config.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(18): Helper_Config->get('host', 'mail')
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(10): Helper_Mail->__construct()
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(26): Model_Panier->__construct()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 03:06:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Helper/Config.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 03:06:41 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Config.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(18): Helper_Config->get('host', 'mail')
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(10): Helper_Mail->__construct()
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(26): Model_Panier->__construct()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 03:06:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: mail ~ APPPATH/classes/Helper/Config.php [ 32 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 03:06:42 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Config.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 32, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(18): Helper_Config->get('host', 'mail')
#2 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(10): Helper_Mail->__construct()
#3 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(26): Model_Panier->__construct()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_panier()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Config.php:32
2014-12-09 03:23:42 --- EMERGENCY: Swift_TransportException [ 0 ]: Expected response code 250 but got code "535", with message "535-5.7.8 Username and Password not accepted. Learn more at
535 5.7.8 http://support.google.com/mail/bin/answer.py?answer=14257 hn2sm949527wjc.5 - gsmtp
" ~ APPPATH/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php [ 383 ] in /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php:281
2014-12-09 03:23:42 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(281): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('535-5.7.8 Usern...', Array)
#1 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(243): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET??', Array, Array)
#2 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php(54): Swift_Transport_EsmtpTransport->executeCommand('RSET??', Array)
#3 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php(176): Swift_Transport_Esmtp_Auth_XOAuth2Authenticator->authenticate(Object(Swift_SmtpTransport), 'chidan.vassigh@...', 'vach1950')
#4 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(307): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))
#5 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#6 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Mailer.php(79): Swift_Transport_AbstractSmtpTransport->start()
#7 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(45): Swift_Mailer->send(Object(Swift_Message))
#8 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(66): Helper_Mail->send('cvassigh@wanado...', 'titre', 'tata', false)
#9 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(78): Model_Panier->sendMail('cvassigh@wanado...', 'titre', 'tata', false)
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#13 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#16 {main} in /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php:281
2014-12-09 03:25:19 --- EMERGENCY: Swift_TransportException [ 0 ]: Expected response code 250 but got code "535", with message "535-5.7.8 Username and Password not accepted. Learn more at
535 5.7.8 http://support.google.com/mail/bin/answer.py?answer=14257 u1sm2199083wif.6 - gsmtp
" ~ APPPATH/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php [ 383 ] in /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php:281
2014-12-09 03:25:19 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(281): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('535-5.7.8 Usern...', Array)
#1 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(243): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET??', Array, Array)
#2 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php(54): Swift_Transport_EsmtpTransport->executeCommand('RSET??', Array)
#3 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php(176): Swift_Transport_Esmtp_Auth_XOAuth2Authenticator->authenticate(Object(Swift_SmtpTransport), 'chidan.vassigh@...', 'Vach1950')
#4 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(307): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))
#5 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#6 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Mailer.php(79): Swift_Transport_AbstractSmtpTransport->start()
#7 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(45): Swift_Mailer->send(Object(Swift_Message))
#8 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(66): Helper_Mail->send('cvassigh@wanado...', 'titre', 'tata', false)
#9 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(78): Model_Panier->sendMail('cvassigh@wanado...', 'titre', 'tata', false)
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#13 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#16 {main} in /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php:281
2014-12-09 03:25:29 --- EMERGENCY: Swift_TransportException [ 0 ]: Expected response code 250 but got code "535", with message "535-5.7.8 Username and Password not accepted. Learn more at
535 5.7.8 http://support.google.com/mail/bin/answer.py?answer=14257 t6sm902860wjf.49 - gsmtp
" ~ APPPATH/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php [ 383 ] in /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php:281
2014-12-09 03:25:29 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(281): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('535-5.7.8 Usern...', Array)
#1 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(243): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET??', Array, Array)
#2 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php(54): Swift_Transport_EsmtpTransport->executeCommand('RSET??', Array)
#3 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php(176): Swift_Transport_Esmtp_Auth_XOAuth2Authenticator->authenticate(Object(Swift_SmtpTransport), 'chidan.vassigh@...', 'vach1950')
#4 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(307): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))
#5 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#6 /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Mailer.php(79): Swift_Transport_AbstractSmtpTransport->start()
#7 /home/wap22/sites/ecommerce/application/classes/Helper/Mail.php(45): Swift_Mailer->send(Object(Swift_Message))
#8 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(66): Helper_Mail->send('cvassigh@wanado...', 'titre', 'tata', false)
#9 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(78): Model_Panier->sendMail('cvassigh@wanado...', 'titre', 'tata', false)
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#13 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#16 {main} in /home/wap22/sites/ecommerce/application/vendor/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php:281
2014-12-09 04:05:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/panier.php [ 34 ] in file:line
2014-12-09 04:05:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 04:07:08 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-='1' where id = '1'' at line 1 ~ APPPATH/classes/Helper/Database.php [ 39 ] in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-09 04:07:08 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Helper/Database.php(39): PDOStatement->execute(Array)
#1 /home/wap22/sites/ecommerce/application/classes/Model/panier.php(35): Helper_Database->execute('update produits...', Array)
#2 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(60): Model_Panier->updateProduit_Quantite(Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_achat()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap22/sites/ecommerce/application/classes/Helper/Database.php:39
2014-12-09 04:35:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'coucou' (T_STRING) ~ APPPATH/classes/Controller/Panier.php [ 77 ] in file:line
2014-12-09 04:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 04:35:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Panier.php [ 77 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:77
2014-12-09 04:35:53 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(77): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 77, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:77
2014-12-09 04:38:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Panier.php [ 78 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:78
2014-12-09 04:38:17 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 78, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:78
2014-12-09 04:39:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _user ~ APPPATH/classes/Controller/Panier.php [ 77 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:77
2014-12-09 04:39:46 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 77, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:77
2014-12-09 04:39:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Panier.php [ 78 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:78
2014-12-09 04:39:56 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php(78): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 78, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Panier->action_view_achat()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Panier))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Panier.php:78
2014-12-09 04:52:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/classes/Controller/Panier.php [ 83 ] in file:line
2014-12-09 04:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 05:04:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$mail' (T_VARIABLE) ~ APPPATH/classes/Controller/Panier.php [ 65 ] in file:line
2014-12-09 05:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 05:38:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH/views/contenus.php [ 58 ] in /home/wap22/sites/ecommerce/application/views/contenus.php:58
2014-12-09 05:38:28 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/views/contenus.php(58): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 58, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(61): include('/home/wap22/sit...')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap22/sit...', Array)
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap22/sites/ecommerce/application/classes/Controller/Contenu.php(21): Kohana_Response->body(Object(View))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Contenu->action_contenus()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contenu))
#9 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap22/sites/ecommerce/application/views/contenus.php:58
2014-12-09 06:19:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 8 for Model_Admin::insertProduit(), called in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php on line 33 and defined ~ APPPATH/classes/Model/admin.php [ 15 ] in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:19:23 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/admin.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(33): Model_Admin->insertProduit('Qu'est-ce que l...', 'Chidan Vassigh', 'Akhtaran ', 'Politique', '2008-01-02', '15', 'laicite_vasigh....')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:21:18 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 8 for Model_Admin::insertProduit(), called in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php on line 33 and defined ~ APPPATH/classes/Model/admin.php [ 15 ] in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:21:18 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/admin.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(33): Model_Admin->insertProduit('Qu'est-ce que l...', 'Chidan Vassigh', 'Akhtaran ', 'Politique', '2008-01-02', '15', 'laicite_vasigh....')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:21:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 8 for Model_Admin::insertProduit(), called in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php on line 33 and defined ~ APPPATH/classes/Model/admin.php [ 15 ] in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:21:23 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/admin.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(33): Model_Admin->insertProduit('Qu'est-ce que l...', 'Chidan Vassigh', 'Akhtaran ', 'Politique', '2008-01-02', '15', 'laicite_vasigh....')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:21:34 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 8 for Model_Admin::insertProduit(), called in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php on line 33 and defined ~ APPPATH/classes/Model/admin.php [ 15 ] in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:21:34 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/admin.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(33): Model_Admin->insertProduit('Qu'est-ce que l...', 'Chidan Vassigh', 'Akhtaran ', 'Politique', '2008-01-02', '15', 'laicite_vasigh....')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:25:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 8 for Model_Admin::insertProduit(), called in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php on line 33 and defined ~ APPPATH/classes/Model/admin.php [ 15 ] in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:25:16 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Model/admin.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap22/sit...', 15, Array)
#1 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(33): Model_Admin->insertProduit('Qu'est-ce que l...', 'Chidan Vassigh', 'Akhtaran ', 'Politique', '2008-01-02', '15', 'laicite_vasigh....')
#2 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in /home/wap22/sites/ecommerce/application/classes/Model/admin.php:15
2014-12-09 06:41:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: quantite ~ APPPATH/classes/Controller/Admin.php [ 36 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:36
2014-12-09 06:41:34 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 36, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:36
2014-12-09 06:43:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: quantite ~ APPPATH/classes/Controller/Admin.php [ 37 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:37
2014-12-09 06:43:18 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap22/sit...', 37, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:37
2014-12-09 06:49:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resume ~ APPPATH/classes/Controller/Admin.php [ 50 ] in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:50
2014-12-09 06:49:56 --- DEBUG: #0 /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap22/sit...', 50, Array)
#1 /home/wap22/sites/ecommerce/system/classes/Kohana/Controller.php(84): Controller_Admin->action_ajout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /home/wap22/sites/ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap22/sites/ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap22/sites/ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap22/sites/ecommerce/application/classes/Controller/Admin.php:50
2014-12-09 07:30:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH/views/produits.php [ 120 ] in file:line
2014-12-09 07:30:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 07:30:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endfor' (T_ENDFOR) ~ APPPATH/views/produits.php [ 132 ] in file:line
2014-12-09 07:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line