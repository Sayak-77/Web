const text=document.querySelector(".img1");
const str=text.textContent;
const spltxt=str.split("");
text.textContent="";
for(let i=0;i<spltxt.length;i++)
{
    text.innerHTML+= "<span>" + spltxt[i] + "<span>";
}
let char=0;
let timer= setInterval(onPlay,40);
function onPlay()
{
    const span=text.querySelectorAll('span')[char];
    span.classList.add('fade');
    char++
    if(char===spltxt.length)
    {
        complete();
        return;
    }
}
function complete()
{
    clearInterval(timer);
    timer=null;
}



