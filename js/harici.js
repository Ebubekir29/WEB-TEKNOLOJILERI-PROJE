/*İletişim kısmı javascript kodları*/
function control() {
    var x = document.forms["Form"]["name"].value;
    if (x == "") {
        alert("İsim boş bırakılamaz!!!");
        return false;
    }

    var y = document.forms["Form"]["email"].value;
    if (y == "") {
        alert("Mail Kısmı Boş bırakılamaz!!!");
        return false;
    }
    if ((!(document.getElementById('kadın').checked) && (!(document.getElementById('erkek').checked)))) {
        alert("Cinsiyet alanı boş bırakılamaz");
        return false;

    }
    
    var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
    if (forMail.test(y) == false) {
        alert("Geçersiz Mail Adresi!!!");
        return false;
    }
}

/*giriş.html sitesi için js kodları */ 
function control() {	
    var y = document.forms["Form"]["email"].value;
    if (y == "") {
        alert("kullanıcı adı boş bırakılamaz!!!");
        return false;
    }
    var x = document.forms["Form"]["password"].value;
    if (x == "") {
        alert("Şifre boş bırakılamaz!!!");
        return false;
    }
    var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
    if (forMail.test(y) == false) {
        alert("Geçersiz Kullanıcı Adı!!!");
        return false;
    }
}

