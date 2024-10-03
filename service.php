<?php
include("Templates/Header.php");
include("Templates/coursel.php");
include("Templates/asidebar.php");
?>

<!-- Booking Start -->
<div class="container-fluid booking mt-5 py-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3 mb-md-0">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Start Journey" data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 mb-md-0">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 mb-md-0">
                                <select class="custom-select px-4" style="height: 47px;">
                                    <option selected>Family</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="Family">Family</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;" id="Submite date">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->

<!-- Start Your Journey -->
<div class="container-fluid my-5" id="Journey">
    <h1 class="title text-center my-5 py-4">Start Your Journey</h1>
    <div class="center">
        <div class="row">
            <div class="img-wrapper mx-2" id="Karachi">
                <img src="https://i.tribune.com.pk/media/images/907903d170fbed3013ecc321baf3d64b1719500595-0/907903d170fbed3013ecc321baf3d64b1719500595-0.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Karachi</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Lahore">
                <img src="https://akm-img-a-in.tosshub.com/sites/rd/resources/201908/lahore_1566551840_1200x675.png?size=684:384"
                    alt="img" />
                <div class="overlay">
                    <h2>Lahore</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="HunzaValley">
                <img src="https://imusafir.pk/blog/wp-content/uploads/2024/02/Kachurs-1.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Skardu</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Skardu">
                <img src="https://www.pakvoyager.com/uploads/0000/18/2022/02/10/passu-cones-hunza-valley.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Hunza Valley</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Your Journey -->

<!-- Start Your Destination -->
<div class="container-fluid my-5" id="Destination">
    <h1 class="title text-center my-5 py-4">Start Your Destination</h1>
    <div class="center">
        <div class="row">
            <div class="img-wrapper mx-2" id="Karachi">
                <img src="https://i.tribune.com.pk/media/images/907903d170fbed3013ecc321baf3d64b1719500595-0/907903d170fbed3013ecc321baf3d64b1719500595-0.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Karachi</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Lahore">
                <img src="https://akm-img-a-in.tosshub.com/sites/rd/resources/201908/lahore_1566551840_1200x675.png?size=684:384"
                    alt="img" />
                <div class="overlay">
                    <h2>Lahore</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="HunzaValley">
                <img src="https://imusafir.pk/blog/wp-content/uploads/2024/02/Kachurs-1.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Skardu</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Skardu">
                <img src="https://www.pakvoyager.com/uploads/0000/18/2022/02/10/passu-cones-hunza-valley.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Hunza Valley</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Your Destination -->

<!-- Start Your Transport -->
<div class="container-fluid my-5" id="Transport">
    <h1 class="title text-center my-5 py-4">Start Your Transport</h1>
    <div class="center">
        <div class="row">
            <div class="img-wrapper mx-2" id="Karachi">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmyFVL4EDeSyViYoWSno_X8XIf1UB0mGBpGQ&s"
                    alt="img" />
                <div class="overlay">
                    <h2>Bus</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Lahore">
                <img src="https://www.discoverpuertorico.com/sites/default/files/styles/share_image/public/2022-12/Airplane%20at%20Luis%20Muoz%20Marn%20International%20Airport.jpg?h=125a58ae&itok=Tu1fL9qJ"
                    alt="img" />
                <div class="overlay">
                    <h2>Airport</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="HunzaValley">
                <img src="https://i.brecorder.com/primary/2022/12/6396584e9dde1.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Train</h2>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- End Your Transport -->

<!-- Start Your Hotel -->
<div class="container-fluid my-5" id="Hotel">
    <h1 class="title text-center my-5 py-4">Start Your Hotel</h1>
    <div class="center">
        <div class="row">
            <div class="img-wrapper mx-2" id="Karachi">
                <img src="https://i.tribune.com.pk/media/images/907903d170fbed3013ecc321baf3d64b1719500595-0/907903d170fbed3013ecc321baf3d64b1719500595-0.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Hotel 1</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Lahore">
                <img src="https://akm-img-a-in.tosshub.com/sites/rd/resources/201908/lahore_1566551840_1200x675.png?size=684:384"
                    alt="img" />
                <div class="overlay">
                    <h2>Hotel 2</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="HunzaValley">
                <img src="https://imusafir.pk/blog/wp-content/uploads/2024/02/Kachurs-1.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Hotel 3</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Skardu">
                <img src="https://www.pakvoyager.com/uploads/0000/18/2022/02/10/passu-cones-hunza-valley.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Hotel 4</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Skardu">
                <img src="https://www.pakvoyager.com/uploads/0000/18/2022/02/10/passu-cones-hunza-valley.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Hotel 5</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Your Hotel -->


<!-- Start Your Location -->
<div class="container-fluid my-5" id="Location">
    <h1 class="title text-center my-5 py-4">Start Your Location</h1>
    <div class="center">
        <div class="row">
            <div class="img-wrapper mx-2" id="Karachi">
                <img src="https://i.tribune.com.pk/media/images/907903d170fbed3013ecc321baf3d64b1719500595-0/907903d170fbed3013ecc321baf3d64b1719500595-0.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Location 1</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Lahore">
                <img src="https://akm-img-a-in.tosshub.com/sites/rd/resources/201908/lahore_1566551840_1200x675.png?size=684:384"
                    alt="img" />
                <div class="overlay">
                    <h2>Location 2</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="HunzaValley">
                <img src="https://imusafir.pk/blog/wp-content/uploads/2024/02/Kachurs-1.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Location 3</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Skardu">
                <img src="https://www.pakvoyager.com/uploads/0000/18/2022/02/10/passu-cones-hunza-valley.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Location 4</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Skardu">
                <img src="https://www.pakvoyager.com/uploads/0000/18/2022/02/10/passu-cones-hunza-valley.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Location 5</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Your Location -->

<!-- Start Your Transport -->
<div class="container-fluid my-5" id="Transport">
    <h1 class="title text-center my-5 py-4">Start Your Transport</h1>
    <div class="center">
        <div class="row">
            <div class="img-wrapper mx-2" id="Karachi">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmyFVL4EDeSyViYoWSno_X8XIf1UB0mGBpGQ&s"
                    alt="img" />
                <div class="overlay">
                    <h2>Bus</h2>
                </div>
            </div>
            <div class="img-wrapper mx-2" id="Lahore">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/2019_Toyota_Corolla_Icon_Tech_VVT-i_Hybrid_1.8.jpg/1200px-2019_Toyota_Corolla_Icon_Tech_VVT-i_Hybrid_1.8.jpg"
                    alt="img" />
                <div class="overlay">
                    <h2>Car</h2>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- End Your Transport -->

<?php
include("Templates/footer.php")
?>