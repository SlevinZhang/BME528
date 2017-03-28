<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-03-10 08:17:56 --- ERROR: writing
2015-03-10 08:17:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.7/1.3.6.1.4.1.9590.100.1.2.3176004612656104039852576272966061270.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:17:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.7/1.3.6.1.4.1.9590.100.1.2.3176004612656104039852576272966061270.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:17:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.7.1.1.5332.1320001428.132/1.3.6.1.4.1.9590.100.1.2.428816348611725695523582519190068171514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:17:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.7.1.1.5332.1320001428.132/1.3.6.1.4.1.9590.100.1.2.428816348611725695523582519190068171514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:17:56 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001261.3/1.3.6.1.4.1.9590.100.1.2.326029073311189965410058669033030957783.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:17:56 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001261.3/1.3.6.1.4.1.9590.100.1.2.326029073311189965410058669033030957783.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:17:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.11/1.3.6.1.4.1.9590.100.1.2.159316199611147256301191041570656329282.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:17:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.11/1.3.6.1.4.1.9590.100.1.2.159316199611147256301191041570656329282.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:17:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.12/1.3.6.1.4.1.9590.100.1.2.391165728211389155322970100531461246632.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:17:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.12/1.3.6.1.4.1.9590.100.1.2.391165728211389155322970100531461246632.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:17:58 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.3.6.1.4.1.23849.512418663.11.1634556129373024506.2.2/1.3.6.1.4.1.9590.100.1.2.136663031711492445330471948154274018385.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:17:58 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.3.6.1.4.1.23849.512418663.11.1634556129373024506.2.2/1.3.6.1.4.1.9590.100.1.2.136663031711492445330471948154274018385.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.7/1.3.6.1.4.1.9590.100.1.2.3176004612656104039852576272966061270.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.7/1.3.6.1.4.1.9590.100.1.2.3176004612656104039852576272966061270.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.3.6.1.4.1.23849.512418663.11.1634556129373024506.2.2/1.3.6.1.4.1.9590.100.1.2.136663031711492445330471948154274018385.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.3.6.1.4.1.23849.512418663.11.1634556129373024506.2.2/1.3.6.1.4.1.9590.100.1.2.136663031711492445330471948154274018385.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.12/1.3.6.1.4.1.9590.100.1.2.391165728211389155322970100531461246632.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.12/1.3.6.1.4.1.9590.100.1.2.391165728211389155322970100531461246632.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.11/1.3.6.1.4.1.9590.100.1.2.159316199611147256301191041570656329282.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.11/1.3.6.1.4.1.9590.100.1.2.159316199611147256301191041570656329282.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.7.1.1.5332.1320001428.132/1.3.6.1.4.1.9590.100.1.2.428816348611725695523582519190068171514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.7.1.1.5332.1320001428.132/1.3.6.1.4.1.9590.100.1.2.428816348611725695523582519190068171514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001261.3/1.3.6.1.4.1.9590.100.1.2.326029073311189965410058669033030957783.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001261.3/1.3.6.1.4.1.9590.100.1.2.326029073311189965410058669033030957783.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:17 --- ERROR: writing
2015-03-10 08:18:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/2.16.840.1.113786.1.229.59.604964403.3951/2.16.840.1.113786.3.3139174.6103.3.501/2.16.840.1.113786.2.3139174.6103.11.229.77.636045337.13.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/2.16.840.1.113786.1.229.59.604964403.3951/2.16.840.1.113786.3.3139174.6103.3.501/2.16.840.1.113786.2.3139174.6103.11.229.77.636045337.13.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/2.16.840.1.113786.1.229.59.604964403.3951/2.16.840.1.113786.3.3139174.6103.3.501/2.16.840.1.113786.2.3139174.6103.11.229.77.636045337.13.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/2.16.840.1.113786.1.229.59.604964403.3951/2.16.840.1.113786.3.3139174.6103.3.501/2.16.840.1.113786.2.3139174.6103.11.229.77.636045337.13.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.7/1.3.6.1.4.1.9590.100.1.2.3176004612656104039852576272966061270.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.7/1.3.6.1.4.1.9590.100.1.2.3176004612656104039852576272966061270.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001261.3/1.3.6.1.4.1.9590.100.1.2.326029073311189965410058669033030957783.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001261.3/1.3.6.1.4.1.9590.100.1.2.326029073311189965410058669033030957783.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.11/1.3.6.1.4.1.9590.100.1.2.159316199611147256301191041570656329282.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.11/1.3.6.1.4.1.9590.100.1.2.159316199611147256301191041570656329282.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.7.1.1.5332.1320001428.132/1.3.6.1.4.1.9590.100.1.2.428816348611725695523582519190068171514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.7.1.1.5332.1320001428.132/1.3.6.1.4.1.9590.100.1.2.428816348611725695523582519190068171514.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.3.6.1.4.1.23849.512418663.11.1634556129373024506.2.2/1.3.6.1.4.1.9590.100.1.2.136663031711492445330471948154274018385.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.3.6.1.4.1.23849.512418663.11.1634556129373024506.2.2/1.3.6.1.4.1.9590.100.1.2.136663031711492445330471948154274018385.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:18:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.12/1.3.6.1.4.1.9590.100.1.2.391165728211389155322970100531461246632.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:18:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113704.1.111.6124.1320001259.1/1.2.840.113704.1.111.6124.1320001323.12/1.3.6.1.4.1.9590.100.1.2.391165728211389155322970100531461246632.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:19:13 --- ERROR: writing
2015-03-10 08:19:13 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:19:13 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:19:14 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:19:14 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:19:14 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:19:14 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:19:14 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:19:14 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:19:42 --- ERROR: writing
2015-03-10 08:19:48 --- ERROR: writing
2015-03-10 08:19:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.6097.5266962/1.3.12.2.1107.5.1.4.54588.30000012101010552354600001593/1.3.6.1.4.1.9590.100.1.2.396313318113158530004206734190346441809.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:19:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113745.101000.1152000.41190.6097.5266962/1.3.12.2.1107.5.1.4.54588.30000012101010552354600001593/1.3.6.1.4.1.9590.100.1.2.396313318113158530004206734190346441809.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:04 --- ERROR: writing
2015-03-10 08:20:04 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071053.4980.1264.351258399205.0/1.2.840.113747.1307071053.4980.1264.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:04 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071053.4980.1264.351258399205.0/1.2.840.113747.1307071053.4980.1264.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220712235.1307012788.24782/1.2.392.200036.9116.2.5.1.48.1220712235.1307012788.80349.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220712235.1307012788.24782/1.2.392.200036.9116.2.5.1.48.1220712235.1307012788.80349.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012162.391846/1.2.392.200036.9116.2.5.1.48.1220883143.1307012162.398724.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012162.391846/1.2.392.200036.9116.2.5.1.48.1220883143.1307012162.398724.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220712235.1307012728.904319/1.2.392.200036.9116.2.5.1.48.1220712235.1307012728.954796.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220712235.1307012728.904319/1.2.392.200036.9116.2.5.1.48.1220712235.1307012728.954796.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:05 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.1220883143.1307012296.4.1020700002.6/1.2.392.200036.9116.2.1220883143.1307012345.389017.6.1601.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:05 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.1220883143.1307012296.4.1020700002.6/1.2.392.200036.9116.2.1220883143.1307012345.389017.6.1601.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:06 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071038.5080.4748.351258399205.0/1.2.840.113747.1307071038.5080.4748.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:06 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071038.5080.4748.351258399205.0/1.2.840.113747.1307071038.5080.4748.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:06 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071043.2660.2656.351258399205.0/1.2.840.113747.1307071043.2660.2656.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:06 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071043.2660.2656.351258399205.0/1.2.840.113747.1307071043.2660.2656.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:06 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071048.5096.4956.351258399205.0/1.2.840.113747.1307071048.5096.4956.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:06 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071048.5096.4956.351258399205.0/1.2.840.113747.1307071048.5096.4956.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:07 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.1220883143.1307012296.4.1020700002.1/1.2.392.200036.9116.2.1220883143.1307012296.569456.1.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:07 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.1220883143.1307012296.4.1020700002.1/1.2.392.200036.9116.2.1220883143.1307012296.569456.1.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:07 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012506.479910/1.2.392.200036.9116.2.5.1.48.1220883143.1307012505.716006.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:07 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012506.479910/1.2.392.200036.9116.2.5.1.48.1220883143.1307012505.716006.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:07 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220712235.1307012758.347067/1.2.392.200036.9116.2.5.1.48.1220712235.1307012758.404086.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:07 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220712235.1307012758.347067/1.2.392.200036.9116.2.5.1.48.1220712235.1307012758.404086.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:07 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071219.4036.3580.351258399205.0/1.2.840.113747.1307071219.4036.3580.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:07 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071219.4036.3580.351258399205.0/1.2.840.113747.1307071219.4036.3580.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:07 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071231.4436.3048.351258399205.0/1.2.840.113747.1307071231.4436.3048.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:07 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071231.4436.3048.351258399205.0/1.2.840.113747.1307071231.4436.3048.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012021.496060/1.2.392.200036.9116.2.5.1.48.1220883143.1307012021.504112.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012021.496060/1.2.392.200036.9116.2.5.1.48.1220883143.1307012021.504112.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071225.1020.3396.351258399205.0/1.2.840.113747.1307071225.1020.3396.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071225.1020.3396.351258399205.0/1.2.840.113747.1307071225.1020.3396.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:08 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012573.974689/1.2.392.200036.9116.2.5.1.48.1220883143.1307012573.987160.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:08 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012573.974689/1.2.392.200036.9116.2.5.1.48.1220883143.1307012573.987160.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071236.2700.4732.351258399205.0/1.2.840.113747.1307071236.2700.4732.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071236.2700.4732.351258399205.0/1.2.840.113747.1307071236.2700.4732.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071033.3396.3664.351258399205.0/1.2.840.113747.1307071033.3396.3664.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.840.113747.1307071033.3396.3664.351258399205.0/1.2.840.113747.1307071033.3396.3664.351258399205.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012135.61962/1.2.392.200036.9116.2.5.1.48.1220883143.1307012135.68060.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.392.200036.9116.2.5.1.48.1220883143.1307011942.943747/1.2.392.200036.9116.2.5.1.48.1220883143.1307012135.61962/1.2.392.200036.9116.2.5.1.48.1220883143.1307012135.68060.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203550906/1.2.840.113619.2.55.3.2802479126.738.1255695134.307.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203550906/1.2.840.113619.2.55.3.2802479126.738.1255695134.307.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:22 --- ERROR: writing
2015-03-10 08:20:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203550937/1.2.528.1.1001.100.4.881.461.522848562.20130409203550953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203550937/1.2.528.1.1001.100.4.881.461.522848562.20130409203550953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:22 --- ERROR: writing
2015-03-10 08:20:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203551578/1.2.528.1.1001.100.4.881.461.522848562.20130409203551593.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203551578/1.2.528.1.1001.100.4.881.461.522848562.20130409203551593.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:22 --- ERROR: writing
2015-03-10 08:20:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203552218/1.2.528.1.1001.100.4.881.461.522848562.20130409203552234.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203552218/1.2.528.1.1001.100.4.881.461.522848562.20130409203552234.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203552296/1.2.74.13414076462.1227.1633913139494397059.2.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203552296/1.2.74.13414076462.1227.1633913139494397059.2.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203552265/1.2.840.113619.2.55.3.2802479126.738.1255695134.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.3.881.461.522848562.20130409203552265/1.2.840.113619.2.55.3.2802479126.738.1255695134.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.25.881.461.522848562.20130409203552328/1.2.528.1.1001.100.25.881.461.522848562.20130409203552328.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.528.1.1001.100.2.881.461.522848562.20130409203550890/1.2.528.1.1001.100.25.881.461.522848562.20130409203552328/1.2.528.1.1001.100.25.881.461.522848562.20130409203552328.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:27 --- ERROR: writing
2015-03-10 08:20:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.392.200036.9116.2.6.1.48.1215563772.1338644098.561855/1.3.6.1.4.1.9590.100.1.2.304315950022031282225090129982420831296.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.392.200036.9116.2.6.1.48.1215563772.1338644098.561855/1.3.6.1.4.1.9590.100.1.2.304315950022031282225090129982420831296.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:27 --- ERROR: writing
2015-03-10 08:20:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.840.113747.1338742299.5428.7904.15275225100224220.6/1.3.6.1.4.1.9590.100.1.2.359625658220179182122986114862983012890.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.840.113747.1338742299.5428.7904.15275225100224220.6/1.3.6.1.4.1.9590.100.1.2.359625658220179182122986114862983012890.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.840.113747.1338703738.7392.6516.15614215325227108.6/1.3.6.1.4.1.9590.100.1.2.310027892338967229625374107801952158859.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.840.113747.1338703738.7392.6516.15614215325227108.6/1.3.6.1.4.1.9590.100.1.2.310027892338967229625374107801952158859.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.392.200036.9116.2.6.1.48.1215563772.1338643909.540968/1.3.6.1.4.1.9590.100.1.2.108237303125129432025163806243910939883.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.392.200036.9116.2.6.1.48.1215563772.1338643909.540968/1.3.6.1.4.1.9590.100.1.2.108237303125129432025163806243910939883.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.392.200036.9116.2.6.1.48.1215563772.1338643778.228715/1.3.6.1.4.1.9590.100.1.2.152709574731586604622618871263608734484.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.229909.20120602220344/1.2.392.200036.9116.2.6.1.48.1215563772.1338643778.228715/1.3.6.1.4.1.9590.100.1.2.152709574731586604622618871263608734484.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:37 --- ERROR: writing
2015-03-10 08:20:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.482/1.2.840.113619.2.284.3.1258949330.607.1349849331.483.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.482/1.2.840.113619.2.284.3.1258949330.607.1349849331.483.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:37 --- ERROR: writing
2015-03-10 08:20:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.409.3/1.2.840.113619.2.284.3.1258949330.607.1349849331.474.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.409.3/1.2.840.113619.2.284.3.1258949330.607.1349849331.474.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:37 --- ERROR: writing
2015-03-10 08:20:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666159.123.4.1/1.2.840.113619.2.80.1943637553.3949.1350666159.124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666159.123.4.1/1.2.840.113619.2.80.1943637553.3949.1350666159.124.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666165.170.4.1/1.2.840.113619.2.80.1943637553.3949.1350666165.171.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666165.170.4.1/1.2.840.113619.2.80.1943637553.3949.1350666165.171.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666171.217.4.1/1.2.840.113619.2.80.1943637553.3949.1350666171.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666171.217.4.1/1.2.840.113619.2.80.1943637553.3949.1350666171.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.482.5/1.2.840.113619.2.284.3.1258949330.607.1349849331.784.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.482.5/1.2.840.113619.2.284.3.1258949330.607.1349849331.784.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/2.16.840.1.113786.3.3633730.6103.3.501/2.16.840.1.113786.2.3633730.6103.11.229.123.635371465.2139.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/2.16.840.1.113786.3.3633730.6103.3.501/2.16.840.1.113786.2.3633730.6103.11.229.123.635371465.2139.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.409/1.2.840.113619.2.284.3.1258949330.607.1349849331.410.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.409/1.2.840.113619.2.284.3.1258949330.607.1349849331.410.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666098.1.4.1/1.2.840.113619.2.80.1943637553.3949.1350666098.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666098.1.4.1/1.2.840.113619.2.80.1943637553.3949.1350666098.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.780/1.2.840.113619.2.284.3.1258949330.607.1349849331.781.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.780/1.2.840.113619.2.284.3.1258949330.607.1349849331.781.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666123.69.4.1/1.2.840.113619.2.80.1943637553.3949.1350666124.70.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.80.1943637553.3949.1350666123.69.4.1/1.2.840.113619.2.80.1943637553.3949.1350666124.70.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.406/1.2.840.113619.2.284.3.1258949330.607.1349849331.407.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.607.1349849331.404/1.2.840.113619.2.284.3.1258949330.607.1349849331.406/1.2.840.113619.2.284.3.1258949330.607.1349849331.407.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:45 --- ERROR: writing
2015-03-10 08:20:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004611/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004612.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004611/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004612.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:45 --- ERROR: writing
2015-03-10 08:20:45 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027492/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027493.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:45 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027492/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027493.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:46 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004613/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004614.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:46 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004613/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004614.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026959.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026959.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026960.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026960.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:47 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026962.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:47 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026962.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:48 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:48 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:49 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026964.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:49 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026964.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026966.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026966.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026965.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026965.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026967.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026967.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026968.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026968.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026969.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026969.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026971.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026971.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026972.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:20:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026972.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:20:58 --- ERROR: writing
2015-03-10 08:21:01 --- ERROR: writing
2015-03-10 08:21:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.364.1333361940.406/2.16.840.1.113786.3.3170546.6103.3.501/2.16.840.1.113786.2.3170546.6103.11.229.77.636046331.1652.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.284.3.1258949330.364.1333361940.406/2.16.840.1.113786.3.3170546.6103.3.501/2.16.840.1.113786.2.3170546.6103.11.229.77.636046331.1652.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:16 --- ERROR: writing
2015-03-10 08:21:16 --- ERROR: writing
2015-03-10 08:21:18 --- ERROR: writing
2015-03-10 08:21:18 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.967/1.2.840.113619.2.55.3.2091261148.951.1282119081.968.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:18 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.967/1.2.840.113619.2.55.3.2091261148.951.1282119081.968.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:18 --- ERROR: writing
2015-03-10 08:21:18 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.926/1.2.840.113619.2.55.3.2091261148.951.1282119081.927.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:18 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.926/1.2.840.113619.2.55.3.2091261148.951.1282119081.927.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:18 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.923/1.2.840.113619.2.55.3.2091261148.951.1282119081.924.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:18 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.923/1.2.840.113619.2.55.3.2091261148.951.1282119081.924.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.926/1.2.840.113619.2.55.3.2091261148.951.1282119081.927.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.55.3.2091261148.951.1282119081.921/1.2.840.113619.2.55.3.2091261148.951.1282119081.926/1.2.840.113619.2.55.3.2091261148.951.1282119081.927.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:38 --- ERROR: writing
2015-03-10 08:21:38 --- ERROR: writing
2015-03-10 08:21:38 --- ERROR: writing
2015-03-10 08:21:42 --- ERROR: writing
2015-03-10 08:21:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027492/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027493.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027492/1.3.12.2.1107.5.1.4.73339.30000012052611285504600027493.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004611/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004612.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004611/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004612.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:50 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004613/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004614.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:50 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004613/1.3.12.2.1107.5.1.4.73339.30000012052609302467100004614.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026958.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026959.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026959.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026960.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026960.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026961.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:51 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026962.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:51 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026962.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:52 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:52 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026963.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:53 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026964.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:53 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026964.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:54 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026965.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:54 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026965.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:55 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026966.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:55 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026966.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:21:57 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026967.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:21:57 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113619.2.182.10351255210446.1338111245.3675869/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026957/1.3.12.2.1107.5.1.4.73339.30000012052611285504600026967.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:22:02 --- ERROR: writing
2015-03-10 08:22:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014394.294802/1.2.392.200036.9116.2.6.1.48.1215563772.1345014394.336928.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:22:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014394.294802/1.2.392.200036.9116.2.6.1.48.1215563772.1345014394.336928.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:22:02 --- ERROR: writing
2015-03-10 08:22:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014308.15898/1.2.392.200036.9116.2.6.1.48.1215563772.1345014308.23161.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:22:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014308.15898/1.2.392.200036.9116.2.6.1.48.1215563772.1345014308.23161.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:22:02 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.453798.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:22:02 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.453798.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:22:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.642692.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:22:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.642692.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:22:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.968268.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:22:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.968268.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:22:03 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.812483.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:22:03 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281361.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345014498.750518/1.2.392.200036.9116.2.6.1.48.1215563772.1345014499.812483.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:06 --- ERROR: writing
2015-03-10 08:24:09 --- ERROR: writing
2015-03-10 08:24:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.6001/1.2.392.200036.9116.4.1.5638.23502.6.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.8001/1.2.392.200036.9116.4.1.5638.23502.8.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:09 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:09 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113711.7041813.2.7792.331580594.26.2116281012.118340/1.2.392.200036.9116.4.1.5638.23502.7001/1.2.392.200036.9116.4.1.5638.23502.7.1001.1.4884977.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:25 --- ERROR: writing
2015-03-10 08:24:25 --- ERROR: writing
2015-03-10 08:24:25 --- ERROR: writing
2015-03-10 08:24:33 --- ERROR: writing
2015-03-10 08:24:33 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:33 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:33 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:33 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:33 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:33 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:33 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:33 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:24:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:24:59 --- ERROR: writing
2015-03-10 08:24:59 --- ERROR: writing
2015-03-10 08:24:59 --- ERROR: writing
2015-03-10 08:24:59 --- ERROR: writing
2015-03-10 08:25:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:01 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:01 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:23 --- ERROR: writing
2015-03-10 08:25:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:29 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:29 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:25:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:25:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:27:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2015-03-10 08:27:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL DICOM Header was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#3 {main}
2015-03-10 08:28:21 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:21 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:30 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:30 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:28:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:28:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:12 --- ERROR: writing
2015-03-10 08:37:12 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:12 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:12 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:12 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:12 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:12 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:13 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:13 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:13 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:13 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:13 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:13 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:17 --- ERROR: writing
2015-03-10 08:37:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.604739/1.2.392.200036.9116.2.6.1.48.1215563772.1345015549.610784.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.840.113747.3554038156540.123.540935855.173274815.173994952/1.2.840.113747.3554038156543.123.540935855.173274816.173994953.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.689912/1.2.392.200036.9116.2.6.1.48.1215563772.1345015931.703473.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:37:17 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:37:17 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.840.113696.658005.500.281364.2012081515589/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.28776/1.2.392.200036.9116.2.6.1.48.1215563772.1345015445.32379.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:39:43 --- ERROR: writing
2015-03-10 08:40:19 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:19 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:22 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:22 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:23 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:23 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:24 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:24 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:25 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:25 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:26 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:26 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:27 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:27 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:40:28 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:40:28 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:31 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:31 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264993.144/1.2.840.113704.7.1.1.7288.1336264999.509.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:34 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:34 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265074.368/1.2.840.113704.7.1.1.7288.1336265079.747.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:34 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:34 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264731.66/1.2.840.113704.1.111.5476.1336264764.14654.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:34 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:34 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.55/1.2.840.113704.1.111.5476.1336264740.14532.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:34 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:34 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264948.500/1.2.840.113704.7.1.1.7288.1336264953.929.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264078.17/1.2.840.113704.1.111.5476.1336264105.14150.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:35 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:35 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268080.2420.6872.241695111237146.236/1.2.840.113747.1336268081.2420.6872.241695111237146.238.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265507.326/1.2.840.113704.7.1.1.6260.1336265510.753.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:36 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:36 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267966.2420.6872.241695111237146.0/1.2.840.113747.1336267967.2420.6872.241695111237146.2.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336265045.691/1.2.840.113704.7.1.1.7288.1336265050.143.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:37 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:37 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264173.1/1.2.840.113704.7.1.1.6020.1336264173.66.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264197.98/1.2.840.113704.7.1.1.6020.1336264198.350.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268046.2420.6872.241695111237146.177/1.2.840.113747.1336268047.2420.6872.241695111237146.179.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6020.1336264231.474/1.2.840.113704.7.1.1.6020.1336264232.655.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268029.2420.6872.241695111237146.118/1.2.840.113747.1336268030.2420.6872.241695111237146.120.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.7288.1336264893.1/1.2.840.113704.7.1.1.7288.1336264897.334.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.3736.1336265087.382/1.2.840.113704.7.1.1.3736.1336265108.384.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:38 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:38 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336263972.3/1.2.840.113704.7.1.1.5164.1336264049.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264043.9/1.2.840.113704.1.111.5476.1336264085.14117.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336267994.2420.6872.241695111237146.59/1.2.840.113747.1336267995.2420.6872.241695111237146.63.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113747.1336268088.2420.6872.241695111237146.295/1.2.840.113747.1336268088.2420.6872.241695111237146.297.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264554.26/1.2.840.113704.1.111.5476.1336264579.14449.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.7.1.1.6260.1336265371.1/1.2.840.113704.7.1.1.6260.1336265373.218.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}
2015-03-10 08:42:39 --- ERROR: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
2015-03-10 08:42:39 --- STRACE: ErrorException [ 2 ]: filesize(): stat failed for /home/pacsproxy/www/wado/kohana/application/cache/.images/1.2.124.113532.25649.20559.62964.20120505.171944.255867620/1.2.840.113704.1.111.788.1336264630.51/1.2.840.113704.7.1.1.7444.1336264658.1.dcm ~ MODPATH/wadopre/classes/wado.php [ 321 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', '/home/pacsproxy...', 321, Array)
#1 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(321): filesize('/home/pacsproxy...')
#2 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/wado.php(335): Wado->execute()
#3 /home/pacsproxy/www/wado/kohana/modules/wadopre/classes/controller/wado.php(42): Wado->show()
#4 [internal function]: Controller_Wado->action_index()
#5 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Wado))
#6 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/pacsproxy/www/wado/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/pacsproxy/www/wado/www/index.php(105): Kohana_Request->execute()
#9 {main}