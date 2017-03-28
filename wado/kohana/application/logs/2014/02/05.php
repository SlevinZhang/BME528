<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-02-05 07:30:16 --- ERROR: writing
2014-02-05 07:30:16 --- ERROR: writing
2014-02-05 07:30:16 --- ERROR: writing
2014-02-05 07:32:08 --- ERROR: writing
2014-02-05 07:32:08 --- ERROR: writing
2014-02-05 07:32:08 --- ERROR: writing
2014-02-05 07:35:38 --- ERROR: writing
2014-02-05 07:35:38 --- ERROR: writing
2014-02-05 07:35:38 --- ERROR: writing
2014-02-05 07:37:17 --- ERROR: writing
2014-02-05 07:37:17 --- ERROR: writing
2014-02-05 07:37:17 --- ERROR: writing
2014-02-05 07:37:17 --- ERROR: writing
2014-02-05 07:50:58 --- ERROR: writing
2014-02-05 07:58:28 --- ERROR: writing
2014-02-05 07:58:28 --- ERROR: writing
2014-02-05 07:58:28 --- ERROR: writing
2014-02-05 07:58:28 --- ERROR: writing
2014-02-05 07:59:22 --- ERROR: writing
2014-02-05 07:59:22 --- ERROR: writing
2014-02-05 07:59:22 --- ERROR: writing
2014-02-05 07:59:22 --- ERROR: writing
2014-02-05 07:59:22 --- ERROR: writing
2014-02-05 08:02:55 --- ERROR: writing
2014-02-05 08:02:55 --- ERROR: writing
2014-02-05 08:02:55 --- ERROR: writing
2014-02-05 08:02:55 --- ERROR: writing
2014-02-05 08:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2014-02-05 08:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2014-02-05 08:09:45 --- ERROR: writing
2014-02-05 08:09:45 --- ERROR: writing
2014-02-05 08:09:45 --- ERROR: writing
2014-02-05 08:09:45 --- ERROR: writing
2014-02-05 08:09:45 --- ERROR: writing
2014-02-05 08:09:45 --- ERROR: writing
2014-02-05 08:10:40 --- ERROR: writing
2014-02-05 08:10:40 --- ERROR: writing
2014-02-05 08:18:49 --- ERROR: writing
2014-02-05 08:18:49 --- ERROR: writing
2014-02-05 08:18:49 --- ERROR: writing
2014-02-05 09:35:56 --- ERROR: writing
2014-02-05 09:35:56 --- ERROR: writing
2014-02-05 09:35:56 --- ERROR: writing
2014-02-05 09:35:56 --- ERROR: writing
2014-02-05 09:35:56 --- ERROR: writing
2014-02-05 09:36:23 --- ERROR: writing
2014-02-05 09:36:23 --- ERROR: writing
2014-02-05 09:36:23 --- ERROR: writing
2014-02-05 09:46:20 --- ERROR: writing
2014-02-05 09:46:20 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021431/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021433.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:20 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021431/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021433.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:21 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110243344767313454.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110243324509513449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:21 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110243344767313454.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110243324509513449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:21 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110330861366515620.0.0.0/1.3.6.1.4.1.9590.100.1.2.227895875211840824612502163704292605071.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:21 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110330861366515620.0.0.0/1.3.6.1.4.1.9590.100.1.2.227895875211840824612502163704292605071.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.79284749212337189417737128131706447353.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.79284749212337189417737128131706447353.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360791769617498.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360791769617498.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.427652213312110887634561417293780095136.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.427652213312110887634561417293780095136.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360870354017584.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360870354017584.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.36639720911562870729244504363369734428.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.36639720911562870729244504363369734428.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360813740417535.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360813740417535.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.181501356812063209634775046512466577065.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.181501356812063209634775046512466577065.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:46:33 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360871220517585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:46:33 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360871220517585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:47:16 --- ERROR: writing
2014-02-05 09:47:16 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.3956.5266339/1.3.12.2.1107.5.1.4.54588.30000012101010552354600000243/1.3.6.1.4.1.9590.100.1.2.177261396611249131812218077623833480457.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:47:16 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.3956.5266339/1.3.12.2.1107.5.1.4.54588.30000012101010552354600000243/1.3.6.1.4.1.9590.100.1.2.177261396611249131812218077623833480457.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:47:16 --- ERROR: writing
2014-02-05 09:47:16 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.3956.5266339/1.3.12.2.1107.5.1.4.54588.30000012101011450831200002449/1.3.6.1.4.1.9590.100.1.2.66921736112679760823016441650558078714.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:47:16 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.3956.5266339/1.3.12.2.1107.5.1.4.54588.30000012101011450831200002449/1.3.6.1.4.1.9590.100.1.2.66921736112679760823016441650558078714.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:47:37 --- ERROR: writing
2014-02-05 09:47:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3003.5267370/1.3.12.2.1107.5.1.4.54588.30000012101211393735900002038/1.3.12.2.1107.5.1.4.54588.30000012101211393735900002039.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:47:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3003.5267370/1.3.12.2.1107.5.1.4.54588.30000012101211393735900002038/1.3.12.2.1107.5.1.4.54588.30000012101211393735900002039.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:47:37 --- ERROR: writing
2014-02-05 09:47:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3003.5267370/1.3.12.2.1107.5.1.4.54588.30000012101210593656200000504/1.3.12.2.1107.5.1.4.54588.30000012101210593656200000505.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:47:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3003.5267370/1.3.12.2.1107.5.1.4.54588.30000012101210593656200000504/1.3.12.2.1107.5.1.4.54588.30000012101210593656200000505.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:48:05 --- ERROR: writing
2014-02-05 09:48:05 --- ERROR: writing
2014-02-05 09:48:05 --- ERROR: writing
2014-02-05 09:48:05 --- ERROR: writing
2014-02-05 09:48:05 --- ERROR: writing
2014-02-05 09:51:32 --- ERROR: writing
2014-02-05 09:51:33 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.6097.5266962/1.3.12.2.1107.5.1.4.54588.30000012101010552354600001593/1.3.6.1.4.1.9590.100.1.2.341909730712857708101662243102610817994.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:51:33 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.6097.5266962/1.3.12.2.1107.5.1.4.54588.30000012101010552354600001593/1.3.6.1.4.1.9590.100.1.2.341909730712857708101662243102610817994.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:51:46 --- ERROR: writing
2014-02-05 09:51:46 --- ERROR: writing
2014-02-05 09:51:46 --- ERROR: writing
2014-02-05 09:51:46 --- ERROR: writing
2014-02-05 09:51:46 --- ERROR: writing
2014-02-05 09:51:46 --- ERROR: writing
2014-02-05 09:52:21 --- ERROR: writing
2014-02-05 09:52:21 --- ERROR: writing
2014-02-05 09:52:21 --- ERROR: writing
2014-02-05 09:52:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021431/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021433.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021431/1.3.12.2.1107.5.2.30.25240.30000012092613082281200021433.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110243344767313454.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110243324509513449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110243344767313454.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110243324509513449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110330861366515620.0.0.0/1.3.6.1.4.1.9590.100.1.2.227895875211840824612502163704292605071.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110330861366515620.0.0.0/1.3.6.1.4.1.9590.100.1.2.227895875211840824612502163704292605071.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.79284749212337189417737128131706447353.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.79284749212337189417737128131706447353.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360791769617498.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360791769617498.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.427652213312110887634561417293780095136.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.427652213312110887634561417293780095136.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:52:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360870354017584.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:52:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360870354017584.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.36639720911562870729244504363369734428.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.36639720911562870729244504363369734428.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360813740417535.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360813740417535.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360789588817489.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.181501356812063209634775046512466577065.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.181501356812063209634775046512466577065.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360871220517585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360871220517585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.79284749212337189417737128131706447353.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.79284749212337189417737128131706447353.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.69029104612642718814477272323982401409.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.69029104612642718814477272323982401409.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360791769617498.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360791769617498.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.427652213312110887634561417293780095136.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.427652213312110887634561417293780095136.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360870354017584.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360870354017584.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036086667517521.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036086667517521.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.57262535512388281928451398750614644518.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.57262535512388281928451398750614644518.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.36639720911562870729244504363369734428.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.36639720911562870729244504363369734428.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360872911417586.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360872911417586.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360813740417535.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360813740417535.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036088922217525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036088922217525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.358111106112676868210847177171414125889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.358111106112676868210847177171414125889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.7498723513264845640790555093321631926.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.181501356812063209634775046512466577065.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.181501356812063209634775046512466577065.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360888605817587.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360888605817587.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360871220517585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360871220517585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.326398860512039695401418367263548920532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.326398860512039695401418367263548920532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.172178732111935300632740217843529113210.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.172178732111935300632740217843529113210.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036088691017524.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036088691017524.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.69029104612642718814477272323982401409.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.69029104612642718814477272323982401409.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.263237270512614155903671655854061171604.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.263237270512614155903671655854061171604.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360891901417588.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360891901417588.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360865667217579.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036086667517521.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036086667517521.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.57262535512388281928451398750614644518.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.57262535512388281928451398750614644518.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360872911417586.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.2012101110360872911417586.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.6.1.4.1.9590.100.1.2.61713721810831974520615192734049769773.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036089183417526.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036089183417526.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036088922217525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:53:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41191.3234.5267384/1.3.12.2.1107.5.2.30.25240.2012101110360819219717544.0.0.0/1.3.12.2.1107.5.2.30.25240.201210111036088922217525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:53:43 --- ERROR: writing
2014-02-05 09:53:43 --- ERROR: writing
2014-02-05 09:53:43 --- ERROR: writing
2014-02-05 09:53:43 --- ERROR: writing
2014-02-05 09:57:03 --- ERROR: writing
2014-02-05 09:57:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854680.20121027.1113143/1.3.12.2.1107.5.2.31.31130.2012102713151425432504494.0.0.0/1.3.6.1.4.1.9590.100.1.2.307747227712818729715828668444082272598.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854680.20121027.1113143/1.3.12.2.1107.5.2.31.31130.2012102713151425432504494.0.0.0/1.3.6.1.4.1.9590.100.1.2.307747227712818729715828668444082272598.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:20 --- ERROR: writing
2014-02-05 09:57:20 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713132682798503786.0.0.0/1.3.6.1.4.1.9590.100.1.2.386348613213275029724115152850482875458.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:20 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713132682798503786.0.0.0/1.3.6.1.4.1.9590.100.1.2.386348613213275029724115152850482875458.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:21 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:21 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:21 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:21 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96358745711100726634654892933712147952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96358745711100726634654892933712147952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.247756096512052493041200121961619341818.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.247756096512052493041200121961619341818.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.410890945311848609300202251682249590268.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.410890945311848609300202251682249590268.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.284472682412585749829366217510275512842.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.284472682412585749829366217510275512842.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.307300394211607995009353691163298971157.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.307300394211607995009353691163298971157.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.17887848212912003914487722682155161070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.17887848212912003914487722682155161070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:34 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.132114659512073548710920923172542875430.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:34 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.132114659512073548710920923172542875430.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.412553465612782832334000249783522730693.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.412553465612782832334000249783522730693.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.354763057811902004926144516120465948918.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.354763057811902004926144516120465948918.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.328342396210131989042442462050655411664.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.328342396210131989042442462050655411664.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.296796046312299010326299649404036511060.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.296796046312299010326299649404036511060.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.342553251812329944114539311371787675062.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.342553251812329944114539311371787675062.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.352270580013417300414425315031793370620.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.352270580013417300414425315031793370620.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.173603197412455293713527492074068001379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.173603197412455293713527492074068001379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:43 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96494876510895267303944024362268116538.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:43 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96494876510895267303944024362268116538.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.290676189111225331123040956754087417424.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.290676189111225331123040956754087417424.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.211441568211177693521757211463289906341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.211441568211177693521757211463289906341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.182168750212315641124814363291028171044.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.182168750212315641124814363291028171044.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.14805481412720651206342611272927567110.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.14805481412720651206342611272927567110.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.27685932012481572616093180593539599524.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.27685932012481572616093180593539599524.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.416792323612921254607951410350972583470.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.416792323612921254607951410350972583470.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.339612088311668205824873926930980122807.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.339612088311668205824873926930980122807.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.124694474110621529130865862851051953823.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.124694474110621529130865862851051953823.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.422409773013924216216860489540700980209.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.422409773013924216216860489540700980209.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.44083994812523018715764717201810832649.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.44083994812523018715764717201810832649.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.348607750013074581937450574704080070975.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.348607750013074581937450574704080070975.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.318241502311611578110974422342624372788.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.318241502311611578110974422342624372788.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.27975963812789044705309692302132361070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.27975963812789044705309692302132361070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.266093869511080405110809627501821359715.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.266093869511080405110809627501821359715.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.280797158912978275515131849480280455052.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.280797158912978275515131849480280455052.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.244926672610558426708802369773073278085.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.244926672610558426708802369773073278085.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.308885800612902915323815417921399355529.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.308885800612902915323815417921399355529.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.20917312112883424500501116772441092205.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.20917312112883424500501116772441092205.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.354536570911158566901191289762116456713.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.354536570911158566901191289762116456713.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.102731687211223801834753847401262871451.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.102731687211223801834753847401262871451.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.145932981011829019830159733110748013348.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.145932981011829019830159733110748013348.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.304563722911310049913052755620917908220.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.304563722911310049913052755620917908220.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.165496146712777496831217445511879894547.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.165496146712777496831217445511879894547.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.176618109313545907724793642720407136699.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.176618109313545907724793642720407136699.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.118206172012010070341227171170513354513.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.118206172012010070341227171170513354513.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.344954572911642994513241099661063537273.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.344954572911642994513241099661063537273.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.229211213458818714395275614289927792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.229211213458818714395275614289927792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.355764869112533610331014747032799162378.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.355764869112533610331014747032799162378.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.215677489612298281536910391212933228564.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.215677489612298281536910391212933228564.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.38273540011142707813173242143750526647.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.38273540011142707813173242143750526647.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.409874226512466936438085899652200023447.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.409874226512466936438085899652200023447.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.223368741812205944240081086823632394907.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.223368741812205944240081086823632394907.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.341176348511254655642386945792559415367.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.341176348511254655642386945792559415367.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.288502593310579298004591507453380843666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.288502593310579298004591507453380843666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109868650012905354223672843542780793566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109868650012905354223672843542780793566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.75075254511936195134982519460733413106.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.75075254511936195134982519460733413106.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.287124739211730564737687054120202771680.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.287124739211730564737687054120202771680.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.205142796611147507220870470641504005285.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.205142796611147507220870470641504005285.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.187252012411171981535271522841475985264.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.187252012411171981535271522841475985264.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.425535859612269394914923114661222372354.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.425535859612269394914923114661222372354.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.126002921211653911008793606950581338210.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.126002921211653911008793606950581338210.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.183874031912344950430602418521589657271.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.183874031912344950430602418521589657271.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.312315994013369606507315321932940605133.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.312315994013369606507315321932940605133.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.227839171513904234025197126762110472017.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.227839171513904234025197126762110472017.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.202804323912566138726161706292177471425.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.202804323912566138726161706292177471425.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.362058894412720206620377675690384851884.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.362058894412720206620377675690384851884.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.398134044512006022019228299541146637456.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.398134044512006022019228299541146637456.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.196775683111505390701754336344118484994.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.196775683111505390701754336344118484994.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.417849143411593197328309387930662105343.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.417849143411593197328309387930662105343.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.43064390612087673330045303600103449592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.43064390612087673330045303600103449592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.226517509013289220534589697370359198785.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.226517509013289220534589697370359198785.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.40785052411455506538535261803865372585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.40785052411455506538535261803865372585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.160426496711809675424019736722688130332.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.160426496711809675424019736722688130332.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.319112029413003708317942263372363822734.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.319112029413003708317942263372363822734.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201210570311720308842460455713697114746.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201210570311720308842460455713697114746.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.367715760511652204918815706960802659487.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.367715760511652204918815706960802659487.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.116182756613834315807600564643891330291.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.116182756613834315807600564643891330291.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.361139584011374500405458607880978934677.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.361139584011374500405458607880978934677.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.39933430711329798038510736930287010251.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.39933430711329798038510736930287010251.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.384188464111642252821012056703557783066.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.384188464111642252821012056703557783066.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.323131550612678196226791041572556301372.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.323131550612678196226791041572556301372.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.18800894312691665711374240560096028711.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.18800894312691665711374240560096028711.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.148152185813689069920577642850565966307.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.148152185813689069920577642850565966307.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.267455906412575456604197487711904820993.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.267455906412575456604197487711904820993.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.240538137712070260306741274900797689961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.240538137712070260306741274900797689961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.425606154212909352333101341820833399364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.425606154212909352333101341820833399364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.168397532813642640815875140452440779592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.168397532813642640815875140452440779592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.248938210913603654525482379722850807666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.248938210913603654525482379722850807666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.143562120011578518119664352631343733298.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.143562120011578518119664352631343733298.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.285337914912051524022542181712935919261.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.285337914912051524022542181712935919261.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.427030444812759961541454642492777026078.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.427030444812759961541454642492777026078.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.45993032913210839509918983030975647792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.45993032913210839509918983030975647792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.292887022610140534820895942823101919134.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.292887022610140534820895942823101919134.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.391935996811560074226024347451908606958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.391935996811560074226024347451908606958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.241990778111469750321131398620441233970.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.241990778111469750321131398620441233970.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280873636510892745336403424573770124446.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280873636510892745336403424573770124446.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.50342615312594217318623179724063104413.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.50342615312594217318623179724063104413.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.394201984312936122711116719741136840232.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.394201984312936122711116719741136840232.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201678370013666926217290331150836639243.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201678370013666926217290331150836639243.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.197924485912049779825582903384043439126.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.197924485912049779825582903384043439126.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.176618109313545907724793642720407136699.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.176618109313545907724793642720407136699.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.20917312112883424500501116772441092205.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.20917312112883424500501116772441092205.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.38273540011142707813173242143750526647.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.38273540011142707813173242143750526647.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.341176348511254655642386945792559415367.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.341176348511254655642386945792559415367.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.288502593310579298004591507453380843666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.288502593310579298004591507453380843666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109868650012905354223672843542780793566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109868650012905354223672843542780793566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.425535859612269394914923114661222372354.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.425535859612269394914923114661222372354.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.205142796611147507220870470641504005285.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.205142796611147507220870470641504005285.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.362058894412720206620377675690384851884.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.362058894412720206620377675690384851884.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.227839171513904234025197126762110472017.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.227839171513904234025197126762110472017.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:57:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:57:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.226517509013289220534589697370359198785.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.226517509013289220534589697370359198785.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.40785052411455506538535261803865372585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.40785052411455506538535261803865372585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.160426496711809675424019736722688130332.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.160426496711809675424019736722688130332.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201210570311720308842460455713697114746.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201210570311720308842460455713697114746.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:06 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.361139584011374500405458607880978934677.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:06 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.361139584011374500405458607880978934677.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:06 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.384188464111642252821012056703557783066.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:06 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.384188464111642252821012056703557783066.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:06 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.267455906412575456604197487711904820993.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:06 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.267455906412575456604197487711904820993.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:07 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.168397532813642640815875140452440779592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:07 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.168397532813642640815875140452440779592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:07 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.143562120011578518119664352631343733298.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:07 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.143562120011578518119664352631343733298.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.45993032913210839509918983030975647792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.45993032913210839509918983030975647792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.391935996811560074226024347451908606958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.391935996811560074226024347451908606958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.292887022610140534820895942823101919134.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.292887022610140534820895942823101919134.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713132682798503786.0.0.0/1.3.6.1.4.1.9590.100.1.2.386348613213275029724115152850482875458.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713132682798503786.0.0.0/1.3.6.1.4.1.9590.100.1.2.386348613213275029724115152850482875458.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:42 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:42 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:43 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:43 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:43 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:43 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:44 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:44 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96358745711100726634654892933712147952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96358745711100726634654892933712147952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.247756096512052493041200121961619341818.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.247756096512052493041200121961619341818.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.410890945311848609300202251682249590268.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.410890945311848609300202251682249590268.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.284472682412585749829366217510275512842.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.284472682412585749829366217510275512842.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.307300394211607995009353691163298971157.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.307300394211607995009353691163298971157.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.17887848212912003914487722682155161070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.17887848212912003914487722682155161070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.132114659512073548710920923172542875430.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.132114659512073548710920923172542875430.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.412553465612782832334000249783522730693.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.412553465612782832334000249783522730693.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.354763057811902004926144516120465948918.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.354763057811902004926144516120465948918.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.328342396210131989042442462050655411664.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.328342396210131989042442462050655411664.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.296796046312299010326299649404036511060.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.296796046312299010326299649404036511060.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.342553251812329944114539311371787675062.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.342553251812329944114539311371787675062.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.352270580013417300414425315031793370620.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.352270580013417300414425315031793370620.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.173603197412455293713527492074068001379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.173603197412455293713527492074068001379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.416792323612921254607951410350972583470.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.416792323612921254607951410350972583470.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.339612088311668205824873926930980122807.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.339612088311668205824873926930980122807.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.422409773013924216216860489540700980209.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.422409773013924216216860489540700980209.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96494876510895267303944024362268116538.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.96494876510895267303944024362268116538.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.290676189111225331123040956754087417424.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.290676189111225331123040956754087417424.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.44083994812523018715764717201810832649.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.44083994812523018715764717201810832649.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.211441568211177693521757211463289906341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.211441568211177693521757211463289906341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.27975963812789044705309692302132361070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.27975963812789044705309692302132361070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.280797158912978275515131849480280455052.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.280797158912978275515131849480280455052.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.182168750212315641124814363291028171044.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.182168750212315641124814363291028171044.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.14805481412720651206342611272927567110.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.14805481412720651206342611272927567110.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.308885800612902915323815417921399355529.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.308885800612902915323815417921399355529.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.354536570911158566901191289762116456713.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.354536570911158566901191289762116456713.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.27685932012481572616093180593539599524.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.27685932012481572616093180593539599524.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.102731687211223801834753847401262871451.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.102731687211223801834753847401262871451.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.124694474110621529130865862851051953823.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.124694474110621529130865862851051953823.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.348607750013074581937450574704080070975.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.348607750013074581937450574704080070975.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.207937564911641657730649795941083834672.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.318241502311611578110974422342624372788.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.318241502311611578110974422342624372788.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.165496146712777496831217445511879894547.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.165496146712777496831217445511879894547.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.344954572911642994513241099661063537273.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.344954572911642994513241099661063537273.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.266093869511080405110809627501821359715.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.266093869511080405110809627501821359715.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.20917312112883424500501116772441092205.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.20917312112883424500501116772441092205.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.229211213458818714395275614289927792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.229211213458818714395275614289927792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.3102351210478867332368877430601911897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.244926672610558426708802369773073278085.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.244926672610558426708802369773073278085.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.355764869112533610331014747032799162378.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.355764869112533610331014747032799162378.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.176618109313545907724793642720407136699.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.176618109313545907724793642720407136699.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.145932981011829019830159733110748013348.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.145932981011829019830159733110748013348.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.357592272411787808015083762013310359390.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.304563722911310049913052755620917908220.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713303814616810707.0.0.0/1.3.6.1.4.1.9590.100.1.2.304563722911310049913052755620917908220.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.118206172012010070341227171170513354513.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.118206172012010070341227171170513354513.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.38273540011142707813173242143750526647.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.38273540011142707813173242143750526647.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.215677489612298281536910391212933228564.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.215677489612298281536910391212933228564.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.341176348511254655642386945792559415367.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.288502593310579298004591507453380843666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.288502593310579298004591507453380843666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.341176348511254655642386945792559415367.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.409874226512466936438085899652200023447.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.409874226512466936438085899652200023447.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.223368741812205944240081086823632394907.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.223368741812205944240081086823632394907.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.17549225113130696041585893433082343923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.287124739211730564737687054120202771680.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.287124739211730564737687054120202771680.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.75075254511936195134982519460733413106.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.75075254511936195134982519460733413106.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109868650012905354223672843542780793566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109868650012905354223672843542780793566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.187252012411171981535271522841475985264.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.187252012411171981535271522841475985264.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.205142796611147507220870470641504005285.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.205142796611147507220870470641504005285.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.126002921211653911008793606950581338210.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.126002921211653911008793606950581338210.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.425535859612269394914923114661222372354.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.425535859612269394914923114661222372354.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.183874031912344950430602418521589657271.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.183874031912344950430602418521589657271.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:58:59 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:58:59 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.414599275812763690125888956271716145947.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.312315994013369606507315321932940605133.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.312315994013369606507315321932940605133.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.202804323912566138726161706292177471425.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.202804323912566138726161706292177471425.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.398134044512006022019228299541146637456.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.398134044512006022019228299541146637456.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.227839171513904234025197126762110472017.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.227839171513904234025197126762110472017.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.196775683111505390701754336344118484994.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.196775683111505390701754336344118484994.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.362058894412720206620377675690384851884.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.362058894412720206620377675690384851884.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.417849143411593197328309387930662105343.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.417849143411593197328309387930662105343.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.43064390612087673330045303600103449592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.43064390612087673330045303600103449592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.319112029413003708317942263372363822734.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.319112029413003708317942263372363822734.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.367715760511652204918815706960802659487.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.367715760511652204918815706960802659487.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.116182756613834315807600564643891330291.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.116182756613834315807600564643891330291.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.39933430711329798038510736930287010251.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.39933430711329798038510736930287010251.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.226517509013289220534589697370359198785.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.226517509013289220534589697370359198785.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.323131550612678196226791041572556301372.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.323131550612678196226791041572556301372.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.40785052411455506538535261803865372585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.40785052411455506538535261803865372585.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.18800894312691665711374240560096028711.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.18800894312691665711374240560096028711.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.160426496711809675424019736722688130332.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.160426496711809675424019736722688130332.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201210570311720308842460455713697114746.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201210570311720308842460455713697114746.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.148152185813689069920577642850565966307.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.148152185813689069920577642850565966307.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.18940513312204356426452970672875224395.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.240538137712070260306741274900797689961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.240538137712070260306741274900797689961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.361139584011374500405458607880978934677.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.361139584011374500405458607880978934677.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.425606154212909352333101341820833399364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.425606154212909352333101341820833399364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.384188464111642252821012056703557783066.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.384188464111642252821012056703557783066.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.267455906412575456604197487711904820993.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.267455906412575456604197487711904820993.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.248938210913603654525482379722850807666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.248938210913603654525482379722850807666.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.285337914912051524022542181712935919261.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.285337914912051524022542181712935919261.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.168397532813642640815875140452440779592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.168397532813642640815875140452440779592.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.427030444812759961541454642492777026078.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541801397.0.0.0/1.3.6.1.4.1.9590.100.1.2.427030444812759961541454642492777026078.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.143562120011578518119664352631343733298.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.143562120011578518119664352631343733298.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.45993032913210839509918983030975647792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.45993032913210839509918983030975647792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.391935996811560074226024347451908606958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.391935996811560074226024347451908606958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.292887022610140534820895942823101919134.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.292887022610140534820895942823101919134.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.241990778111469750321131398620441233970.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.241990778111469750321131398620441233970.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280873636510892745336403424573770124446.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280873636510892745336403424573770124446.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.50342615312594217318623179724063104413.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.50342615312594217318623179724063104413.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.394201984312936122711116719741136840232.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.394201984312936122711116719741136840232.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201678370013666926217290331150836639243.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.201678370013666926217290331150836639243.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.402191554111896975218617622272570791933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.280550207911802111539667913183586238341.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.197924485912049779825582903384043439126.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.197924485912049779825582903384043439126.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.386696504611386767218590120034038377364.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.230985989511553466832555147670412142756.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.337674401312275362030056160530614208494.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.169202783912104754516540033282913828397.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.322881437211125334509459283411103484525.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.91359792111212667938797329070183473436.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.355287189713130864940036491651021810177.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.331955492812475322103406708572922274124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.51898065410462346635417237902689927636.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.278249182413331044736254481110580390985.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.382098049511424596833630537261560088952.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.281867606711082967422998626743041272566.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.164078318313342969316658318171666843826.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.210904805713155622542180545533839483370.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.225513741712351609505547357701302889923.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.109791984010417012117431855994290286706.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.70774565512261429813845830641261846963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 09:59:10 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 09:59:10 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713021517541601396.0.0.0/1.3.6.1.4.1.9590.100.1.2.260127368511268832928458953010633138897.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.353318086110329269039947831573998787507.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.339612088311668205824873926930980122807.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.339612088311668205824873926930980122807.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.416792323612921254607951410350972583470.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.416792323612921254607951410350972583470.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.113891548113825898516608874840075383082.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.422409773013924216216860489540700980209.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.422409773013924216216860489540700980209.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.44083994812523018715764717201810832649.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.44083994812523018715764717201810832649.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.27975963812789044705309692302132361070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.27975963812789044705309692302132361070.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.308885800612902915323815417921399355529.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.308885800612902915323815417921399355529.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.280797158912978275515131849480280455052.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.280797158912978275515131849480280455052.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.102731687211223801834753847401262871451.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.102731687211223801834753847401262871451.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.165496146712777496831217445511879894547.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.165496146712777496831217445511879894547.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.344954572911642994513241099661063537273.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.344954572911642994513241099661063537273.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.354536570911158566901191289762116456713.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.354536570911158566901191289762116456713.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.148039634311314152205305824602951402768.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.229211213458818714395275614289927792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.229211213458818714395275614289927792.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:32 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.355764869112533610331014747032799162378.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:32 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.355764869112533610331014747032799162378.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:33 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:33 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.324352584411728901916494900552706424846.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:34 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:34 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.251532081510830562007702296450306991105.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:34 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:34 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.317132782412493904024660479301418412814.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.45225717613884616212473939352621073215.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.312403314612828524801611810962615725453.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.283908627312913738024652624881351010530.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.104227089410335526224914674353005229603.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.130482496412077866712310045763003907150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.83484933011716823023990890394266314051.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.358612454011598089921872859250465578889.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713071785243403440.0.0.0/1.3.6.1.4.1.9590.100.1.2.289563776411885632909017145754075742238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.390143979313085264200356827040362578523.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.390143979313085264200356827040362578523.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.290394614911670927417704654260323083638.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.290394614911670927417704654260323083638.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.18000164312021389816822529480645270857.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.18000164312021389816822529480645270857.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.386091302711858649935112142471137473717.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.386091302711858649935112142471137473717.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.422174437512362106442396425482325321680.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.422174437512362106442396425482325321680.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.290394614911670927417704654260323083638.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.290394614911670927417704654260323083638.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.157139266612597067617252586553613153933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.157139266612597067617252586553613153933.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.300922101812875183226280505802785261820.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.300922101812875183226280505802785261820.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.386748082011517464406945722222981346329.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.386748082011517464406945722222981346329.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.135554331112275126935029541152151488616.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.135554331112275126935029541152151488616.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.346257067813491108737673317311849588514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.346257067813491108737673317311849588514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.377569983210019469820905926491955638365.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.377569983210019469820905926491955638365.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.2040802711412753812457281380503240497.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.2040802711412753812457281380503240497.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.390143979313085264200356827040362578523.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.390143979313085264200356827040362578523.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.287655042610586697619591328402851965182.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.287655042610586697619591328402851965182.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.345459546012803787610155232290964630356.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.345459546012803787610155232290964630356.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.135081684712234003319063400011693930024.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.135081684712234003319063400011693930024.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.426294327611268472016976290720825420501.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.426294327611268472016976290720825420501.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.18000164312021389816822529480645270857.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.18000164312021389816822529480645270857.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.278949584210546386905709748653919872026.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.278949584210546386905709748653919872026.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.375959476611001543536323836600647177620.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.375959476611001543536323836600647177620.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.228123836211432963815906397723512705676.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.228123836211432963815906397723512705676.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.246469726512945287439210246521175631542.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.246469726512945287439210246521175631542.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.353387141911077285403875194202808772028.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.353387141911077285403875194202808772028.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.394034966011632482523601801091301142703.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.394034966011632482523601801091301142703.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.399283168811184565640076217993436547191.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.399283168811184565640076217993436547191.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.294917558712313754340080754141318361574.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.294917558712313754340080754141318361574.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.309433888212020066923094962391736398265.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.309433888212020066923094962391736398265.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.266946811411153002521475375881601755834.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.266946811411153002521475375881601755834.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:00:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.17459929312668966317572200251352410114.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-02-05 10:00:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113970.3.57.1.46854684.20121027.1113144/1.3.12.2.1107.5.2.31.31130.2012102713045289316902765.0.0.0/1.3.6.1.4.1.9590.100.1.2.17459929312668966317572200251352410114.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
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
2014-02-05 10:04:38 --- ERROR: writing
2014-02-05 10:05:24 --- ERROR: writing
2014-02-05 10:05:25 --- ERROR: writing
2014-02-05 10:21:07 --- ERROR: writing
2014-02-05 10:21:07 --- ERROR: writing
2014-02-05 10:21:07 --- ERROR: writing
2014-02-05 10:21:07 --- ERROR: writing
2014-02-05 10:22:27 --- ERROR: writing
2014-02-05 10:22:27 --- ERROR: writing
2014-02-05 10:22:27 --- ERROR: writing
2014-02-05 10:22:27 --- ERROR: writing
2014-02-05 10:22:27 --- ERROR: writing