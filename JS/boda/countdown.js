simplyCountdown('#cuenta', {
	year: 2024, // required
	month: 11, // required
	day: 23, // required
	hours: 18, // Default is 0 [0-23] integer
	minutes: 0, // Default is 0 [0-59] integer
	seconds: 0, // Default is 0 [0-59] integer
	words: { //words displayed into the countdown
		days: 'Día',
		hours: 'Hora',
		minutes: 'Minuto',
		seconds: 'Segundo',
		pluralLetter: 's'
	},
	plural: true, //use plurals
	inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
	inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
	// in case of inline set to false
	enableUtc: true, //Use UTC as default
	onEnd: function() {
		document.getElementById('portada').classList.add('oculta');
		return; 
	}, //Callback on countdown end, put your own function here
	refresh: 1000, // default refresh every 1s
	sectionClass: 'simply-section', //section css class
	amountClass: 'simply-amount', // amount css class
	wordClass: 'simply-word', // word css class
	zeroPad: false,
	countUp: false
});

// document.getElementById("regalo-o-sobre").addEventListener("click", function() {
//     var div = document.getElementById("datosBancarios");
//     if (div.classList.contains("mostrar")) {
//         div.classList.remove("mostrar");
//     } else {
//         div.classList.add("mostrar");
//     }
// });


document.getElementById("whatsappDiv1").onclick = function() {
    var phoneNumber = "525636192751"; // Reemplaza con el número de teléfono
    var message1 = "Hola Evelyn, Muchas gracias por invitarme a tu Celebración, mi respuesta a tu invitación es: "; // Mensaje predeterminado
    var url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message1);
    window.open(url, "_blank");
};

document.getElementById("whatsappDiv2").onclick = function() {
    var phoneNumber = "525511976198"; // Reemplaza con el número de teléfono
    var message2 = "Hola Alberto, Muchas gracias por invitarme a tu Celebración, mi respuesta a tu invitación es: "; // Mensaje predeterminado
    var url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message2);
    window.open(url, "_blank");
};
