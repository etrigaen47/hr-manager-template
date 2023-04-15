$(document).ready(function(){
    //login form
    $('#login-form').on('submit', function(e){
        //prevent form from submitting twice
        e.preventDefault();
        let auth_in_form = $('.auth-in-form')
        let status = false;

        $.each(auth_in_form, (k, v) => {
            if(v.value == ''){
                alert('You forgot to fill in the '+v.placeholder+' field')
                $(v).addClass('border-danger')
                status = false;
            }else{
                $(v).removeClass('border-danger')
                status = true;
            }
        })

        if(status == true){
            $.ajax({
                url : 'transport/authentication.php',
                method : 'POST',
                beforeSend : function(){
                    document.getElementsByClassName('auth-sign-in').innerText = 'PROCESSING...'
                },
                data : $('#login-form').serialize(),
                success : function(r){
                    document.getElementsByClassName('auth-sign-in').innerText = 'SIGN IN'
                    if(r == 'ERROR'){
                        alert('Invalid login details, try again!')
                    }else if(r == 'SUCCESS'){
                        location.replace('public/dashboard.php')
                    }
                }
            })
        }
    })

    
    //registration form
    $('#registration-form').on('submit', function(e){
        e.preventDefault()
        let auth_register_form = $('.auth-register-form')
        let status = false;

        $.each(auth_register_form, (k, v) => {
            if(v.value == ''){
                alert('You forgot to fill in the '+v.placeholder+' field')
                $(v).addClass('border-danger')
                status = false;
            }else{
                $(v).removeClass('border-danger')
                status = true;
            }
        })

        //check passwords match
        if($('.c_pass').val() !== $('.pass').val()){
            alert('Passwords Mismatch')
            $('.pass').addClass('border-danger')
            $('.c_pass').addClass('border-danger')
            status = false;
        }else if(status == true){
            $.ajax({
                url : 'transport/authentication.php',
                method : 'POST',
                beforeSend : function(){
                    document.getElementsByClassName('auth-register').innerText = 'PROCESSING...'
                },
                data : $('#registration-form').serialize(),
                success : function(r){
                    document.getElementsByClassName('auth-register').innerText = 'REGISTER'
                    if(r == 'E_EMAIL'){
                        alert('Invalid Email Address');
                    }else if(r == 'SUCCESS'){
                        location.replace('index.php')
                    }
                }
            })
        }
    })
})