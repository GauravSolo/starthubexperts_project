const button = document.querySelector("button[name='submit']");
const message = document.querySelector('.message');




button.addEventListener('click',(e)=>{
    
    e.preventDefault();
    button.innerHTML = "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span><span style='margin-left:5px;'>Loading... </span>";
    const xhr = new XMLHttpRequest();

    xhr.open('POST','savecategory.php',true);
    // xhr.setRequestHeader('Content-Type','multipart/formdata');

    xhr.responseType = 'json';

    xhr.onload = ()=>{
        if(xhr.status === 200)
        {
            button.innerHTML = "SUBMIT";  
            var res = xhr.response;
            message.innerText = res.res;
            setTimeout(()=>{
                message.innerText = "";
            },5000);
            if(res.reset == '1')
            {
                document.getElementById('form').reset();
            }
        }
    };
    
    const form = document.getElementById('form');
    const formdata = new FormData(form);
    xhr.send(formdata);

});