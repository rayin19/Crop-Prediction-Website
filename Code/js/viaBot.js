


//botStatus.innerHTML = "Connected";
function checkStatus(bot_dataRes, bot_rain, bot_temp, bot_pH, bot_N, bot_P, bot_K){
	
	var botStatus = document.getElementById("addOnRes");
	var rain = document.getElementById("rain");
	var temp = document.getElementById("temp");
	var pH = document.getElementById("pH");
	var N = document.getElementById("N");
	var P = document.getElementById("P");
	var K = document.getElementById("K");
	
	if(bot_dataRes == 1){
		//Status Data
		botStatus.textContent = "Connected";
		if(botStatus.classList.contains("alert-warning"))
			botStatus.classList.remove("alert-warning");
		if(botStatus.classList.contains("alert-danger"))
			botStatus.classList.remove("alert-danger");
		botStatus.classList.add("alert-success");
		
		//Rain
		rain.value = Number(bot_rain);
		
		//Temp
		temp.value = Number(bot_temp);
		
		//pH
		pH.value = Number(bot_pH);
		
		//NPK
		if(bot_N == 1)
			N.checked = true;
		if(bot_P  == 1)
			P.checked = true;
		if(bot_K == 1)
			K.checked = true;
	}
		
	else{
		botStatus.textContent = "Disconnected";
		if(botStatus.classList.contains("alert-warning"))
			botStatus.classList.remove("alert-warning");
		if(botStatus.classList.contains("alert-success"))
			botStatus.classList.remove("alert-success");
		botStatus.classList.add("alert-danger");
	}
		
	
	
	
}