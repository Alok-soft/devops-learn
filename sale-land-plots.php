<?php
include './includes-files/inner-header.php';
?>
<script type="text/javascript">
    var aId = 'service';
    var aSId = 'sale-plote';
</script>

<style type="">
.labels {
    top: 0px !important;
}
select.form-select { -webkit-appearance: menulist; }

.page-hero{
    margin-top: -565px;
    background-image: url(./images/community/downtown-img2.jpg);
}

/* Responsive breakpoints */
@media (max-width: 600px) {
    .form-container {
        width: auto !important;
        padding: 10px !important;
        background-color: #f4efef;
    }

    .page-hero{
/*        margin-top: -425px !important;*/
    }
    
    .register-photo form h2 {
        font-size: 22px;
    }
}
</style>

<div class="page-hero"></div>
<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form method="post">
            <h2 class="text-center"><strong>Request For</strong> <span class="high-light">Sale Plots/Lands</span></h2>

            <div class="floating-label">
                <input id="userName" type="text" name="user-name" placeholder=" " autocomplete="off" class="form-control">
                <label for="userName">Full Name</label>
            </div>

            <div class="floating-label">
                <input id="mobileNumber" type="text" name="contact" placeholder=" " required 
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10" autocomplete="off" class="form-control">
                <label for="mobileNumber">Mobile Number</label>
            </div>

            <div class="floating-label">
                <input id="email" type="email" name="email" placeholder=" " autocomplete="off" class="form-control">
                <label for="email">Email</label>
            </div>

             <div class="floating-label"> 
             	<label class="labels" for="positionSelect">Services</label>
                <select name="service" id="positionSelect" class="form-select">
                    <option value="Commercial Sales Manager" selected>Sale Plots/Lands</option>
                    <option value="IT Assistant" >Buy Plots/Lands</option>
                    <option value="Luxury Property Sales Manager">Verify Your Property</option>
                    <option value="Property Associate">Verify Disputed Property</option>
                </select>
             </div> 

            <div class="floating-label">
                <textarea id="floatingTextarea" name="Messages" placeholder=" " class="form-control" autocomplete="off"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>

            <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                <button class="btn two">Connect</button>
            </div>
        </form>
    </div>
</div>

<?php
    include './includes-files/inner-footer.php';
?>
