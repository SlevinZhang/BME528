// JavaScript Document
$(".result").each(function(){
if(!$(this).html().trim())
{
	$(this).html("(NULL)");	
}	
});
