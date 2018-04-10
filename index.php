<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
    
    <div class='mainInfo'>
        <div class='overlay'>
            <h1 class="text-center">Safer</h1>
    <div class='container'>
        <form method='post' action=''>
            <div class='row'>
                <div class='col-6'>

    <!-- type of travel -->    
                    <div class='type'>
                        <h3>Type of you Travel</h3>
                        <label class="container">archaeological
                        <input class="select_type" type="radio" name="purpose" value='arc'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">cultural
                        <input class="select_type" type="radio" name="purpose" value='cul'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Medical
                        <input class="select_type" type="radio" name="purpose" value='med'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Safari
                        <input class="select_type" type="radio" name="purpose" value='saf'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Beach
                        <input class="select_type" type="radio" name="purpose" value='bea'>
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">Religion
                        <input class="select_type" type="radio" name="purpose" value='rel'>
                            <span class="checkmark"></span>
                        </label>
                    </div>
    <!-- schedual of travel -->  
                    <div class='schedual'>
                        <h3>Select Your traveling month</h3>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Month:</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                        </div>
                    </div>
   <!-- accomodation of travel -->  
                    <div class="accomodation">
                        <h3>Check your accomodation type</h3>

                        <label class="container">Hostel
                            <input class="select_accommodation" type="radio" name="accomodation" value='hostel'>
                            <span class="checkmark"></span>
                        </label>

                        <label class="container">Hotel
                            <input class="select_accommodation" type="radio" name="accomodation" value='hotel'>
                            <span class="checkmark"></span>
                        </label>
                    </div>
   <!-- budget of travel -->  
                    <div class="budget">
                        <h3>Enter your Budget</h3>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                            <input type="text" class="form-control min_budget" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <h5>To</h5>
                        <div class="input-group">
                            <input type="text" class="form-control max_budget" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class='col-6'>
    <!-- continent of travel -->                   
                    <div class='continent'>
                        <h3>Which continent you want to travel to</h3>

                        <label class="container">europa
                        <input class="select_continent" type="radio" name="continent" value='eur'>
                            <span class="checkmark"></span>
                        </label>

                        <label class="container">Asia
                        <input class="select_continent" type="radio" name="continent" value='asia'>
                            <span class="checkmark"></span>
                        </label>

                        <label class="container">North America
                        <input class="select_continent" type="radio" name="continent" value='north'>
                            <span class="checkmark"></span>
                        </label>

                        <label class="container">South America
                        <input class="select_continent" type="radio" name="continent" value='south'>
                            <span class="checkmark"></span>
                        </label>

                        <label class="container">Africa
                        <input class="select_continent" type="radio" name="continent" value='afr'>
                            <span class="checkmark"></span>
                        </label>

                        <label class="container">Australia
                        <input class="select_continent" type="radio" name="continent" value='aus'>
                            <span class="checkmark"></span>
                        </label>
                    </div>
       <!-- country of travel -->                  
                    <div class='country'>
                        <h3>Specify more</h3>
                        <label class="container">inner Egypt
                            <input class="select_area" type="radio" name="country" value='in'>
                            <span class="checkmark"></span>
                        </label>

                        <label class="container">Outside Egypt
                            <input class="select_area" type="radio" name="country" value='ex'>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </form>
        <button type="button" class="btn btn-primary btn-lg btn-block search">Search</button>
    </div>
</div>
</div>
<div class='results'>
    <div class="container">
        
    </div>
</div>
    <script src='js/jquery-1.12.1.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/search.js'></script>
</body>
</html>