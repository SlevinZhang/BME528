<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-07-15 07:08:03 --- ERROR: writing
2014-07-15 07:08:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.135.2025.1751190.4526.1195651580.319/1.2.840.113619.2.135.2025.1751190.4468.1195651637.234/1.3.6.1.4.1.9590.100.1.2.395440752511198620633514072432516084188.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-15 07:08:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.135.2025.1751190.4526.1195651580.319/1.2.840.113619.2.135.2025.1751190.4468.1195651637.234/1.3.6.1.4.1.9590.100.1.2.395440752511198620633514072432516084188.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2014-07-15 07:08:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.135.2025.1751190.4526.1195651580.319/1.2.840.113619.2.135.2025.1751190.4468.1195651636.955/1.3.6.1.4.1.9590.100.1.2.14075499512999771633616236861956831820.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2014-07-15 07:08:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.135.2025.1751190.4526.1195651580.319/1.2.840.113619.2.135.2025.1751190.4468.1195651636.955/1.3.6.1.4.1.9590.100.1.2.14075499512999771633616236861956831820.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}