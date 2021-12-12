// home
const logo = document.getElementById('home-logo');
logo.onclick = function()
{
    window.open('/','_self');
}

// login container
const login_signup = document.getElementById('logsign');
login_signup.onclick = function()
{
    document.getElementById('login-back').style.display='block';
}
const signup = document.getElementById('sign');
signup.onclick = function()
{
    document.getElementById('login-back').style.display='none';
    document.getElementById('signup-back').style.display='block';
}
const close_login = document.getElementById('close-login');
const close_signup = document.getElementById('close-signup');
close_login.onclick = function()
{
    document.getElementById('login-back').style.display = 'none';
}
close_signup.onclick = function()
{
    document.getElementById('signup-back').style.display = 'none';
}

// new seller
const bs = document.getElementById('bs');
bs.onclick = function()
{
    document.getElementById('bs-back').style.display='block';
}
const signup_bs = document.getElementById('bs-sign');
signup_bs.onclick = function()
{
    document.getElementById('bs-back').style.display='none';
    document.getElementById('signup-bs-back').style.display='block';
}
const close_login_bs = document.getElementById('close-login-bs');
const close_signup_bs = document.getElementById('close-signup-bs');
close_login_bs.onclick = function()
{
    document.getElementById('bs-back').style.display = 'none';
}
close_signup_bs.onclick = function()
{
    document.getElementById('signup-bs-back').style.display = 'none';
}

// menu
const category = document.getElementById('menu-cat');
const cat_list = document.getElementById('category');

category.onclick = function()
{
    cat_list.style.display = 'block';
}
window.onclick = function(e)
{
    if(e.target != category)
    {
        cat_list.style.display = 'none';
    }

    if(e.target != cart_icon)
    {
        cart_list.style.display = 'none';   
    }
}

const cart_icon = document.getElementById('shop-cart');
const cart_list = document.getElementById('shop-list');

cart_icon.onclick = function()
{
    cart_list.style.display = 'block';
}

// page menu
const htb = document.getElementById('htb');
htb.onclick = function()
{
    window.open('/HowToBuy', '_self')
}
const oa = document.getElementById('oa');
oa.onclick = function()
{
    window.open('/OffersAvailable', '_self')
}
const na = document.getElementById('na');
na.onclick = function()
{
    window.open('/NewArrivals', '_self')
}
const cs = document.getElementById('cs');
cs.onclick = function()
{
    window.open('/CustomerSupport', '_self')
}
