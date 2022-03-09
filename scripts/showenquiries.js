const tbody = document.getElementById('tbody');

    function showData()
    {   
        const xhr = new XMLHttpRequest();

        xhr.open('GET','getenquiries.php');

        xhr.responseType = 'json';

        xhr.onload = ()=>{
            if(xhr.status === 200)
            {
                var res = xhr.response;
                console.log(xhr.response);
                if(res.error == '1')
                {
                    document.getElementById('warn').innerText = res.res;
                }else{


                    tbody.innerHTML = res.res;
                    var buttons = document.querySelectorAll('.delete');

                    buttons.forEach((element)=>{
                        element.addEventListener('click',(e)=>{
                            var id = e.target.getAttribute('data-id');

                            const xhr = new XMLHttpRequest();

                            xhr.open('POST','deleteenquiry.php',true);

                            xhr.responseType = 'text';

                            xhr.onload = ()=>{
                                if(xhr.status === 200)
                                {
                                    var res = xhr.response;
                                    document.getElementById('warn').innerText = res;
                                    setTimeout(()=>{
                                        document.getElementById('warn').innerText = "";
                                    },5000);
                                    showData();
                                    
                                }
                            };
                            


                            const form  = new FormData();
                            form.append('id',id);
                            xhr.send(form);
                        });
                    });
                }
            }
        };
        
        xhr.send();
    }

showData();


