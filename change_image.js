var myImage = document.getElementById("images");
var imageArray = ["sandle1","sandle2","sandle8"];
var imageIndex=0;
function changeImage(){
myImage.setAttribute("src",imageArray[imageIndex]);
imageIndex++;
if(imageIndex>=imageArray.length){
imageIndex=0;
}
}
setInterval(changeImage,5000);