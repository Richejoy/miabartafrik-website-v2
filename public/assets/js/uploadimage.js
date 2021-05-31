var image1; 

var canvas1; 

function preInit() {
    canvas1 = document.getElementById('canvas1');
    canvas2 = document.getElementById('canvas2'); 
}

preInit();

//upload methods

function uploadFile1() {
    var fileinput = document.getElementById('finput1');
    image1 = new SimpleImage(fileinput);
    image1.drawTo(canvas1);
}

 

//control methods

function imageIsLoaded1() {
    return image1 != null;
}

 

//clear methods

function clearImage1() {
    var icon = document.getElementById('canvas-icon1');
    icon.style = "visibility:visible;";
    canvas1.style.height = "200px";
    canvas1.style.opacity = 0;
    image1 = null;
}

 
 

function clearIcon1() {
    var icon = document.getElementById('canvas-icon1');
    icon.style = "visibility:hidden;";
    canvas1.style.height = "";
    canvas1.style.opacity = 1;
}

 

  

function showImage() {
    var width = image4.getWidth();
    var height = image4.getHeight();
    image5 = new SimpleImage(width, height);
    image6 = new SimpleImage(width, height);
    image5 = chop2hide(image4);
    image6 = leftShift(image4);
}

  