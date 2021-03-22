var s=document.getElementById('full-size');
var text=document.getElementById('p1');
function Change()
{
  var time=700+randomNumber(500);
  console.log(time);
  text.innerHTML=`Time taken to load is ${time} ns`;
  setTimeout(shape,time);
}
function shape()
{
    var height=randomNumber(screen.height);
    var width=randomNumber(screen.width);
    s.style.height=`${Math.min(200,height)}px`;
    s.style.width=`${Math.min(200,width)}px`;
    s.style.borderRadius=`${randomNumber(100)}%`;
    s.style.margin=randomMargin();
    s.style.backgroundColor=randomColor();
}
function randomMargin(){
    var left=randomNumber(screen.width);
    var right=randomNumber(screen.width);
    var top=randomNumber(screen.height);
    var bottom=randomNumber(screen.height);
    left=Math.min(left,screen.width-left);
    right=Math.min(right,screen.width-right);
    top=Math.min(top,screen.height-top);
    bottom=Math.min(bottom,screen.height-bottom);
    var margin=`${top}px ${right}px ${left}px ${bottom}px `;
    return margin;

}
function randomColor(){
    var letters='0123456789ABCDEF';
    var color='#';
    for(var i=0;i<6;i++){
        color+=letters[Math.floor(Math.random()*16)]
    }
    return color;
}
function randomNumber(num){
    return Math.floor(Math.random()*num);
}