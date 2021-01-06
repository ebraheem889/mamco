$(document).ready(function () {

    $('.pending2 , .pending1').on('click' ,function () {

        var user_status = $(this).data('user_status');

        if(user_status == 0) {
            $('#User_notification').css('display', 'block');
            var myModal = document.getElementById('myModal')
            var myInput = document.getElementById('myInput')
            $("#User_notification").modal({

                backdrop:'static',
                keyboard:false,
            });
            $('#hide_notification').on('click',function () {

                $('#User_notification .modal-backdrop').remove();
                $('#User_notification').modal('hide');

            })

        }


    })

    $('.login_required').on('click' ,function () {
        var unlogined_user = $(this).data('islogin');

        if(unlogined_user == 0) {
            $('#User_notification').css('display', 'block');
            var myModal = document.getElementById('myModal')
            var myInput = document.getElementById('myInput')
            $("#User_notification").modal({

                backdrop:'static',
                keyboard:false,
            });
            $('#hide_notification').on('click',function () {

                $('#User_notification .modal-backdrop').remove();
                $('#User_notification').modal('hide');

            })

        }



    });

})
