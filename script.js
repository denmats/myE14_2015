
function suma()
{
	 a = document.getElementById('a').value;
	 b = document.getElementById('b').value;
	(!a || !b)? document.getElementById('result').innerHTML='Proszę uzupełnić obie liczby':
	document.getElementById('result').innerHTML=+a+(+b);
}

function roznica()
{
	 a = document.getElementById('a').value;
	 b = document.getElementById('b').value;
	(!a || !b)? document.getElementById('result').innerHTML='Proszę uzupełnić obie liczby':
	document.getElementById('result').innerHTML=a-b;
}

function iloraz()
{
	 a = document.getElementById('a').value;
	 b = document.getElementById('b').value;
	(!a || !b)? document.getElementById('result').innerHTML='Proszę uzupełnić obie liczby':
	document.getElementById('result').innerHTML=a*b;
}

function iloczyn()
{
	 a = document.getElementById('a').value;
	 b = document.getElementById('b').value;
	(!a|| !b) ? document.getElementById('result').innerHTML='Proszę uzupełnić obie liczby':
	(b==0) ? document.getElementById('result').innerHTML='Nie wolno dzielić przez zero!':
	document.getElementById('result').innerHTML=a/b;
}