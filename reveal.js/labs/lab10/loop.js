var i = 1;
var j;
var ans = ' ';
var d = ' ';
while(i <= 9)
{	
	ans = ' ';
	d = 'd' + i;
	j = 1;
	while(j <= 9)
	{	
		ans += i + 'x' + j + '='  + i*j + '<br />';
		j++;
	}
	document.getElementById(d).innerHTML = ans;
	i++;
}