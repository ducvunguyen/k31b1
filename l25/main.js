function checkTamgiac(a, b, c){
	if(a+b > c 
		&& a+c>b 
		&& b+c > a){
		var cv = a+c+b;
		var p = cv/2;
		var s = Math.sqrt(p*(p-a)*(p-b)*(p-c));
		document.write(`
			<fieldset>
			<legend>độ dài ${a} - ${b} - ${c} có hình thành tam giác</legend>
			<br>
			chu vi: ${cv}<br>
			diện tích: ${s}
			</fieldset>`);
	}
}