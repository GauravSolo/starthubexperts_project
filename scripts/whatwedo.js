// import AOS from 'aos';
// import 'aos/dist/aos.css'; // You can also use <link> for styles
// // ..
// AOS.init();
// // You can also pass an optional settings object
// // below listed default settings
// AOS.init({
//   // Global settings:
//   disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
//   startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
//   initClassName: 'aos-init', // class applied after initialization
//   animatedClassName: 'aos-animate', // class applied on animation
//   useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
//   disableMutationObserver: false, // disables automatic mutations' detections (advanced)
//   debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
//   throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

//   // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
//   offset: 120, // offset (in px) from the original trigger point
//   delay: 0, // values from 0 to 3000, with step 50ms
//   duration: 400, // values from 0 to 3000, with step 50ms
//   easing: 'ease', // default easing for AOS animations
//   once: false, // whether animation should happen only once - while scrolling down
//   mirror: false, // whether elements should animate out while scrolling past them
//   anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

// });






// document.querySelector('#sub').addEventListener('click',()=>{
//   document.querySelector('body').style.paddingRight = "0px !important";
//   console.log("clicked");
// });


 

const button = document.querySelector('#submit');
const modal = document.querySelector('#siblingbutton');
const error =  document.querySelector('.error');
var Tusers = document.querySelector('#Tusers');
var Tenquiries = document.querySelector("#Tenquiries");


button.addEventListener('click',(e)=>{
    e.preventDefault();


    button.innerHTML = "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span><span style='margin-left:5px;'>Loading... </span>";


    var username =  document.querySelector("input[name='username']").value;
    var email =  document.querySelector("input[name='email']").value;
    var phone =  document.querySelector("input[name='phone']").value;
    var selectvaue = document.querySelector("select[name='category']");
    var category = selectvaue.options[selectvaue.selectedIndex].text;
    var message = document.querySelector("textarea[name='message']").value;

    var flag = 0;
    if(!username)
    {
        document.querySelector("label[for='form34']").classList.add('active');
        document.querySelector("input[name='username']").classList.add('invalid');

        setTimeout(()=>{
            document.querySelector("label[for='form34']").classList.remove('active');
            document.querySelector("input[name='username']").classList.remove('invalid');
        },3000)
        flag = 1;
    }
    if(!email)
    {
        document.querySelector("label[for='form29']").classList.add('active');
        document.querySelector("input[name='email']").classList.add('invalid');
        
        setTimeout(()=>{
            document.querySelector("label[for='form29']").classList.remove('active');
            document.querySelector("input[name='email']").classList.remove('invalid');
        },3000)
        flag = 1;
    }
    if(!phone)
    {
        document.querySelector("label[for='form28']").classList.add('active');
        document.querySelector("input[name='phone']").classList.add('invalid');

        setTimeout(()=>{
            document.querySelector("label[for='form28']").classList.remove('active');
            document.querySelector("input[name='phone']").classList.remove('invalid');
        },3000)
        flag = 1;
    }

    if(flag)
    {
        button.innerHTML = "SUBMIT";
        return;
    }
    if(!message)
    {
        message = 'empty';
    }


    const xhr = new XMLHttpRequest();

    xhr.open('POST','submit.php',true);
    // xhr.setRequestHeader('Content-Type','multipart/formdata');
    xhr.responseType = 'json';
    xhr.onload = ()=>{
        if(xhr.status === 200)
        {
            var res = xhr.response;
            console.log(res.count,res);
            if(res.res == '0')
            {
                error.innerText = 'Something Went Wrong';
                setTimeout(() => {
                    error.innerText = "";
                }, 3000);
            }
            else{
                modal.click();
            }

            button.innerHTML = "SUBMIT";           
        }
    };
    
    const formdata = new FormData();
    formdata.append('username',username);
    formdata.append('email',email);
    formdata.append('phone',phone);
    formdata.append('category',category);
    formdata.append('message',message);
    
    xhr.send(formdata); 
});




var size;
var incvalue = 0;
// window.onresize = ()=>{
    size = window.screen.width;
    console.log(size);
    if(size > 575 && size <= 767 )
    {
        incvalue = 2;
    }else if(size > 767){
        incvalue = 3;     
    
    }else if(size <= 575)
    {
       incvalue = 1;
    }
// };



