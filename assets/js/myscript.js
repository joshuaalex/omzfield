$(document).ready(function () {

    //computeTotal();
    $('#AcQtyDiv').hide();
    $('#totalDiv').hide();

    $(document).on('click','.btnclosemodal', function (e) {
        setTimeout((function(){ location.reload() }), 1000);
    });

    $(document).on("focusout", "#AcQty", function(){
        var amt = $('#service option:selected').attr('rel');
        var qty = $('#AcQty').val();

        var product = $('#product option:selected').text();
        var servicecategory = $('#servicecategory option:selected').text();
        if(amt < 1){
            $('#total').val('0');
            return;
        }       

        var total = (amt * qty);
        
        $('#total').val(total);
    });    

    $(document).on('click','#btnAddNewWebsiteNews', function (e) {
        e.preventDefault();

        //get user input
        //var displayarena = $('#error-arena');
        var displayarena = $('#alertmodalbody');
        var action = 'add-new-website-news';

        var form = $('frmAddNewWebsiteNews')[0];
        var file_data = $('#newsimage').prop('files')[0];
        var formd = $('#frmAddNewWebsiteNews').serialize();
        var formData = new FormData(form);
        formData.append('action', action);
        formData.append('newsimage', file_data);

        var newsdescription = tinyMCE.editors[$('#newsdescription').attr('id')].getContent();
        formData.append('newsdescription', newsdescription);
        formData.append('newstitle', $('#newstitle').val());
        formData.append('status', $('#status').val());

        displayarena.html('<img src="./assets/images/icon/ic.gif"> Please wait');

        $.ajax({
            url: './assets/config/process.php',
            type: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            success: function (msg) {           
                //displayarena.html('<div class="alert alert-danger col-lg-12">'+msg+'</div>'); exit;
                if(msg == 1){
                    displayarena.html("<h3 class='text-success text-center'>News Successfully Saved</h3>");               
                    //displayarena.html('<div class="alert alert-success col-lg-12"></div>');
                    $('#frmAddNewWebsiteNews')[0].reset();
                    setTimeout((function(){ location.reload() }), 2000);
                }else if(msg == -3){
                    displayarena.html('<h4 class="text-danger text-center">All fields are required</h4>');
                }else {
                    displayarena.html('<h4 class="text-danger text-center">Error: Unable to complete request</h4>');
                }

            },
            error: function(x,e) {
                displayarena.html('<h4 class="text-danger text-center">'+formatErrorMessage(x, e)+'</h4>');
            }
        })
        $('#alertmodal').modal("show");
    });

    $(document).on('change', '#product', function(){
        var catid = $(this).val();
        var title = $("#product option:selected").text();
        if(catid == '-1'){
            $('#apartment').html('<option value="-1">No Record Found.</option>');
            return;
        }

        var product = $('#product option:selected').text();
        if(product != 'Air Conditioning'){
            $('#AcQtyDiv').hide();
        }

        var val = catid;
        showSwal('Please wait...', '   ', 'info', 'Ok. Cool!');
        $('#servicecategory').html('<option value="-1">Please wait...</option>');
        
        $.ajax({
            url  : "http://localhost/omzfield/ajaxprocessor/ajaxservicecategory.php",
            type : 'post',
            data : 'id='+val,
            success: function (msg) {
                swal.close();
                if(msg == '-1'){
                    $('#servicecategory').html('<option value="-1">No Record Found.</option>');
                }else{
                    $('#servicecategory').html(''+msg+'');
                }
            },
            error: function(x,e) {
                showSwal("Error", formatErrorMessage(x, e), "error", "Close");
            }
        });
    });

    $(document).on('change', '#servicecategory', function(){
        var catid = $(this).val();
        if(catid == '-1'){
            $('#apartment').html('<option value="-1">No Record Found.</option>');
            return;
        }

        var servicecategory = $('#servicecategory option:selected').text();
        if(servicecategory != 'Maintenance (Air Conditioning)'){
            $('#AcQtyDiv').hide();
        }

        var val = "ok";
        showSwal('Please wait...', '   ', 'info', 'Ok. Cool!');
        $('#apartment').html('<option value="-1">Please wait...</option>');
        
        $.ajax({
            url  : "http://localhost/omzfield/ajaxprocessor/ajaxgetapartment.php",
            type : 'post',
            data : 'id='+val,
            success: function (msg) {
                swal.close();
                if(msg == '-1'){
                    $('#apartment').html('<option value="-1">No Record Found.</option>');
                }else{
                    $('#apartment').html(''+msg+'');
                }                
            },
            error: function(x,e) {
                showSwal("Error", formatErrorMessage(x, e), "error", "Close");
            }
        });
    });

    $(document).on('change', '#apartment', function(){
        var catid = $(this).val();
        if(catid == '-1'){
            $('#apartmenttype').html('<option value="-1">No Record Found.</option>');
            return;
        }

        var val = catid;
        showSwal('Please wait...', '   ', 'info', 'Ok. Cool!');
        $('#apartmenttype').html('<option value="-1">Please wait...</option>');
        
        $.ajax({
            url  : "http://localhost/omzfield/ajaxprocessor/ajaxgetapartmenttype.php",
            type : 'post',
            data : 'id='+val,
            success: function (msg) {
                swal.close();
                if(msg == '-1'){
                    $('#apartmenttype').html('<option value="-1">No Record Found.</option>');
                }else{
                    $('#apartmenttype').html(''+msg+'');
                }                
            },
            error: function(x,e) {
                showSwal("Error", formatErrorMessage(x, e), "error", "Close");
            }
        });
    });

    $(document).on('change', '#apartmenttype', function(){
        var catid = $('#servicecategory').val();
        var aprttype = $('#apartmenttype').val();

        var product = $('#product option:selected').text();
        var servicecategory = $('#servicecategory option:selected').text();
        if(product == 'Air Conditioning' && servicecategory == 'Maintenance (Air Conditioning)'){
            $('#AcQtyDiv').show();
        }
        
        if(catid == '-1' && aprttype == '-1'){
            $('#service').html('<option value="-1">No Record Found.</option>');
            return;
        }        

        showSwal('Please wait...', '   ', 'info', 'Ok. Cool!');
        $('#service').html('<option value="-1">Please wait...</option>');
        
        $.ajax({
            url  : "http://localhost/omzfield/ajaxprocessor/ajaxgetservices.php",
            type : 'post',
            data : 'catid='+catid+"&aprttype="+aprttype,
            success: function (msg) {
                swal.close();
                if(msg == '-1'){
                    $('#service').html('<option value="-1">No Record Found.</option>');
                }else{
                    $('#service').html(''+msg+'');
                    $('#totalDiv').show();
                }                
            },
            error: function(x,e) {
                showSwal("Error", formatErrorMessage(x, e), "error", "Close");
            }
        });
    });

    $(document).on('change', '#service', function(){
        var amt = $('#service option:selected').attr('rel');
        var qty = $('#AcQty').val();

        var product = $('#product option:selected').text();
        var servicecategory = $('#servicecategory option:selected').text();
        if(amt < 1){
            $('#total').val('0');
            return;
        }       

        var total = (amt * qty);
        
        $('#total').val(total);
    });

});

