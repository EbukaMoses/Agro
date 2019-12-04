//------------------------------------SELLERS SECTION----------------------------------------------------------


document.querySelector(".stitle").innerHTML= "Seller's SignUp";
document.querySelector("#ssignin_btn").addEventListener('click', function(){
	// console.log("Hello");
    document.querySelector(".sout").style.display= "none";
    document.querySelector(".sin").style.display= "inherit";
    document.querySelector(".stitle").innerHTML= "Seller's SignIn";
    // document.querySelector(".card-header").addClass(".panel_header");
});

document.querySelector("#ssignup_btn").addEventListener('click', function(){
	// console.log("Hello");
    document.querySelector(".sin").style.display= "none";
    document.querySelector(".sout").style.display= "inherit";
    // document.querySelector(".title").innerHTML= "Buyer SignIn";
    document.querySelector("#spanel_header").style.backgroundColor = "red";
    document.querySelector("#spanel_header").style.color= "#fff";
});




document.querySelector("#ssubmit_up").addEventListener('click', function(){
    var sfullname_up = document.querySelector("#sfullname_up").value;
    var semail_up = document.querySelector("#semail_up").value;
    var sphone_up = document.querySelector("#sphone_up").value;
    var spassword_up = document.querySelector("#spassword_up").value;
    var scpassword_up = document.querySelector("#scpassword_up").value;
    
    
    if(sfullname_up == "" || semail_up == "" || sphone_up == "" || spassword_up == "" || scpassword_up == ""){
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
        
    } else if (spassword_up !== scpassword_up){
//        alert("Password Mismatch");
        Swal.fire({
          icon: 'error',
          title: 'Password Mismatch',
          text: 'Please cross check your password!',
//          footer: '<a href>Why do I have this issue?</a>'
        })
    } else {
//        location.href = "buyer/admin_dashboard.php";
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Signup successful',
          text: 'Please proceed to Signin!',
          showConfirmButton: false,
          timer: 4000
        })
    }
    
    
});



document.querySelector("#ssubmit_in").addEventListener('click', function(){
    var sfullname_in = document.querySelector("#sfullname_in").value;
    var semail_in = document.querySelector("#semail_in").value;
    var spassword_in = document.querySelector("#spassword_in").value;
    
    
    if(sfullname_in == "" || semail_in == "" || spassword_in == ""){
        
//        alert("Input your details");
        Swal.fire({
          title: 'Please input the correct details',
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
          title: 'Login Successful',
          showConfirmButton: false,
          timer: 4000
        })
        location.href = "buyer/admin_dashboard.php";
    }
    
    
});




