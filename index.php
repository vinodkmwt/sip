<?php
include_once('include/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $rootUrl; ?>/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo $rootUrl; ?>/js/jquery.min3.5.1.js"></script>
    <script type="text/javascript" src="<?php echo $rootUrl; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $rootUrl; ?>/js/loader.js"></script>
    <script type="text/javascript" src="<?php echo $rootUrl; ?>/js/custom.js"></script>
    <link rel="stylesheet" href="<?php echo $rootUrl; ?>/css/style.css">
    <title>SIP Calculator - Buy Mutual Fund SIP Return Calculator Online</title>
    <meta name="description"
        content="SIP Calculator: Buy Mutual Fund Return Calculator, A Systematic Investment Plan (SIP) Calculator is a tool that helps you calculate the returns you will earn on your SIPs.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://www.mysipcalculator.co.in/" />
    <meta name="google-site-verification" content="aZWPJ8_L2T1axa0h5kxC0bjVgf0U8wMOryJ7zN_9UVs" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YTMPC1GTR0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-YTMPC1GTR0');
    </script>

</head>

<body style="background-color: #f6f6f6;">
    <?php include('include/header.php'); ?>
    <div class="container justify-content-center m-auto mt-5 shadow-sm border rounded p-5 bg-white">
        <div class="rounded p-2">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="logo.png" alt="logo">
                    </a> -->

                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item m-2" role="presentation">
                            <button class="nav-link active" onclick="updateHeading(this)" id="pills-sip-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-sip" type="button" role="tab"
                                aria-controls="pills-sip" aria-selected="true">SIP Calculator</button>
                        </li>
                        <li class="nav-item m-2" role="presentation">
                            <button class="nav-link" onclick="updateHeading(this)" id="pills-reverse-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-reverse" type="button" role="tab"
                                aria-controls="pills-reverse" aria-selected="false">SIP Reverse
                                Calculator</button>
                        </li>
                        <li class="nav-item m-2" role="presentation">
                            <button class="nav-link" onclick="updateHeading(this)" id="pills-lumpsum-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-lumpsum" type="button" role="tab"
                                aria-controls="pills-lumpsum" aria-selected="false">Lumpsum</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>
        <p class="fs-2" id="heading">SIP Calculator</p><br>
        <div class="ad" style="border: 1px solid #ced4da; height: 100px;"></div>
        <br>
        <div style="display: flex; justify-content: space-between;">
            <div class="tab-content col-md-6" id="pills-tabContent" style="width: 49%;">
                <div class="tab-pane fade show active" id="pills-sip" role="tabpanel" aria-labelledby="pills-sip-tab">
                    <div class="row">
                        <div class="col-lg-12 col-lg-12 col-sm-12">
                            <form id="formSIP">
                                <div class="mb-3">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="amount" class="form-label">Amount (₹)</label>
                                            <input type="text" class="form-control" name="amount">
                                        </div>
                                        <div class="col">
                                            <label for="duration" class="form-label">Duration (in years)</label>
                                            <input type="number" class="form-control" name="duration">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="interest" class="form-label">Expected return (%)</label>
                                            <input type="text" class="form-control" name="interest">
                                        </div>
                                        <div class="col">
                                            <button type="button" style="margin-top: 30px;"
                                                onclick="showResultSIP($('#formSIP'))"
                                                class="btn btn-primary">Calculate</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-12 col-lg-12 col-sm-12">
                            <div id="resultSIP" class="container" style="display: none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="piechartSIP" style="margin: 0px; width: 500px; height: 500px;"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tr>
                                                <td>Total Investment</td>
                                                <td>
                                                    ₹<h4 id="totalInvestment1"></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wealth Gained</td>
                                                <td>
                                                    ₹<h4 id="wealthGained1"></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maturity Value</td>
                                                <td>
                                                    ₹<h4 id="maturityValue"></h4>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-reverse" role="tabpanel" aria-labelledby="pills-reverse-tab">
                    <div class="row">
                        <div class="col-lg-12 col-lg-12 col-sm-12">
                            <form id="formSIPReverse">
                                <div class="mb-3">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="amount" class="form-label">Target Amount (₹)</label>
                                            <input type="text" class="form-control" name="amount">
                                        </div>
                                        <div class="col">
                                            <label for="duration" class="form-label">Duration (in years)</label>
                                            <input type="number" class="form-control" name="duration">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="interest" class="form-label">Expected return (%)</label>
                                            <input type="text" class="form-control" name="interest">
                                        </div>
                                        <div class="col">
                                            <button type="button" style="margin-top: 30px;"
                                                onclick="showResultSIPReverse($('#formSIPReverse'))"
                                                class="btn btn-primary">Calculate</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-12 col-lg-12 col-sm-12">
                            <div id="resultSIPReverse" class="container" style="display: none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="piechartSIPReverse" style="margin: 0px; width: 500px; height: 500px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tr>
                                                <td>To achieve your goal, you need to invest</td>
                                                <td>
                                                    ₹<h4 id="monthlyInvestment"></h4>/Month
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Investment</td>
                                                <td>
                                                    ₹<h4 id="totalInvestment2"></h4>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-lumpsum" role="tabpanel" aria-labelledby="pills-lumpsum-tab">
                    <div class="row">
                        <div class="col-lg-12 col-lg-12 col-sm-12">
                            <form id="formLumpsum">
                                <div class="mb-3">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="amount" class="form-label">One-time Investment (₹)</label>
                                            <input type="text" class="form-control" name="amount">
                                        </div>
                                        <div class="col">
                                            <label for="duration" class="form-label">Time Horizon (in years)</label>
                                            <input type="number" class="form-control" name="duration">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="interest" class="form-label">Expected return (%)</label>
                                            <input type="text" class="form-control" name="interest">
                                        </div>
                                        <div class="col">
                                            <button type="button" style="margin-top: 30px;"
                                                onclick="showResultLumpsum($('#formLumpsum'))"
                                                class="btn btn-primary">Calculate</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12 col-lg-12 col-sm-12">
                            <div id="resultLumpsum" class="container" style="display: none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="piechartLumpsum" style="margin: 0px; width: 500px; height: 500px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tr>
                                                <td>Investment Amount</td>
                                                <td>
                                                    ₹<h4 id="resultAmountInvested2"></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Expected Amount</td>
                                                <td>
                                                    ₹<h4 id="resultAmountExpected"></h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wealth Gained</td>
                                                <td>
                                                    ₹<h4 id="resultWealthGained"></h4>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border: 1px solid #ced4da; margin-left: 20px; width: 500px; height: 200px;">
            </div>
        </div>
    </div>
    <div class="container justify-content-center m-auto mt-5 shadow-sm border rounded p-5 bg-white">
        <h3>What is a SIP Calculator?</h3>
        <p>Warren Buffet has rightly said, ‘If you don’t find a way to make money while you sleep, you will work
            until
            you die.’</p>
        <p>And, a Systematic Investment Plan (SIP) is surely that way to invest in the equity markets of India
            through
            mutual funds. It makes you financially disciplined and generates a habit of saving a little amount every
            month for a secure future. SIP calculator is a tool that gives you a general idea pertaining to the
            returns
            that you receive through your investments. Using this, you will be able to get a rough estimate of how
            much
            your financial goals will be achieved based on the annual rate of return.</p>
        <p>There are a few numerical inputs like investment amount or target amount, expected rate of return,
            investment
            tenure and step-up rate that you are supposed to fill. With these inputs, our SIP calculator can easily
            let
            you know the expected return from your SIP investment. Whether you want your output in graphical or
            chart
            format, we will serve you with the easiest approach and let you know about the investment amount,
            potential
            capital gains and maturity amount.</p>
        <p>Please note that this SIP calculator doesn’t guarantee any returns; it simply shows the estimated return
            which is hugely dependent on the performance of the fund you have invested in. The actual return may
            vary as
            it can be higher or lower than the expected return given by the SIP calculator. </p>
        <h3>How Does an SIP Calculator Work?</h3>
        <p>It uses the compound interest formula to calculate the expected returns on the investment. The formula
            which
            is used here is as follows:</p>
        <p class="fw-bold">M= P x ({[1 + i] n - 1} / i) x (1 + i)</p>
        <p>M is the total amount of money you receive at the time of maturity of the fund.</p>
        <p>P is the specific amount you invest at regular intervals every month.</p>
        <p>N is the number of payments you’ve done so far.</p>
        <p>I is the periodic rate of interest. </p>
        <p>Thus, in order to calculate the returns, you have to insert the following values:</p>
        <ul>
            <li>Monthly amount you want to invest</li>
            <li>Potential rate of return</li>
            <li>The investment periods</li>
        </ul>
        <p>Let’s see how it works through an example:</p>
        <p>For instance, if you want to invest Rs 2000 every month for a year (12 months) at a periodic rate of
            interest
            of 12%. So, the monthly return will be 12%/12= 0.01). </p>
        <p>Hence, if we insert these values in the formula like:</p>
        <p>M= 2000X ({1+0.01)(12)-1}/0.01) x (1+0.01)</p>
        <p>then we get 25,602 approximately in a year.</p>
        <h3>How Does This SIP Calculator Help You?</h3>
        <p>Do you want to know about the potential returns you would receive at the end of your investment tenure?
            Get
            instant information about your investment scenario through the SIP calculator which helps you to compare
            a
            plethora of SIP options by trying inputs in the formula. Also, it will allow you to make informed
            financial
            decisions regarding your investments. </p>
        <p>This calculator gives you the complex calculative results very swiftly. Just click on the ‘Calculate’
            button
            and you will get the output in a few seconds. You can check and compare the returns of different SIP
            schemes
            to understand which scheme will give profitable returns to achieve your financial goals.</p>
        <p>As this calculator is free of cost, you can use it as many times as you want without worrying about
            paying
            money. It is truly a beneficial tool that will take your investment journey to new heights. You can make
            the
            best of this SIP calculator and become the smartest investor of the 21st century! </p>
        <h3>How to Invest in SIP?</h3>
        <p>The process to start your SIP mutual fund investments is easy and free from hassles. All you need is to
            follow these simple steps to get started:</p>
        <ol>
            <li>First things first, you need to identify the right asset class for your investment based on your set
                financial goals.</li>
            <li>Select the mutual fund on the basis of your research, and then only move forward with the
                investment.
            </li>
            <li>Complete your KYC details which requires you to complete the application form by submitting address
                and
                identity proof. </li>
            <li>Choose the date of SIP so that the SIP amount will automatically be debited from your bank account
                on
                the date you’ve selected. </li>
        </ol>
        <h3>FAQs - Frequently Answered Questions </h3>
        <h5>For how long should I invest in SIP? Is there any maximum tenure?</h5>
        <p>The minimum tenure is 3 years but there is no limitation in investments as you can invest as long as you
            wish
            to. </p>
        <h5>How much should I invest in SIP every month?</h5>
        <p>There is no limitation to how much you can invest in SIP as the amount you choose depends on your
            financial
            goal, investment tenure, and capacity to invest. The amount differs from investor to investor, and thus
            it
            should entirely be your decision. Having said that, the least amount one can invest in SIP is Rs. 500.
        </p>
        <h5>Can I change my SIP amount?</h5>
        <p>Use our SIP calculator to check the returns you would be receiving from your investments, and you can
            surely
            increase or decrease your SIP amount. Whether you want to invest more or less, it is entirely your
            choice.
        </p>
        <h5>Can I pause my SIP for a specific period of time?</h5>
        <p>Yes, in case you want to stop your SIP for a specific period of time, then mutual fund companies offer
            this
            option as well. </p>
        <h5>Can I renew my SIP?</h5>
        <p>SIPs are automatically renewed which doesn’t require any effort, but if you want you can even cancel this
            auto-renew feature. </p>
        <h5>Is SIP and mutual fund the same thing?</h5>
        <p>SIP is an investment vehicle which helps you invest in your preferred scheme to meet your financial
            objectives. And, a mutual fund is that investment product in which you wish to invest. </p>
        <h5>Is SIP better or a lump sum amount?</h5>
        <p>If you have a huge amount in hand to invest, then you can surely go for a lump sum amount. But, if you
            wish
            to make disciplined investments without experiencing financial burden, then SIP is better wherein you
            will
            invest a fixed amount over a period of time. </p>
        <h5>Which is better: SIP or FD?</h5>
        <p>If you are an investor who wants to play safe or invest in a secure, predetermined rate of interest, then
            you
            would not prefer taking any sort of risk and FD is a better option. But if you have a different
            investment
            objective, risk-taking capacity, and fluctuations in returns, then invest in a right, profitable fund
            through SIP. </p>
    </div>
    <?php include('include/footer.php'); ?>
    <script>
        let updateHeading = (t) => { document.getElementById('heading').textContent = t.textContent; }
    </script>
</body>

</html>