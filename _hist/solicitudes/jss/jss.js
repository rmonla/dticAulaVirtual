function newSolGrabar(){
	window.open('../solgrabar','_blank');
}
function newSolEncuesta1(){
	window.open('../encuesta1','_blank');
}
function redim() {
	var bHeight = document.body.offsetHeight;
	var bWidth = document.body.offsetWidth;
	var e = document.getElementById('container');
	e.style.height = (bHeight - 50) + 'px';
	e.style.width = (bWidth - 50) + 'px';
}
window.onload = redim;
window.onresize = redim;