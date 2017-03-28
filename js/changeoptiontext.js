// JavaScript Document
var otext=new optiondict('AII');

$('td').each(function(){
	switch($(this).text())
	{
		case "1":
			$(this).text(otext.optiontext[1]);
			break;
		case "2":
			$(this).text(otext.optiontext[2]);
			break;	
		case "3":
			$(this).text(otext.optiontext[3]);
			break;
	}
	});