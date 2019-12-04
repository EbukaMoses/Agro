document.querySelector(".title").innerHTML= "Buyer SignUp";
document.querySelector("#signin_btn").addEventListener('click', function(){
	// console.log("Hello");
    document.querySelector(".out").style.display= "none";
    document.querySelector(".in").style.display= "inherit";
    document.querySelector(".title").innerHTML= "Buyer SignIn";
    // document.querySelector(".card-header").addClass(".panel_header");
});

document.querySelector("#signup_btn").addEventListener('click', function(){
	// console.log("Hello");
    document.querySelector(".in").style.display= "none";
    document.querySelector(".out").style.display= "inherit";
    // document.querySelector(".title").innerHTML= "Buyer SignIn";
    document.querySelector("#panel_header").style.backgroundColor = "red";
    document.querySelector("#panel_header").style.color= "#fff";
});




document.querySelector("#submit_up").addEventListener('click', function(){
    var fullname_up = document.querySelector("#fullname_up").value;
    var email_up = document.querySelector("#email_up").value;
    var phone_up = document.querySelector("#phone_up").value;
    var password_up = document.querySelector("#password_up").value;
    var cpassword_up = document.querySelector("#cpassword_up").value;
    
    
    if(fullname_up == "" || email_up == "" || phone_up == "" || password_up == "" || cpassword_up == ""){
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
        
    } else if (password_up !== cpassword_up){
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



document.querySelector("#submit_in").addEventListener('click', function(){
    var fullname_in = document.querySelector("#fullname_in").value;
    var email_in = document.querySelector("#email_in").value;
    var password_in = document.querySelector("#password_in").value;
    
    
    if(fullname_in == "" || email_in == "" || password_in == ""){
        
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
        location.href = "seller/profile.php";
    }
    
    
});



