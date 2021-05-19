

function kontrolet()
	{
	var email = document.getElementById("email").value;
	var regex = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
	if (!(regex.test(email)==true))
	{alert("Geçersiz mail adresi girdiniz!");}

    if((!(document.getElementById('kadın').checked) && (!(document.getElementById('erkek').checked)))) {
alert("Geçersiz cinnsiyet seçimi");
    }
    if((document.getElementById("hobi").checked))
    alert("geçersiz");
	}
