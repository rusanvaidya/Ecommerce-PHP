var banner = document.getElementsByClassName('banner-img');
var banner_len = banner.length;

var btn1 = document.getElementById('b1');
var btn2 = document.getElementById('b2');
var btn3 = document.getElementById('b3');
function btn1_active()
{
    btn1.classList.toggle('t-active');
    btn1.classList.remove('t-inactive');
    if(btn2.classList.contains('t-active'))
    {
        btn2.classList.remove('t-active');
        btn2.classList.toggle('t-inactive');
    }
    if(btn3.classList.contains('t-active'))
    {
        btn3.classList.remove('t-active');
        btn3.classList.toggle('t-inactive');
    }
    banner[0].classList.toggle('visible-b');
    banner[1].classList.remove('visible-b');  
    banner[2].classList.remove('visible-b');
}
function btn2_active()
{
    btn2.classList.toggle('t-active');
    btn2.classList.remove('t-inactive');
    if(btn1.classList.contains('t-active'))
    {
        btn1.classList.remove('t-active');
        btn1.classList.toggle('t-inactive');
    }
    if(btn3.classList.contains('t-active'))
    {
        btn3.classList.remove('t-active');
        btn3.classList.toggle('t-inactive');
    }
    banner[1].classList.toggle('visible-b');
    banner[0].classList.remove('visible-b');    
    banner[2].classList.remove('visible-b');    
}
function btn3_active()
{
    if(btn2.classList.contains('t-active'))
    {
        btn2.classList.remove('t-active');
        btn2.classList.toggle('t-inactive');
    }
    if(btn1.classList.contains('t-active'))
    {
        btn1.classList.remove('t-active');
        btn1.classList.toggle('t-inactive');
    }
    btn3.classList.toggle('t-active');
    btn3.classList.remove('t-inactive');
    banner[2].classList.toggle('visible-b');
    banner[0].classList.remove('visible-b');    
    banner[1].classList.remove('visible-b');    
}

btn1.onclick = function()
{
    if(banner[0].classList.contains('visible-b'))
    {
    }
    else
    {
        btn1_active();
        position = 1;
    }
}
btn2.onclick = function()
{
    if(banner[1].classList.contains('visible-b'))
    {
    }
    else
    {
        btn2_active();
        position = 2;
    }
}
btn3.onclick = function()
{
    if(banner[2].classList.contains('visible-b'))
    {
    }
    else
    {
        btn3_active()
        position = 3;
    }
}

let position = 1;
setInterval(
    function slide()
    {
        if(document.getElementById('b'+position).classList.contains('t-active'))
        {
            document.getElementById('i'+position).classList.remove('visible-b');
            document.getElementById('b'+position).classList.remove('t-active');
            document.getElementById('b'+position).classList.toggle('t-inactive');
        }
        position++;
        if(position>3)
        {
            position=1;
        }
        document.getElementById('b'+position).classList.toggle('t-active');
        document.getElementById('b'+position).classList.remove('t-inactive');
        document.getElementById('i'+position).classList.toggle('visible-b');
    }
    ,
    5000);
