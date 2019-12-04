
//--------------------------------------------------CONTACT US MSG

document.querySelector("#send_msg").addEventListener('click', function(){
    var name = document.querySelector("#name").value;
    var mail = document.querySelector("#mail").value;
    var msg = document.querySelector("#msg").value;
    
    
    if(name == "" || mail == "" || msg == ""){
//        alert("Input your details");
        Swal.fire({
          title: 'PLEASE FILL ALL FIELD',
          showClass: {
            popup: 'animated fadeInDown faster'
          },
          hideClass: {
            popup: 'animated fadeOutUp faster'
          }
        })
        
    } else {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Message send successful',
          text: 'Our team would get back to you shortly!',
          showConfirmButton: false,
          timer: 4000
        })
    }
    
    
});