function removeClass(e){
    // console.log('less');

    var id  = e.target.getAttribute('data-id');
    if(incvalue == 2 || incvalue == 3){
        // console.log(document.querySelector(".col[data-id='"+ id +"']"),document.querySelector(".row[data-id='"+ id +"']"),document.querySelectorAll(".row[data-id='"+ id +"']>div"));
        document.querySelector("h1[data-title='"+ id +"']").classList.remove('temphead');
        document.querySelector(".col[data-id='"+ id +"']").classList.remove('c');

        document.documentElement.style.setProperty('--ordervalue', (+id)+getValue);
        document.querySelector(".col[data-id='"+ id +"']").classList.remove('orderClass');
        document.querySelector(".row[data-id='"+ id +"']").classList.remove('rr');
        document.querySelectorAll(".row[data-id='"+ id +"']>div")[0].classList.remove('rc1');
        document.querySelectorAll(".row[data-id='"+ id +"']>div")[1].classList.remove('rc2');
        document.querySelector(".imgdiv[data-id='"+ id +"']").classList.remove('imagediv');
}
        document.querySelectorAll("span[data-id='"+ id +"']")[0].classList.remove('readmorebtn');
        document.querySelectorAll("span[data-id='"+ id +"']")[1].classList.remove('lessbtn');
        document.querySelector("p[data-para2='"+ id +"']").classList.remove('paragraph');
}



var readmore = document.querySelectorAll('.readmore');
var modaltitle = document.querySelector('.modal-title');
var modalpara = document.querySelector('.modal-body');

readmore.forEach((element)=>{
    element.addEventListener('click',(e)=>{
       
        document.querySelectorAll('.lessbtn').forEach((element)=>{element.click();});
        // console.log('readmore');
        var id = e.target.getAttribute('data-id');
        // console.log(document.querySelector(".col[data-id='"+ id +"']"),document.querySelector(".row[data-id='"+ id +"']"),document.querySelectorAll(".row[data-id='"+ id +"']>div"));
if(incvalue == 2 || incvalue == 3){
        document.querySelector("h1[data-title='"+ id +"']").classList.add('temphead');
        document.querySelector(".col[data-id='"+ id +"']").classList.add('c');
        
        if(incvalue == 3)
        {
            var a = 5,b = 6,c = 7;
            var tempid = id;
            while(tempid)
            {
                if(tempid == 5)
                {
                    getValue = 0;
                    break;
                }
                if(tempid == 6)
                {
                    getValue = 2;
                    break;
                }
                if(tempid == 7)
                {
                    getValue = 3;
                    break;
                }
                tempid -= incvalue;
            }

        }else if(incvalue == 2)
        {
            var a = 5,b = 6;
            var tempid = id;
            while(tempid)
            {
                if(tempid == 5)
                {
                    getValue = 0;
                    break;
                }
                if(tempid == 6)
                {
                    getValue = 2;
                    break;
                }
                tempid -= incvalue;
            }

        }else if(incvalue == 1)
        {
            getValue = 0;
        }
        document.documentElement.style.setProperty('--ordervalue', (+id)-getValue);
        document.querySelector(".col[data-id='"+ id +"']").classList.add('orderClass');
        document.querySelector(".row[data-id='"+ id +"']").classList.add('rr');
        document.querySelectorAll(".row[data-id='"+ id +"']>div")[0].classList.add('rc1');
        document.querySelectorAll(".row[data-id='"+ id +"']>div")[1].classList.add('rc2');
        document.querySelector(".imgdiv[data-id='"+ id +"']").classList.add('imagediv');
}

        document.querySelectorAll("span[data-id='"+ id +"']")[0].classList.add('readmorebtn');
        document.querySelectorAll("span[data-id='"+ id +"']")[1].classList.add('lessbtn');
        document.querySelector("p[data-para2='"+ id +"']").classList.add('paragraph');


        var less = document.querySelectorAll('.lessbtn');
        less.forEach((element)=>{
                element.addEventListener('click',(e)=>{removeClass(e)});
        });
        
        
        
        // document.querySelectorAll();



        // var title = document.querySelector("h1[data-title='"+ id +"']").innerText;
        // var modal = document.querySelector("p[data-para1='"+ id +"']").childNodes[0].nodeValue;
        // modal += '<br><br>';
        // modal += document.querySelector("p[data-para2='"+ id +"']").innerText;

        // modaltitle.innerHTML = title;
        // modalpara.innerHTML = modal;
    });
});






let buttons = document.querySelectorAll('.pop');

buttons.forEach((element)=>{
//   element.setAttribute('data-toggle',"modal");
//   element.setAttribute('data-target',"#modalContactForm");

  element.addEventListener('click',(e)=>{
    let value = e.target.getAttribute('data-number');
    document.querySelector('option[value="'+ value+'"]').selected =  true;
    
  })
});



