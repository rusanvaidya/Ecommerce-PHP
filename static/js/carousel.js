var banner = document.getElementsByClassName('banner-img');
var banner_len = banner.length;


let position = 1;
setInterval(
    function slide()
    {
        if(document.getElementById('i'+position).classList.contains('visible-b'))
        {
            document.getElementById('i'+position).classList.remove('visible-b');
        }
        position++;
        if(position>3)
        {
            position=1;
        }
        document.getElementById('i'+position).classList.toggle('visible-b');
    }
    ,
    5000);
