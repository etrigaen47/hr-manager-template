$(document).ready(function(){
    $('#add-employee-data').on('submit', function(e){
        e.preventDefault()
        let add_employee_data = $('.add-employee-data')
        let status = false;
        //let formData = new FormData($('#add-employee-data')[0]);

        $.each(add_employee_data, (k, v) => {
            if(v.value == ''){
                alert('You forgot to fill in the '+v.placeholder.toUpperCase()+' field')
                $(v).addClass('border-danger')
                status = false;
            }else if(v.value == 'Select'){
                alert('You forgot to fill in the '+v.lang.toUpperCase()+' field')
                $(v).addClass('border-danger')
                status = false;
            }else{
                $(v).removeClass('border-danger')
                status = true;
            }
        })

        if(status == true){
            $.ajax({
                url : '../transport/employee-data.php',
                method : 'POST',
                beforeSend : function(){
                    document.getElementsByClassName('add-employee-btn').innerText = 'PROCESSING...'
                },
                data : $('#add-employee-data').serialize(),
                // contentType: false,
                // processData: false,
                success : function(r){
                    document.getElementsByClassName('add-employee-btn').innerText = 'Submit'
                    if(r == 'ERROR_MAIL'){
                        alert('Invalid email address, please check and try again!');
                    }else if(r == 'SUCCESS'){
                        alert('Employee record added successfully!');
                    }
                }
            })
        }
    })
})