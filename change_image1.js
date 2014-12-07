var myImage = document.getElementById("image2");
var imageArray = ["ladies_shoe_img_4.jpg","ladies_shoe_img_5.jpg","ladies_shoe_img_6.jpg","ladies_shoe_img_7.jpg"];
var imageIndex=0;
function changeImage(){
myImage.setAttribute("src",imageArray[imageIndex]);
imageIndex++;
if(imageIndex>=imageArray.length){
imageIndex=0;
}
}
setInterval(changeImage,5000);