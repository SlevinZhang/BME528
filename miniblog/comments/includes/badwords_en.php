<?php

/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
//////								   //////
//////								   //////
//////		phpMyPhilter 1.0				   //////
//////								   //////
//////		Filter bad words on all your scripts.		   //////
//////								   //////
//////		http://www.amazemail.com			   //////
//////								   //////
//////								   //////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////
//                                                                     //
//  English version                                                    //
//                                                                     //
//  WARNING - Dirty area below. Do not cross this line without gloves  //
//                                                                     //
/////////////////////////////////////////////////////////////////////////

$badwords = array (
	array(" ass "," a** "),
	array("a s s","a**"),
	array("a.s.s","a**"),
	array("asshole","a******"),
	array("a s s h o l e","a******"),
	array("a.s.s.h.o.l.e","a******"),
	array("ass hole","a******"),
	array("a.s.s h.o.l.e","a******"),
	array("bitch","b****"),
	array("b i t c h","b****"),
	array("b.i.t.c.h","b****"),
	array(" butt "," b*** "),
	array("buttfucker","b*********"),
	array("b u t t f u c k e r","b*********"),
	array("b.u.t.t.f.u.c.k.e.r","b*********"),
	array("butt fucker","b*********"),
	array("b.u.t.t f.u.c.k.e.r","b*********"),
	array("b u t t","b***"),
	array("b.u.t.t","b***"),
	array(" cock "," c*** "),
	array("c o c k","c***"),
	array("c.o.c.k","c***"),
	array("crap","c***"),
	array("c r a p","c***"),
	array("c.r.a.p","c***"),
	array("cunt","c***"),
	array("c u n t","c***"),
	array("c.u.n.t","c***"),
	array("cuck","c***"),
	array("c u c k","c***"),
	array("c.u.c.k","c***"),
	array("d i c k","d***"),
	array("d.i.c.k","d***"),
	array("fuck","f***"),
	array("f u c k","f***"),
	array("f.u.c.k","f***"),
	array("fucking","f******"),
	array("f u c k i n g","f******"),
	array("f.u.c.k.i.n.g","f******"),
	array("fuk","f***"),
	array("f u k","f***"),
	array("f.u.k","f***"),
	array("jackass","j*** a**"),
	array("jack ass","j*** a**"),
	array("j a c k a s s","j*** a**"),
	array("j.a.c.k.a.s.s","j*** a**"),
	array("jerk","j***"),
	array("j e r k","j***"),
	array("j.e.r.k","j***"),
	array("jerck","j***"),
	array("j e r c k","j***"),
	array("j.e.r.c.k","j***"),
	array("jerq","j***"),
	array("j e r q","j***"),
	array("j.e.r.q","j***"),
	array("motherfucker","m***********"),
	array("m o t h e r f u c k e r","m***********"),
	array("m.o.t.h.e.r.f.u.c.k.e.r","m***********"),
	array("mother fucker","m***********"),
	array("m.o.t.h.e.r f.u.c.k.e.r","m***********"),
	array("my cock","my c***"),
	array("my dick","my d***"),
	array("poop","p***"),
	array("p o o p","p***"),
	array("p.o.o.p","p***"),
	array("shit","s***"),
	array("s h i t","s***"),
	array("s.h.i.t","s***"),
	array("s o n o f a","s** ** *"),
	array("s.o.n o.f a","s** ** *"),
	array("s.o.n.o.f.a.","s** ** *"),
	array("suck","s***"),
	array("s u c k","s***"),
	array("s.u.c.k","s***"),
	array("your cock","your c***"),
	array("your dick","your d***")

);
?>