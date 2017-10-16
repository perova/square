
canvas = document.getElementById('canvas');
button = document.getElementById('button');

c = canvas.getContext("2d");





function Box() {
	c.clearRect(0,0,0,0);
	w = document.getElementById('width').value;
	h = document.getElementById('height').value;

		c.beginPath();
		
	   
		c.rect(250-w/2, 250-h/2, w, h);
		c.fillStyle = "black";
		c.fill();
	
}


