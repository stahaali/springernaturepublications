<?php include('header.php');?>

<style>

        .thankyousec{
            padding: 170px 0 56px;
        }
        .thankyousec i {
            color: #00802B;
            font-size: 120px;
        }
        .thankyou-heading{
            font-size: 75px;
            font-family: "Rajdhani", sans-serif;
        }
        .thankyousec p{
            font-size: 30px;
            font-family: "Poppins", sans-serif;
        }
        
        @media(max-width:576px){
            .thankyou-heading{
                font-size: 60px;
            }
            .thankyousec p{
                font-size: 22px;
            }
        }

</style>

<section class="thankyousec">
    <div class="container height-100">
        <div class="row height-100">
            <div class="col-lg-12 col-sm-12 my-auto text-center">
                <i class="fa-regular fa-circle-check"></i>
                <h1 class='thankyou-heading'>Thank You</h1>
                <p class="mb-0">We will get back to you!!!</p>
            </div>
        </div>
    </div>
</section>


    <script>
        setTimeout(function() 
        {
            window.location.href = "http://springernaturepublications.com/";
        }, 5000); // 10000 milliseconds = 10 seconds
    </script>

<?php include('footer.php');?>