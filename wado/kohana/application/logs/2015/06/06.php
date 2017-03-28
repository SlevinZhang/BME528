<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-06-06 05:50:38 --- ERROR: writing
2015-06-06 05:56:24 --- ERROR: writing
2015-06-06 05:56:24 --- ERROR: writing
2015-06-06 05:57:53 --- ERROR: writing
2015-06-06 05:57:53 --- ERROR: writing
2015-06-06 05:57:53 --- ERROR: writing
2015-06-06 05:57:53 --- ERROR: writing
2015-06-06 06:00:33 --- ERROR: writing
2015-06-06 06:02:13 --- ERROR: writing
2015-06-06 06:02:13 --- ERROR: writing
2015-06-06 06:02:13 --- ERROR: writing
2015-06-06 06:02:24 --- ERROR: writing
2015-06-06 06:22:07 --- ERROR: writing
2015-06-06 06:22:07 --- ERROR: writing
2015-06-06 06:22:38 --- ERROR: writing
2015-06-06 06:22:38 --- ERROR: writing
2015-06-06 06:34:15 --- ERROR: writing
2015-06-06 06:34:15 --- ERROR: writing
2015-06-06 06:34:15 --- ERROR: writing
2015-06-06 06:35:52 --- ERROR: writing
2015-06-06 06:35:52 --- ERROR: writing
2015-06-06 06:36:02 --- ERROR: writing
2015-06-06 06:36:02 --- ERROR: writing
2015-06-06 06:38:02 --- ERROR: writing
2015-06-06 06:38:02 --- ERROR: writing
2015-06-06 06:42:57 --- ERROR: writing
2015-06-06 06:49:11 --- ERROR: writing
2015-06-06 06:49:21 --- ERROR: writing
2015-06-06 06:59:07 --- ERROR: writing
2015-06-06 07:08:22 --- ERROR: writing
2015-06-06 07:08:22 --- ERROR: writing
2015-06-06 07:08:22 --- ERROR: writing
2015-06-06 07:13:34 --- ERROR: writing
2015-06-06 07:19:44 --- ERROR: writing
2015-06-06 07:19:44 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:19:44 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:19:44 --- ERROR: writing
2015-06-06 07:19:44 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:19:44 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:19:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:19:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.129.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.129.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.130.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.130.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.131.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.131.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.132.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.132.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.133.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.133.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.134.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.134.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.135.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.135.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:20:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.136.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:20:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.136.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:07 --- ERROR: writing
2015-06-06 07:26:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.129.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.129.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.130.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.130.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.132.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.132.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.131.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.131.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.133.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.133.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.134.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.134.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:26:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.135.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:26:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.135.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:27:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.136.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-06-06 07:27:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.136.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-06-06 07:27:45 --- ERROR: writing
2015-06-06 07:28:09 --- ERROR: writing
2015-06-06 07:30:50 --- ERROR: writing
2015-06-06 07:30:50 --- ERROR: writing
2015-06-06 07:35:30 --- ERROR: writing
2015-06-06 07:36:22 --- ERROR: writing
2015-06-06 07:36:22 --- ERROR: writing
2015-06-06 07:36:22 --- ERROR: writing
2015-06-06 07:52:53 --- ERROR: writing
2015-06-06 07:52:53 --- ERROR: writing
2015-06-06 07:54:36 --- ERROR: writing
2015-06-06 07:58:41 --- ERROR: writing
2015-06-06 08:00:33 --- ERROR: writing
2015-06-06 08:00:33 --- ERROR: writing
2015-06-06 08:01:26 --- ERROR: writing
2015-06-06 08:13:16 --- ERROR: writing
2015-06-06 08:21:40 --- ERROR: writing
2015-06-06 08:25:22 --- ERROR: writing
2015-06-06 08:25:22 --- ERROR: writing
2015-06-06 08:25:22 --- ERROR: writing
2015-06-06 08:26:34 --- ERROR: writing
2015-06-06 08:26:34 --- ERROR: writing
2015-06-06 08:26:34 --- ERROR: writing
2015-06-06 08:26:34 --- ERROR: writing
2015-06-06 08:33:17 --- ERROR: writing
2015-06-06 09:44:26 --- ERROR: writing
2015-06-06 09:45:05 --- ERROR: writing
2015-06-06 09:45:05 --- ERROR: writing
2015-06-06 09:48:44 --- ERROR: writing
2015-06-06 09:48:44 --- ERROR: writing
2015-06-06 09:49:15 --- ERROR: writing
2015-06-06 09:49:27 --- ERROR: writing
2015-06-06 09:49:27 --- ERROR: writing
2015-06-06 09:59:10 --- ERROR: writing
2015-06-06 09:59:55 --- ERROR: writing
2015-06-06 09:59:55 --- ERROR: writing
2015-06-06 10:09:54 --- ERROR: writing
2015-06-06 10:09:54 --- ERROR: writing
2015-06-06 10:09:54 --- ERROR: writing
2015-06-06 10:10:34 --- ERROR: writing
2015-06-06 10:10:34 --- ERROR: writing
2015-06-06 10:11:17 --- ERROR: writing
2015-06-06 10:11:17 --- ERROR: writing
2015-06-06 10:11:17 --- ERROR: writing
2015-06-06 10:18:05 --- ERROR: writing
2015-06-06 10:18:05 --- ERROR: writing
2015-06-06 10:18:05 --- ERROR: writing
2015-06-06 10:19:01 --- ERROR: writing
2015-06-06 10:19:47 --- ERROR: writing
2015-06-06 10:29:17 --- ERROR: writing
2015-06-06 10:29:17 --- ERROR: writing
2015-06-06 10:30:12 --- ERROR: writing
2015-06-06 10:30:12 --- ERROR: writing
2015-06-06 10:30:40 --- ERROR: writing
2015-06-06 10:30:40 --- ERROR: writing
2015-06-06 10:30:40 --- ERROR: writing
2015-06-06 10:30:58 --- ERROR: writing
2015-06-06 10:32:09 --- ERROR: writing
2015-06-06 10:32:09 --- ERROR: writing
2015-06-06 10:32:09 --- ERROR: writing
2015-06-06 10:32:09 --- ERROR: writing
2015-06-06 10:32:17 --- ERROR: writing
2015-06-06 10:40:38 --- ERROR: writing
2015-06-06 10:40:38 --- ERROR: writing
2015-06-06 10:40:38 --- ERROR: writing
2015-06-06 10:40:38 --- ERROR: writing
2015-06-06 10:46:55 --- ERROR: writing
2015-06-06 10:54:00 --- ERROR: writing
2015-06-06 10:54:56 --- ERROR: writing
2015-06-06 10:55:21 --- ERROR: writing
2015-06-06 10:55:21 --- ERROR: writing
2015-06-06 10:55:21 --- ERROR: writing
2015-06-06 10:55:39 --- ERROR: writing
2015-06-06 10:56:19 --- ERROR: writing
2015-06-06 11:11:39 --- ERROR: writing
2015-06-06 11:20:51 --- ERROR: writing
2015-06-06 11:20:51 --- ERROR: writing
2015-06-06 11:27:08 --- ERROR: writing
2015-06-06 11:27:08 --- ERROR: writing
2015-06-06 11:27:38 --- ERROR: writing
2015-06-06 11:28:20 --- ERROR: writing
2015-06-06 11:35:42 --- ERROR: writing
2015-06-06 11:36:09 --- ERROR: writing
2015-06-06 11:36:20 --- ERROR: writing