function showStatesOnRoleStateManager(){ 

    var val = $(this).find(':selected').text();
    var checkBox = document.getElementById("chkstate");
    var chkbox = $('#chkstate');
    var state = $('#state');

    chkbox.prop("disabled", true); 

    if(val.toLowerCase() == 'state manager'){  
        state.prop("disabled", true); 
        chkbox.prop("checked", true);        
    }

    $(document).on('click', '#chkstate', function(){        
        var chkval = checkBox.checked;        

        if(chkval == true){ 
            state.prop("disabled", false);
            state.attr("rel", '11');    
        }else{
            state.prop("disabled", true);
            state.attr("rel", '00');
        }
    });

    $(document).on('change', '#role', function(){
        val = $(this).find(':selected').text();

        if(val.toLowerCase() == 'state manager'){ 
            state.prop("disabled", false); 
            chkbox.prop("checked", true);       
        }else{
            state.prop("disabled", true); 
            chkbox.prop("checked", false);
        }
    }); 
}

function computeTotal(){
    var sum = 0;
    // iterate through each td based on class and add the values
    $(".amt").each(function() {

    

        var value = $(this).text();

        value = formatAmount(value);

        // add only if the value is number

        if(!isNaN(value) && value.length != 0) {

            sum += parseFloat(value);

        }
    });
    //convert sum to 2 decimal places
    sum = parseFloat(sum).toFixed(2);
    //format sum as a comma separated number
    sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    $("#total").html(sum);
    //alert(sum);
}

