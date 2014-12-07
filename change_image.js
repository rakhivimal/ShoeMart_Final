var myImage = document.getElementById("image1");
var nextImage = document.getElementById("image2");
var imageArray = ["men_shoe_img_1.jpg","men_shoe_img_2.jpg","men_shoe_img_3.jpg"];
var nextimageArray = ["ladies_shoe_img_4.jpg","ladies_shoe_img_5.jpg","ladies_shoe_img_6.jpg","ladies_shoe_img_7.jpg"];
var imageIndex=0;
function changeImage(){
myImage.setAttribute("src",imageArray[imageIndex]);
imageIndex++;
if(imageIndex>=imageArray.length){
imageIndex=0;
}
}
function changenextImage(){
nextImage.setAttribute("src",nextimageArray[imageIndex]);
imageIndex++;
if(imageIndex>=nextimageArray.length){
imageIndex=0;
}
}
setInterval(changeImage,4000);
setInterval(changenextImage,5000);

