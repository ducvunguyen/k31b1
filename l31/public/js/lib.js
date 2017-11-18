window.lib = {
	txt: document.getElementById('ipText'),
	vowel: "ueoai",
	getLength: function(){
		var value = this.txt.value;
		console.log(`Độ dài của chuỗi = ${value.length}`);
	},
	checkText: function(targetText){
		var value = this.txt.value;
		if(value.indexOf(targetText) != -1){
			console.log('Có tồn tại');
		}else{
			console.log(' tồn tại');
		}
	},
	checkVowel: function(){

	},
	removeWhiteSpace: function (){
		// lay ra gia tri cua the input
		var value = this.txt.value;
		var result = "";
		// tao vong lap while (dk ky tu khoang trang co ton tai trong chuoi)
		while(value.indexOf(' ') != -1){
			var wsIndex = value.indexOf(' ');
			result += value.slice(0, wsIndex);
			value = value.slice(wsIndex+1, value.length);
		}	
		// hien thi ket qua 
		console.log(result+value);
	}
}