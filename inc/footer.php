<footer class="container footer">
        <p>Faqja e punuar nga studentet e shkolles <strong>TICK Education Center </strong></p>.
    </footer>
    <script src="jquery-3.6.0.js"></script>
    <script src="slick.min.js"></script>
    <script src="jquery.validate.min.js"></script>
    <script>
        // $.validator.setDefaults({
        //     submitHandler: function() {
        //         alert("submitted!");
        //     }
        // });
    
        $().ready(function() {
            // validate the comment form when it is submitted
            //$("#commentForm").validate();
    
            // validate signup form on keyup and submit
            $("#login").validate({
                rules: { 
                    email: {
                        required: true,
                        email: true
                    },
                    fjalekalimi: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    
                    fjalekalimi: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: {
                        required:"Please provide a email",
                        email:"Please enter a valid email address"     
                    }          
                }
                
            });
            $("#anetari").validate({
                rules: { 
                    emri: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    mbiemri: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    telefoni: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    fjalekalimi: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    emri: {
                        required: "Ju lutem shenoni emrin",
                        minlength: "Emri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Emri nuk duhet te kete numra "
                    },
                    mbiemri: {
                        required: "Ju lutem shenoni mbiemrin",
                        minlength: "Mbiemri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Mbiemri nuk duhet te kete numra "
                    },
                    telefoni: {
                        required: "Ju lutem shenoni telefonin"
                    },
                    email: {
                        required:"Ju lutem shenoni emailin",
                        email:"Ju lutem shenoni emaili adres valide"     
                    },
                    fjalekalimi: {
                        required: "Ju lutem shenoni fjalekalimin",
                        minlength: "Fjalekalimi i juaj duhet te kete se paku gjashte karaktere"
                    }
                             
                }
                
            });
            jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 
        });
        </script>
    <script type="text/javascript">
        $('.slider').slick({
              dots: true,
            // infinite: false,
            //  speed: 300,
             nextArrow: false,
             prevArrow: false,
             slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $(".message").fadeOut(8000);
    </script>
</body>

</html>