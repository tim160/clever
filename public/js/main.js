"use strict";

var toggleButton = document.querySelector('.toggle-menu');
var navBar = document.querySelector('.nav-bar');
toggleButton.addEventListener('click', function () {
    navBar.classList.toggle('toggle');
});

$(document).ready(function () {
    $('#sendMessage').on('click', function (event) {
        var flag = false;
        var firstName = $("#firstName");
        if (firstName.val().trim().length == 0) {
            firstName.css('border', 'red 1px solid');
            flag = true;
            firstName.on('input', function (event) {
                flag = false;
                firstName.css('border', 'black solid 1px');
            })
        }
        var lastName = $("#lastName");
        if (lastName.val().trim().length == 0) {
            lastName.css('border', 'red 1px solid');
            flag = true;
            lastName.on('input', function (event) {
                flag = false;
                lastName.css('border', 'black solid 1px');
            })
        }

        var email = $("#email");
        if (email.val().trim().length == 0) {
            email.css('border', 'red 1px solid');
            flag = true;
            email.on('input', function (event) {
                flag = false;
                email.css('border', 'black solid 1px');
            })
        }

        var textMessage = $("#textMessage");
        if (textMessage.val().trim().length == 0) {
            textMessage.css('border', 'red 1px solid');
            flag = true;
            textMessage.on('input', function (event) {
                flag = false;
                textMessage.css('border', 'black solid 1px');
            })
        }
        // grecaptcha.execute();
        if (!flag) {
            $.post("/sendFormToEmail", {
                _token: $("#token").val(),
                firstName: $("#firstName").val().trim(),
                lastName: $("#lastName").val().trim(),
                email: $("#email").val().trim(),
                Company: $("#Company").val().trim(),
                Subject: $("#Subject").val().trim(),
                textMessage: $("#textMessage").val().trim()
            })
                .done(function (data) {
                    $("#ex1").modal();
                })
                .fail(function (data) {
                    console.log(data);
                    //alert("some error during parse params");
                    $('#modalError').modal();
                });
        }

    });

    let onCompleted;
    onCompleted = function() {
        console.log('captcha completed.');
        $('#myForm').submit();
        alert('wait to check for "captcha completed" in the console.');
    }
});
