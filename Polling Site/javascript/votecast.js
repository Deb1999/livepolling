var form = document.querySelector("form");
var votecast = form.querySelector("form .center input");
var pbar = document.querySelectorAll("p");
var temp = false;

votecast.addEventListener("click",function(){
    event.preventDefault();
    var xhr=new XMLHttpRequest();
    xhr.open("POST","php/votecast.php",true);
    xhr.onload = () => {
       if(xhr.readyState === XMLHttpRequest.DONE) {
           if(xhr.status === 200) {
               var data = xhr.response;
               if(data == 'success') {
                    pbar[0].classList.remove("active");
                    pbar[1].classList.remove("active");
                    pbar[2].classList.remove("active");
                    pbar[3].classList.remove("active");
                    alert(data);
               }
            }
       }
    }
    var formData = new FormData(form);
  
    xhr.send(formData);

    setInterval(()=> {
        var xhr=new XMLHttpRequest();
        xhr.open("POST","php/dataFetch.php",true);
        xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                var data = xhr.response;
                console.log(data)
                if(!pbar[0].classList.contains("active") && !pbar[1].classList.contains("active") && !pbar[2].classList.contains("active") && !pbar[3].classList.contains("active"))
                    pbar[0].style.display = "block";
                    pbar[1].style.display = "block";
                    pbar[2].style.display = "block";
                    pbar[3].style.display = "block";
                }
            }
        }
        xhr.send();
    },500);

    
    });


   
    


 