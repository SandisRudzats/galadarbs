<br>
  <br>
  <br>
  
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="?">Home</a>
					</li>
					
					<li class="breadcrumb-item active">
						About us
					</li>
				</ol>
			</nav>
		</div>
	</div>
</div>
<br>
<div class="container">
              <div class="row">
                <div class="col-xs-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container-fluid"><div class="row">
                                <div class="col">
                            <img src="components/testpic.jpg" alt="" id="tab-picture">
                            </div>
                            <div class="col" id="tab-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nemo ratione mollitia dolorum illum molestias quae doloremque, possimus assumenda provident vitae reprehenderit, voluptatum libero. Illo asperiores reprehenderit placeat nemo vel!
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container-fluid"><div class="row">
                                <div class="col">
                            <img src="components/testpic.jpg" alt="" id="tab-picture">
                            </div>
                            <div class="col">
                                SMOREM ipsum dolor, sit amet consectetur adipisicing elit. Tempora nemo ratione mollitia dolorum illum molestias quae doloremque, possimus assumenda provident vitae reprehenderit, voluptatum libero. Illo asperiores reprehenderit placeat nemo vel!
                            </div>
                            </div>
                        </div>
                </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="container-fluid"><div class="row">
                                <div class="col">
                            <img src="components/testpic.jpg" alt="" id="tab-picture">
                            </div>
                            <div class="col">
                                FOKOREM ipsum dolor, sit amet consectetur adipisicing elit. Tempora nemo ratione mollitia dolorum illum molestias quae doloremque, possimus assumenda provident vitae reprehenderit, voluptatum libero. Illo asperiores reprehenderit placeat nemo vel!
                            </div>
                            </div>
                        </div>
                </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <div class="container-fluid"><div class="row">
                                <div class="col">
                            <img src="components/testpic.jpg" alt="" id="tab-picture">
                            </div>
                            <div class="col">
                               chakalalalalalakak sit amet consectetur adipisicing elit. Tempora nemo ratione mollitia dolorum illum molestias quae doloremque, possimus assumenda provident vitae reprehenderit, voluptatum libero. Illo asperiores reprehenderit placeat nemo vel!
                            </div>
                            </div>
                        </div>
                </div>
                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>
<div class="container">
	<div class="row">
		<div id="map" class="col-5">
    </div>
    <div class="col-7" class="adressDiv">
    <address>
				 <strong>Supersecret base</strong><br /><br><h3>Adress:</h3> Pils laukums 3, Riga, LV-1050,Latvia<br /><br><h3>Email:</h3> info@samplepage.com<br /> <abbr title="Phone"><br><h3>Phone:</h3></abbr> +371 666 666
      </address> 
    </div>
	</div>
</div>





<script>
  function initMap(){
    var location = {lat: 56.954901, lng: 24.099403};
    var map = new google.maps.Map(document.getElementById("map"),{
      zoom: 18,
      center: location
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEpn7sYzqnmQndq7u8xauWXH2biBdR4Ek&callback=initMap"
  type="text/javascript"></script>

