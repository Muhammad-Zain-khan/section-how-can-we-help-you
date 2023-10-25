<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body style=" color: rgb(63, 82, 97); letter-spacing: 0.25px;">
    <section>
        <div class="star-main ">
            <div class="star-cent" data-aos="fade-down">
                <p data-aos="fade-down" data-aos-duration="1000">Our customers say</p>
                <h3>Excellent</h3>
                <div class="star-box"  data-aos="flip-up" data-aos-duration="1500">
                    <a href="" class="fa fa-star str-1"  ></a>
                    <a href="" class="fa fa-star str-1"  ></a>
                    <a href="" class="fa fa-star str-1" ></a>
                    <a href="" class="fa fa-star str-1" ></a>
                    <a href="" class="fa fa-star str-1" ></a>
                </div>
                <div id="tp-rat">
                    <strong>4.6</strong>
                    out of 5 based on
                    <strong>5,796 reviews</strong>
                </div>
                <div class="tp-trus">
                    <a href="" class="fa fa-star str-5"></a>
                    <span>Trustpilot</span>
                </div>
            </div>
        </div>
    </section>



    <style>
        .star-main {
            width: 100%;
            height: 60px;
            background-color: rgb(248, 246, 244);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .star-cent {
            width: 100%;
            height: 25px;
            /* background-color: beige; */
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .star-cent p {
            padding-right: 10px;

            /* font-size: calc(10px + (50 - 40) * ((100vw - 300px) / (1600 - 300))); */
        }


        .star-box {
            width: 10%;
            height: 25px;
            /* background-color: rgb(173, 149, 53); */
            display: flex;

        }

        .star-box a {
            text-decoration: none;
            color: white;
        }

        .str-1 {
            width: 15%;
            background-color: #00b67a;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 2%;
            z-index: 2;
        }

        .str-1 a {
            text-decoration: none;
            color: white;
            position: relative;

        }

        .tp-trus {
            display: flex;
            margin-left: 1%;
        }

        .tp-trus .str-5 {
            text-decoration: none;
            color: #00b67a;
        }

        .tp-trus span {
            padding: 0px 10px;
        }


        @media (max-width:1241px) and (max-width:900px) {
            .star-box {
                width: 15%;
                height: 25px;
            }

        }

        @media (max-width:900px) and (max-width:700px) {
            .star-box {
                width: 20%;
                height: 25px;
            }

        }

        @media (max-width:900px) {
            .star-box {
                width: 25%;
                height: 25px;
            }
        }

        @media (max-width:850px) {
            #tp-rat {
                display: none;
            }

            .star-cent p {
                display: none;
            }

            .tp-trus span {
                padding: 0px 5px;
            }

            .tp-trus {

                margin-left: 0;
            }
        }

        @media (max-width:400px) {
            .star-box {
                width: 40%;
                height: 25px;
            }
        }
    </style>









    <!-- How Can We Help You -->

    <section>
        <div class="help-you">
            <h2>How Can We Help You?</h2>
            <div class="help-box">
                <div class="help-b1 ">
                    <div class="hp-icon">
                        <a href="#">
                            <img src="./images/start-business.svg" alt="">
                        </a>
                    </div>
                    <div class="hp-cont-1">
                        <h3>Start a Business</h3>
                        <p>
                            Entity selection is the key to tax savings. Partner with us to ensure you pick the best one for your situation.
                        </p>
                        <div class="hp-btn">
                            <a href="#" class="hp-btn-1">Start Your Business</a>
                        </div>
                    </div>
                </div>

                <div class="help-b1">
                    <div class="hp-icon">
                        <a href="#">
                            <img src="./images/businestaxes2.svg" alt="">
                        </a>
                    </div>
                    <div class="hp-cont-1" style="border-left: 1px solid rgb(10, 10, 59, 0.1);">
                        <h3>Business Taxes</h3>
                        <p>
                            Entity selection is the key to tax savings. Partner with us to ensure you pick the best one for your situation.
                        </p>
                        <div class="hp-btn">
                            <a href="#" class="hp-btn-1">Save More Taxes</a>
                        </div>
                    </div>
                </div>

                <div class="help-b1">
                    <div class="hp-icon">
                        <a href="#">
                            <img src="./images/payroll.svg" alt="">
                        </a>
                    </div>
                    <div class="hp-cont-1" style="border-left: 1px solid rgb(10, 10, 59, 0.1);">
                        <h3>Payroll</h3>
                        <p>
                            Entity selection is the key to tax savings. Partner with us to ensure you pick the best one for your situation.
                        </p>
                        <div class="hp-btn">
                            <a href="#" class="hp-btn-1">Make Payroll Eaiser</a>
                        </div>
                    </div>
                </div>
                <div class="help-b1">

                    <div class="hp-icon">
                        <a href="#">
                            <img src="./images/bookkeeping.svg" alt="">
                        </a>
                    </div>
                    <div class="hp-cont-1" style="border-left: 1px solid rgb(10, 10, 59, 0.1);">
                        <h3>Bookkeeping</h3>
                        <p>
                            Entity selection is the key to tax savings. Partner with us to ensure you pick the best one for your situation.
                        </p>
                        <div class="hp-btn">
                            <a href="#" class="hp-btn-1">Talk a bookkeeper</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        .help-you {
            width: 80%;
            margin: auto;
          
        }

        .help-you h2 {
            font-size: 40px;
            text-align: center;
            /* font-size: calc(10px + (50 - 40) * ((100vw - 300px) / (1600 - 300)));  */
            margin-bottom: 40px;
        }

        .help-box {
            width: 100%;
            display: grid;
            grid-template-rows: 1fr;
            grid-template-columns: 25% 25% 25% 25%;
            justify-content: space-between;

        }

        .help-box p {
            text-align: center;
        }

        .help-b1 {

            display: grid;
            grid-template-rows: 1fr 1fr;
            grid-template-columns: 1fr;
            display: flex;
            flex-direction: column;
            align-items: center;
          
        }

        .hp-cont-1 h3 {
            padding: 0px 30px;
        }

        .help-b1 p {
            padding: 0px 30px;
            
        }


        .hp-icon {
            width: 100px;
            height: 100px;
            border-radius: 50px;
            background-color: rgb(254, 102, 0);
            justify-self: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hp-icon a img {
            width: 70%;
            justify-self: center;
        }



        .hp-cont-1 h3 {
            font-size: 23px;
            color: rgb(63, 82, 97);
            font-weight: 500;
            margin: 0.5em 0px;
            text-align: center;

        }


        .hp-btn {
            display: flex;
            justify-content: center;
        }


        .hp-btn a {
            text-decoration: none;
            padding: 5px 30px;
            border-radius: 20px;
            text-align: center;
            background: rgb(96, 185, 169);
            color: white;
            transition: 0.5;

        }
        .hp-btn a:hover {
            opacity: 0.9;
        }
        /* animated a */
        .hp-btn-1 { 
            
            background-color: rgba(0, 128, 0, 0.625); 
            border: 0px; 
            
            
            position: relative; 
            border-radius: 0.2rem; 
            cursor: pointer; 
        } 
  
  
        .hp-btn-1::after { 
            content: ''; 
            position: absolute; 
            width: 0rem; 
            height: 0.2rem; 
            background: rgb(100, 200, 169);
            right: 0; 
            bottom: 0; 
            border-radius: 0.2rem; 
        } 
  
        .hp-btn-1:hover::after { 
            width: 11.2rem; 
            transition: all 0.5s ease-in-out; 
        } 
/* animated end a */
       

        @media (max-width:1264px) {
            .help-you
            {
                width:90%;
            }
        }

        @media (max-width:992px) {
            .help-you {
                width: 100%;
            }
            .help-box {
            width: 100%;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-template-columns: 40%;
            justify-content: center;
        }
        .help-b1
        {
            margin-top:20px;
            
        }
        }
        @media (max-width:900px) and (min-width:800px)
        {
            .help-box {
            width: 100%;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-template-columns: 40%;
            justify-content: center;
        } 
        }
        @media (max-width:800px) and (min-width:600px)
        {
            .help-box {
            width: 100%;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-template-columns: 45%;
            justify-content: center;
        } 
        }
        @media (max-width:600px) and (min-width:400px)
        {
            .help-box {
            width: 100%;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-template-columns: 60%;
            justify-content: center;
        } 
        }
        @media (max-width:400px) 
        {
            .help-box {
            width: 100%;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-template-columns: 90%;
            justify-content: center;
        } 
        }
        @media (min-width:991px) {
            .help-box p {
                /* font-size: 20px; */
                line-height: 150%;
                /* font-size: calc(10px + (50 - 40) * ((100vw - 300px) / (1600 - 300))); */

            }
        }

    </style>
    <!-- How Can We Help You end-->





    
        <div class="happy-content">
            <div class="happy-caps">
                <div class="caps-tex-area" style="background-color:#909;"></div>
                <div class="caps-video-area" style="background-color:#f0f;">2</div>
                <div class="accounting-cont">3</div>
                <div class="affordable">4</div>
                <div class="flate-img">5</div>
                <div class="satisfaction-img">6</div>
                <div class="satisfaction-cont">7</div>
                <!-- <div class="box-0">7</div> -->

            </div>
            <!-- <h2 class="title">CPAs are a business owner’s best friend</h2> -->
        </div>


        <style>
           .happy-content
            {
                width:calc(95% - 20px);
                height:700px;
                border-radius: 10px;
                margin: auto;
                margin-top:50px;
                background: rgb(248, 246, 244);
                padding: 0px 10px;

            }

            .happy-caps
            {
                width:70%;
                height:700px;
                background-color:#999;
                margin: auto; 
                display: grid;
                grid-template-rows:1fr 1fr 1fr;
                grid-template-columns:1fr 1fr;
                grid-template-areas:
                                       "caps-tex-area caps-tex-area " 
                                       "caps-video-area accounting-cont"
                                       "affordable flate-img"
                                       "satisfaction-img satisfaction-cont"

            }
            .caps-tex-area 
            {   
                grid-area:caps-tex-area;
            }
            .caps-video-area
            {
                grid-area:caps-video-area; 
            }
            .accounting-cont
            {
                grid-area:accounting-cont;
            }
            .affordable
            {
                grid-area:affordable;
            }
            .flate-img
            {grid-area:flate-img;}
            .satisfaction-img
            {grid-area:satisfaction-img;}
            .satisfaction-cont
            {grid-area:satisfaction-cont;}
           
            .title
            {   font-size:2.5rem;
                font-weight: 900;
                text-align:center;
                line-height: 25px;
                /* padding:50px 0px 0px 0px; */
                letter-spacing: 4px;
                color: rgb(63, 82, 97);
            } 
            @media (max-width:767px)
            {
                .title{
                    font-size:1.6rem;
                }
            }

            @media (max-width:1296px) and (min-width:992px)
            {
                .happy-caps
                {
                    width:85%;
                }   
            }
            @media (max-width:992px) 
            {
                .happy-caps
                {
                    width:100%;
                }  
                .happy-content
                {width:calc(100% - 20px)} 
            }


           

        </style>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>