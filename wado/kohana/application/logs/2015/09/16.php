<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-09-16 06:24:22 --- ERROR: writing
2015-09-16 06:24:22 --- ERROR: writing
2015-09-16 06:24:49 --- ERROR: writing
2015-09-16 06:24:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.770/1.2.840.113619.2.244.6945.567450.12921.1350049671.61.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.770/1.2.840.113619.2.244.6945.567450.12921.1350049671.61.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:49 --- ERROR: writing
2015-09-16 06:24:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.5.172521241900.300.1350063190.670/1.2.840.113619.2.5.2417910.22617.1350063190.671.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.5.172521241900.300.1350063190.670/1.2.840.113619.2.5.2417910.22617.1350063190.671.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:49 --- ERROR: writing
2015-09-16 06:24:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.768/1.2.840.113619.2.244.6945.567450.12921.1350049670.748.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.768/1.2.840.113619.2.244.6945.567450.12921.1350049670.748.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.758/1.2.840.113619.2.244.6945.567450.12921.1350049670.401.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.758/1.2.840.113619.2.244.6945.567450.12921.1350049670.401.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.771/1.2.840.113619.2.244.6945.567450.12921.1350049671.212.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.771/1.2.840.113619.2.244.6945.567450.12921.1350049671.212.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.5.172521241900.301.1350063196.367/1.2.840.113619.2.5.2417910.22617.1350063190.700.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.5.172521241900.301.1350063196.367/1.2.840.113619.2.5.2417910.22617.1350063190.700.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.769/1.2.840.113619.2.244.6945.567450.12921.1350049670.907.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.769/1.2.840.113619.2.244.6945.567450.12921.1350049670.907.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.752/1.2.840.113619.2.244.6945.567450.12921.1350049670.38.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.752/1.2.840.113619.2.244.6945.567450.12921.1350049670.38.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:24:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.761/1.2.840.113619.2.244.6945.567450.12921.1350049670.589.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:24:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.2031000.41192.4226.96466847/1.2.840.113619.2.244.6945.567450.15584.1350049590.761/1.2.840.113619.2.244.6945.567450.12921.1350049670.589.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:28:21 --- ERROR: writing
2015-09-16 06:30:07 --- ERROR: writing
2015-09-16 06:30:07 --- ERROR: writing
2015-09-16 06:35:42 --- ERROR: writing
2015-09-16 06:35:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:42 --- ERROR: writing
2015-09-16 06:35:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:42 --- ERROR: writing
2015-09-16 06:35:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.130.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.130.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.129.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.129.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.133.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.133.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.132.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.132.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.131.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.131.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.134.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.134.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.135.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.135.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:35:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.136.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-09-16 06:35:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.9002/1.2.392.200036.9116.4.1.5638.23502.9.2001.136.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2015-09-16 06:39:38 --- ERROR: writing
2015-09-16 06:39:38 --- ERROR: writing
2015-09-16 06:39:38 --- ERROR: writing
2015-09-16 07:30:26 --- ERROR: writing
2015-09-16 07:30:26 --- ERROR: writing
2015-09-16 07:31:39 --- ERROR: writing
2015-09-16 07:31:39 --- ERROR: writing
2015-09-16 07:31:39 --- ERROR: writing
2015-09-16 07:31:39 --- ERROR: writing
2015-09-16 07:31:39 --- ERROR: writing
2015-09-16 07:31:39 --- ERROR: writing
2015-09-16 07:33:44 --- ERROR: writing
2015-09-16 07:33:44 --- ERROR: writing
2015-09-16 07:33:44 --- ERROR: writing
2015-09-16 07:33:44 --- ERROR: writing
2015-09-16 07:40:27 --- ERROR: writing
2015-09-16 07:40:27 --- ERROR: writing
2015-09-16 07:40:27 --- ERROR: writing
2015-09-16 07:42:18 --- ERROR: writing
2015-09-16 07:42:18 --- ERROR: writing
2015-09-16 07:42:18 --- ERROR: writing
2015-09-16 07:42:18 --- ERROR: writing
2015-09-16 07:42:18 --- ERROR: writing