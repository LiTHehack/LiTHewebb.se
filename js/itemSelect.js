(function(){

	var table = document.getElementById('parts-table');
	table.addEventListener('click', function(e){
		t = e.target;

		if(t.tagName === 'TD'){
			t = t.parentNode;
		}

		if(t.tagName === 'TR'){
			if(t.classList.contains('selected')){
				t.classList.remove('selected');
			}
			else{
				t.classList.add('selected');
			}
		}
		e.preventDefault();
	});
})();