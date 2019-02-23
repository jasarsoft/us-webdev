
//Petlja kroz niz objekata

var objekti = [
	{ // Objekat 0 index
		username: "nikola",
		password: "123"
	},
	{ // Objekat 1 index
		username: "marko",
		password: "123"
	},
	{ // Objekat 2 index
		username: "pera",
		password: "123"
	}

]

function getInfo() {
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;

	for(var i = 0; i < objekti.length; i++) {
		//proverava da li se uneseni inputi poklapaju sa imenom i sifrom trenutnih objekata niza
		if(username == objekti[i].username && password == objekti[i].password) {
			console.log(username + " je ulogovan!");
			//zaustavalja funkciju ako je true
			return;
		}
	}
	console.log("korisnicko ime ili sifra nije ispravno uneseno");
}