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

	}
}