<div class="d-contact">

    <div class="d-contact-background">
        <div class="d-contact-content">

            <div class="d-contact-form">

                <form class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid email.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid password.
                        </div>
                    </div>
                    <button type="submit" class="d-btn-submit btn btn-primary">Submit</button>
                </form>

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>

            <div class="d-contact-text">

                <h1 class="d-contact-text-header">Visit our shops</h1>
                <p class="d-contact-text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <p class="d-contact-text-desc">09:00-19h Monday – Friday<br/>75-11 Jewett Ave Jersey City, NJ 07304 USA<br/>+ (1) 555 678 786</p>

            </div>

        </div>
    </div>

</div>

<style>
    .d-contact-background{
        width: 100%;
        height: 0;
        position: relative;
        /*background-color: red;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .d-contact-content{
        width: 60%;
        height: auto;
        background-color: white;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        -webkit-box-shadow: 0px 0px 18px 3px rgba(128,128,128,1);
        -moz-box-shadow: 0px 0px 18px 3px rgba(128,128,128,1);
        box-shadow: 0px 0px 18px 3px rgba(128,128,128,1);
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 20px;
        padding: 50px;
    }
    .d-contact-form{
        flex: 1;
        width: 100%;
        height: 100%;
        /*background-color: red;*/
    }
    .d-contact-text{
        flex: 1;
        width: 100%;
        height: 100%;
        /*background-color: blue;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 10px;
    }
    .d-contact-text-header{
        font-size: 40px;
    }
    .d-contact-text-desc{
        font-size: 22px;
        line-height: 1;
    }
    @media only screen and (max-width: 600px) {
        .d-contact-background{
            height: auto;
        }
        .d-contact-content{
            width: calc(100% - 20px);
            height: auto;
            position: relative;
            top: 5%;
            transform: translateY(-5%);
            flex-direction: column;
            gap: 40px;
            padding: 20px;
        }
        .d-btn-submit{
            width: 100%;
        }
    }
</style>
