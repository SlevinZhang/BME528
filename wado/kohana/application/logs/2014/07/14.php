<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-07-14 08:58:40 --- ERROR: writing
2014-07-14 08:58:40 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.135.2025.1751190.4526.1195651580.319/1.2.840.113619.2.135.2025.1751190.4468.1195651636.955/1.3.6.1.4.1.9590.100.1.2.14075499512999771633616236861956831820.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 08:58:40 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.135.2025.1751190.4526.1195651580.319/1.2.840.113619.2.135.2025.1751190.4468.1195651636.955/1.3.6.1.4.1.9590.100.1.2.14075499512999771633616236861956831820.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:09 --- ERROR: writing
2014-07-14 11:14:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.279131294810728175105368017202070603823.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.279131294810728175105368017202070603823.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:09 --- ERROR: writing
2014-07-14 11:14:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.197055876011547478004421075823470246104.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.197055876011547478004421075823470246104.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:09 --- ERROR: writing
2014-07-14 11:14:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.179286591710618204735552782113899554577.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.179286591710618204735552782113899554577.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.236200594210630633209414245593478745077.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.236200594210630633209414245593478745077.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.317968792110805084137578321032090512715.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.317968792110805084137578321032090512715.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:10 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.240882935612623175326552218904284767861.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:10 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.240882935612623175326552218904284767861.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:20 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.326936563412045209915197157412873710650.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:20 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.326936563412045209915197157412873710650.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.374545813112830643437907913453890479578.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.374545813112830643437907913453890479578.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:40 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.357050522513076368008117917790618301757.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:40 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.357050522513076368008117917790618301757.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:14:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.309274257111616478028464734013747865690.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:14:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.309274257111616478028464734013747865690.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:15:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.412443993012771982308993353533716469744.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:15:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.412443993012771982308993353533716469744.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:15:10 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.65480341910324139030131526623446252073.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:15:10 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.65480341910324139030131526623446252073.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:15:20 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.375827079310864020138319581840082747833.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:15:20 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.375827079310864020138319581840082747833.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:15:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.18641582812235784034065473692347894151.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:15:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.18641582812235784034065473692347894151.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:15:40 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.413581047711015656019156205363197658693.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:15:40 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.413581047711015656019156205363197658693.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:15:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.18223446012017515926628225320608861956.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:15:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.18223446012017515926628225320608861956.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:16:00 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.43567706012265823333742117183251911731.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:16:00 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.43567706012265823333742117183251911731.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:16:10 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.132390305611991983810832597760234972317.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:16:10 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.132390305611991983810832597760234972317.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:16:20 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.252929924711081195820293620992861468262.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:16:20 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.252929924711081195820293620992861468262.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-14 11:16:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.105829443911716004137195106594033441532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-14 11:16:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.40.0.1001.689988/1.2.840.12345613/1.3.6.1.4.1.9590.100.1.2.105829443911716004137195106594033441532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}