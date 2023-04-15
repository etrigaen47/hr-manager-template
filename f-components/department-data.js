$(document).ready(function(){
    $('#add-department').on('submit', function(e){
        e.preventDefault();
        let status = false;

        if($('.dept-name').val() == ''){
            alert('Pleas enter in a name of department');
            $('.dept-name').addClass('border-danger');
            status = false;
        }else{
            $('.dept-name').removeClass('border-danger');
            status = true;
        }

        if(status == true){
            $.ajax({
                url : '../transport/department-data.php',
                method : 'POST',
                beforeSend : function(){
                    document.getElementsByClassName('add-department-btn').innerText = 'PROCESSING...'
                },
                data : $('#add-department').serialize(),
                success : function(r){
                    document.getElementsByClassName('add-department-btn').innerText = 'Submit'
                    if(r == 'SUCCESS'){
                        alert('Department added successfully');
                        location.reload()
                    }
                }
            })
        }
    })

    //add employee to department
    $('#add-employee-department').on('submit', function(e){
        $.ajax({
            url : '../transport/department-data.php',
            method : 'POST',
            beforeSend : function(){
                document.getElementsByClassName('add-employee-department-btn').innerText = 'PROCESSING...'
            },
            data : $('#add-employee-department').serialize(),
            success : function(r){
                document.getElementsByClassName('add-employee-department-btn').innerText = 'Submit'
                if(r == 'SUCCESS'){
                    alert('Employee added to Department successfully');
                }
            }
        })
    })
})