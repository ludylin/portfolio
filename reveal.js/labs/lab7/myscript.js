function start()
{
	var button = document.getElementById("caculateButton");
	button.addEventListener("click", displayVolume, false);
}

function displayVolume()
{
	document.getElementById('myid').innerHTML = 'Welcome!';
}//起始標籤結束標籤中（innerHTML）包括標籤（outterHTML）	
window.addEventListener( "load", start, false );