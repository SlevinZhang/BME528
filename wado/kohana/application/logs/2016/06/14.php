<?php defined('SYSPATH') or die('No direct script access.'); ?>

2016-06-14 15:46:58 --- ERROR: writing
2016-06-14 15:46:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2016-06-14 15:46:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2016-06-14 15:46:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2016-06-14 15:46:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2016-06-14 15:46:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2016-06-14 15:46:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2016-06-14 15:50:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2016-06-14 15:50:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2016-06-14 15:50:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2016-06-14 15:50:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2016-06-14 15:50:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2016-06-14 15:50:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2016-06-14 15:50:46 --- ERROR: writing
2016-06-14 15:50:46 --- ERROR: writing
2016-06-14 15:50:46 --- ERROR: writing
2016-06-14 17:10:48 --- ERROR: writing
2016-06-14 17:10:48 --- ERROR: writing
2016-06-14 17:10:48 --- ERROR: writing
2016-06-14 17:10:48 --- ERROR: writing
2016-06-14 17:10:48 --- ERROR: writing
2016-06-14 17:10:48 --- ERROR: writing
2016-06-14 18:07:10 --- ERROR: writing
2016-06-14 18:07:10 --- ERROR: writing
2016-06-14 18:07:40 --- ERROR: writing
2016-06-14 18:07:40 --- ERROR: writing
2016-06-14 18:20:27 --- ERROR: writing
2016-06-14 21:59:23 --- ERROR: writing
2016-06-14 22:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2016-06-14 22:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}