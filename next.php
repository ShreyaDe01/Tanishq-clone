<?php
    include ('header.php');
    include('dbconnection.php');    
?>

<div class="container-fluid" id="jewelleryBanner">
  <img class="img-fluid"  src="https://www.tanishq.co.in/wps/wcm/connect/tanishq/14707ca8-4da3-444a-b993-3ca2e961c56e/desktop/Tanishq_Diwali_Homepage_Banner_2500x712-min.jpg?MOD=AJPERES&CACHEID=ROOTWORKSPACE.Z18_90IA1H80O0RT10QIMVSTFU3006-14707ca8-4da3-444a-b993-3ca2e961c56e-desktop-nPzR.H7">
</div>
<div class="container-fluid" id="BlueBand" >
  <div class="container">
    <div class="row">
      <div class="col">
        <p><b>STORE LOCATOR</b></p>
      </div>
      <div class="col">
        <p><b>BOOK AN APPOINTMENT</b></p>
      </div>
      <div class="col">
        <p><b>LIVE VIDEO CALL</b></p>
      </div>
    </div>
  </div>
</div>

<h1 id ="pageHeading">JEWELLERY |<span style="font-family: 'Times New Roman', Times, serif; font-size:1.3rem; font-weight:550;"> 14725 DESIGNS</span></h1>
<div class="container">
  <div class="row row-cols-2">
  <div class="col-sm-3" style="padding-left:0rem;" >
    <div class="container" id = "filters">
      <h5>Filter By</h5>
      <ul id="FiltersList">
        <li class="filter-heading">price
          <button class="dropdown-btn"><i class="fas fa-plus"></i></button>
          <div class="dropdown-container">
            <ul style="list-style-type:none">
              <li><input type="checkbox"><label>Less than ₹10000 (980)</label></li>
              <li><input type="checkbox"><label>Between ₹10000 and ₹25000 (3346)</label></li>
              <li><input type="checkbox"><label>Between ₹10000 and ₹25000 (3700)</label></li>
              <li><input type="checkbox"><label>Between ₹50000 and ₹100000 (3141)</label></li>
              <li><input type="checkbox"><label>Between ₹100000 and ₹200000 (1927)</label></li>
              <li><input type="checkbox"><label>Between ₹200000 and ₹500000 (1246)</label></li>
            </ul>
          </div>
        </li>
        <li class="filter-heading">jewellery type
        <button class="dropdown-btn"><i class="fas fa-plus"></i></button>
          <div class="dropdown-container">
            <ul style="list-style-type:none">
              <li><input type="checkbox"><label>Coins (1)</label></li>
              <li><input type="checkbox"><label>Diamond Jewellery (280)</label></li>
              <li><input type="checkbox"><label>Jewellery with Gemstones (74)</label></li>
              <li><input type="checkbox"><label>Plain Gold Jewellery (587)</label></li>
              <li><input type="checkbox"><label>Plain Jewellery with Stones (26)</label></li>
              <li><input type="checkbox"><label>Platinum Jewellery (5)</label></li>
            </ul>
          </div>
        </li>
        <li class="filter-heading">product<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">gender<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">discounts<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">coin weight<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">metal color<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">type<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">purity<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">occasion<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">metal<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">product width<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">diamond clarity<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">collection<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">waist belt size<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">pendant height<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">pendant width<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">earring height<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">earring width<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">community<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">from<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
        <li class="filter-heading">virtual tryon<button class="dropdown-btn"><i class="fas fa-plus"></i></button></li>
      </ul>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="container" id = "products">
      <!--row1-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">Enchanting Dangler Gold Pendant</h5>
                <p class="card-text">₹34952</p>
                <a href="#item1a" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">Enchanting Dangler Gold Pendant</h5>
                <p class="card-text">₹34952</p>
                <a href="#item1b" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">Enchanting Dangler Gold Pendant</h5>
                <p class="card-text">₹34952</p>
                <a href="#item1c" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
        <!--row2-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product2.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">
                scintillating fancy gold drop earrings with ruby and cubic zirconia</h5>
                <p class="card-text">₹32482</p>
                <a href="item2a.php" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product2.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">
                scintillating fancy gold drop earrings with ruby and cubic zirconia</h5>
                <p class="card-text">₹32482</p>
                <a href="item2a.php" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product2.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">
                scintillating fancy gold drop earrings with ruby and cubic zirconia</h5>
                <p class="card-text">₹32482</p>
                <a href="item2a.php" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
        <!--row3-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product3.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">
                Elegant Dewdrop Gold Drop Earrings With Chakri Diamonds</h5>
                <p class="card-text">₹33583</p>
                <a href="#item3a" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product3.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  color: #000; 
                font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; 
                text-transform:capitalize; letter-spacing: 1px; text-align: center;">Elegant Dewdrop Gold Drop Earrings With Chakri Diamonds</h5>
                <p class="card-text">₹33583</p>
                <a href="#item3b" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product3.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; 
                text-transform:capitalize; letter-spacing: 1px; text-align: center;">Elegant Dewdrop Gold Drop Earrings With Chakri Diamonds</h5>
                <p class="card-text">₹33583</p>
                <a href="#item3c" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
        <!--row4-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product4.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">
                5 Gram 22 Karat Gold Coin</h5>
                <p class="card-text">₹25969</p>
                <a href="#item4a" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product4.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">
                5 Gram 22 Karat Gold Coin</h5>
                <p class="card-text">₹25969</p>
                <a href="#item4b" class="btn btn-dark" >View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product4.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title">
                5 Gram 22 Karat Gold Coin</h5>
                <p class="card-text">₹25969</p>
                <a href="#item4c" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
        <!--row5-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product5.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis;
                text-transform:capitalize; letter-spacing: 1px; text-align: center;">Beautiful 18 Karat Gold And Diamond Cluster Pendant</h5>
                <p class="card-text">₹12268</p>
                <a href="#item5a" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product5.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; 
                text-transform:capitalize; letter-spacing: 1px; text-align: center;">Beautiful 18 Karat Gold And Diamond Cluster Pendant</h5>
                <p class="card-text">₹12268</p>
                <a href="#item5b" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product5.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  color: #000;
                font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; 
                text-transform:capitalize; letter-spacing: 1px; text-align: center;">Beautiful 18 Karat Gold And Diamond Cluster Pendant</h5>
                <p class="card-text">₹12268</p>
                <a href="#item5c" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
        <!--row6-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product6.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  
                text-overflow: ellipsis; text-transform:capitalize; letter-spacing: 1px; text-align: center;">
                Enchanting Floral Diamond Ring</h5>
                <p class="card-text">₹40685</p>
                <a href="#item6a" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product6.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis;
                text-transform:capitalize; letter-spacing: 1px; text-align: center;">Enchanting Floral Diamond Ring</h5>
                <p class="card-text">₹40685</p>
                <a href="#item6b" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product6.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em; 
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis;
                  text-transform:capitalize; letter-spacing: 1px; text-align: center;">Enchanting Floral Diamond Ring</h5>
                <p class="card-text">₹40685</p>
                <a href="#item6c" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
        <!--row7-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product7.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  
                text-overflow: ellipsis; text-transform:capitalize; letter-spacing: 1px; text-align: center;">
                Charming Floral Gold Ring</h5>
                <p class="card-text">₹15874</p>
                <a href="#item7a" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product7.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em; 
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  
                text-overflow: ellipsis; text-transform:capitalize; letter-spacing: 1px; text-align: center;">
                Charming Floral Gold Ring</h5>
                <p class="card-text">₹15874</p>
                <a href="#item7b" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product7.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  text-overflow: ellipsis; 
                text-transform:capitalize; letter-spacing: 1px; text-align: center;">Charming Floral Gold Ring</h5>
                <p class="card-text">₹15874</p>
                <a href="#item7c" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
        <!--row8-->
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="images/product8.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  
                text-overflow: ellipsis; text-transform:capitalize; letter-spacing: 1px; text-align: center;">
                Intricate Filigree Gold And Kundan Glass Bangle</h5>
                <p class="card-text">₹157682</p>
                <a href="#item8a" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product8.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  
                text-overflow: ellipsis; text-transform:capitalize; letter-spacing: 1px; text-align: center;">
                Intricate Filigree Gold And Kundan Glass Bangle</h5>
                <p class="card-text">₹157682</p>
                <a href="#item8b" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
            <img src="images/product8.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h5 class="card-title" style="font-family: 'Roboto',sans-serif; line-height: 1.5em;  
                color: #000; font-size: 14px;  white-space: nowrap; overflow: hidden;  
                text-overflow: ellipsis; text-transform:capitalize; letter-spacing: 1px; text-align: center;">
                Intricate Filigree Gold And Kundan Glass Bangle</h5>
                <p class="card-text">₹157682</p>
                <a href="#item8c" class="btn btn-dark">View Product</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>

<center>
<p id ="lastline" style="font-weight:500; text-align:center; margin-left:-10px;"> You are viewing 24 out of 14727 products</p>
<a class="btn btn-dark" style="width:fit-content; margin-bottom:2rem">SEE MORE PRODUCTS</a>
</center>


<!--dropdown Function for next.php-->
<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
  
  var i;
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
  }
</script>


<?php
    include ('footer.php');
?>