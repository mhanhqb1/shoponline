var url = document.URL;
var page = url.substr(0, url.indexOf("?")) + "?controller=master&action=news&function=list_news_prod";
var c=10;
var t;
var theDate = new Date();
s=theDate.getSeconds();
function get(id){
	if(document.getElementById) return document.getElementById(id);
}
function ChangeUrl(site){
get("container").innerHTML = c;
c-=1;
url=site;
t=setTimeout("ChangeUrl(url)",1000);
stopCount(c,url);
}
function stopCount(c,link){
if(c==-1)
{clearTimeout(t);
location.href=link;}
}
ChangeUrl(page);