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
	},
	b5: function(){
		var result = "";
		// lay gia tri tu input
		var value1 = this.txt.value;
		// lay gia tri tu prompt
		var value2 = prompt('Nhap gia tri can xoa');
		// tim vi tri xuat hien cua value2 trong value1
		var index = value1.indexOf(value2);
		var endIndex = index + value2.length;
		// neu index != -1 thi xoa value2 trong value1
		if(index != -1){
			result = value1.slice(0, index); 
			result += value1.slice(endIndex, value1.length);
		}

		console.log(result);
	}
}