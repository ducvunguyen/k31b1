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
		
		// tao vong lap while (dk ky tu khoang trang co ton tai trong chuoi)
		
			// su dung ham slice de cat tu vi tri index den vi tri index+2
		
		// hien thi ket qua 
	}
}