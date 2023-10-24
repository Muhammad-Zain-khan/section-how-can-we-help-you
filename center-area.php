<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body style=" color: rgb(63, 82, 97); letter-spacing: 0.25px;">
    <section>
        <div class="star-main">
            <div class="star-cent">
                <p>Our customers say</p>
                <h3>Excellent</h3>
                <div class="star-box">
                    <a href="" class="fa fa-star str-1"></a>
                    <a href="" class="fa fa-star str-1"></a>
                    <a href="" class="fa fa-star str-1"></a>
                    <a href="" class="fa fa-star str-1"></a>
                    <a href="" class="fa fa-star str-1"></a>
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
                <div class="help-b1">
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
                    </div>
                </div>

                <div class="help-b1">
                    <div class="hp-icon">
                        <a href="#">
                            <img src="./images/businestaxes2.svg" alt="">
                        </a>
                    </div>
                    <div class="hp-cont-1" style="border-left: 1px solid rgb(10, 10, 59, 0.1);">
                        <h3>Start a Business</h3>
                        <p>
                            Entity selection is the key to tax savings. Partner with us to ensure you pick the best one for your situation.
                        </p>
                    </div>
                </div>

                <div class="help-b1">
                    <div class="hp-icon">
                        <a href="#">
                            <img src="./images/payroll.svg" alt="">
                        </a>
                    </div>
                    <div class="hp-cont-1" style="border-left: 1px solid rgb(10, 10, 59, 0.1);">
                        <h3>Start a Business</h3>
                        <p>
                            Entity selection is the key to tax savings. Partner with us to ensure you pick the best one for your situation.
                        </p>
                    </div>
                </div>
                <div class="help-b1">
                    
                        <div class="hp-icon">
                            <a href="#">
                                <img src="./images/bookkeeping.svg" alt="">
                            </a>
                        </div>
                        <div class="hp-cont-1" style="border-left: 1px solid rgb(10, 10, 59, 0.1);">
                            <h3>Start a Business</h3>
                            <p>
                                Entity selection is the key to tax savings. Partner with us to ensure you pick the best one for your situation.
                            </p>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>

    <style>
        .help-you {
            width:80%;
            margin: auto;
            /* background-color:#00b67a ; */
        }

        .help-you h2 {
            font-size: 40px;
            text-align: center;
            /* font-size: calc(10px + (50 - 40) * ((100vw - 300px) / (1600 - 300)));  */
            margin-bottom:40px;
        }

        .help-box {
            width: 100%;
            display: grid;
            grid-template-rows: 1fr;
            grid-template-columns: 25% 25% 25% 25%;
            justify-content: space-between;
            
        }
        .help-box p
        {text-align: center;}
        .help-b1 {

            display: grid;
            grid-template-rows: 1fr 1fr;
            grid-template-columns: 1fr;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;
        }
        .hp-cont-1 h3
        {
            padding: 0px 30px;
        }
        .help-b1 p  {
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
        @media (max-width:992px)
        {
            .help-you
            {
                width:100%;
            }
        }
        @media (min-width:991px){
            .help-box p {
            /* font-size: 20px; */
            line-height: 150%;
            font-size: calc(10px + (50 - 40) * ((100vw - 300px) / (1600 - 300))); 

        }
        }

     
    </style>
                            <!-- How Can We Help You end-->
</body>

</html>