function requestServices(){
    $(document).on('click','#btnRequestServices', function (e) {
        e.preventDefault();

        //get user input
        //var displayarena = $('#error-arena');
        var displayarena = $('#alertmodalbodyxl');

        var formData = $('#frmRequestServices').serialize();

        showSwal('Processing Request...', '   ', 'info', 'Ok. Cool!');

        $.ajax({
            url  : "http://localhost/omzfield/ajaxprocessor/ajaxrequestservices.php",
            type: 'POST',
            data: formData,
            success: function (msg) {
                //displayarena.html('<div class="alert alert-danger col-lg-12">'+msg+'</div>'); exit;
                if(msg == -1){
                    showSwal('Oops!', 'Unauthorized Access. Request Failed.', 'error', 'Close');
                }else if(msg == -2){
                    showSwal('Oops!', 'Kindly fill in all fields', 'error', 'Close');
                }else if(msg == -3){
                    showSwal('Oops!', 'Unable to retrieve service price. Try Again.', 'error', 'Close');
                }else if(msg == -4){
                    showSwal('Oops!', 'Kindly fill in all fields', 'error', 'Close');
                }else {
                    displayarena.html(msg);
                    $('#modalxl').modal("show");
                    swal.close();
                    //$('#frmRequestServices')[0].reset();
                    //displayarena.html('');
                }
            },
            error: function(x,e) {
                showSwal("Error", formatErrorMessage(x, e), "error", "Close");
            }
        })        
        
    });
}

//function to remove commas from incoming comma separated amounts
function formatAmount(value){
    value = value.replace(/,/g, '');
    value = parseFloat(value);
    return value;
}

function formatErrorMessage(jqXHR, exception) 
{
    if (jqXHR.status === 0) {
        return ('Not connected.\nPlease verify your network connection.');
    } else if (jqXHR.status == 404) {
        return ('The requested page not found. [404]');
    } else if (jqXHR.status == 500) {
        return ('Internal Server Error [500].');
    } else if (exception === 'parsererror') {
        return ('Requested JSON parse failed.');
    } else if (exception === 'timeout') {
        return ('Time out error.');
    } else if (exception === 'abort') {
        return ('Ajax request aborted.');
    } else {
        return ('Uncaught Error.\n' + jqXHR.responseText);
    }
}

function showSwal(title, text, type, btntext)
{
    const btnSwal = Swal.mixin({
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger',
      buttonsStyling: false,
    });

    animate = '';
    btnCancel = '';
    btnConfirm = '';

    if(type == 'error'){
        animate = 'animated shake';
        btnCancel = true;
        btnConfirm = false;
    }else if(type == 'success'){
        animate = 'animated heartBeat';
        btnCancel = false;
        btnConfirm = true;
    }else if(type == 'info'){
        animate = 'animated fadeInDown';
        btnCancel = false;
        btnConfirm = false;
    }

    btnSwal.fire({
        title: title,
        text: text,
        type: type,
        showCancelButton: btnCancel,
        showConfirmButton: btnConfirm,
        confirmButtonText: btntext,
        cancelButtonText: btntext,
        animation: false,
        customClass: animate
    })
}

function payWithPaystack(email, amount, phone){
    var handler = PaystackPop.setup({
        key: 'pk_test_4bf4b6b86f72e1a49a9091931757316477a3b5be',
        email: email,
        amount: amount,
        currency: "NGN",
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        metadata: {
            custom_fields: [
                {
                    display_name: "Mobile Number",
                    variable_name: "mobile_number",
                    value: phone
                }
            ]
        },
        callback: function(response){
            alert('success. transaction ref is ' + response.reference);
        },
        onClose: function(){
            alert('Transaction Cancelled by User');
        }
    });
    handler.openIframe();
}

//showSwal('Please wait...', '   ', 'info', 'Ok. Cool!');
//showSwal('Account Created Successfully', 'You\'ll be redirected in 5secs', 'success', 'Ok. Cool!'); 
//showSwal('Oops!', msg, 'error', 'Close');