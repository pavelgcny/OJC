<div class="content-w">

   
    <div class="row">
      <div class="col-sm-12">
        <div class="content-w">
          <div class="content-box">

            <div class="row">
              <div class="col-lg-12">
                <div style="max-height: 50px;" class="element-wrapper">
                  <h6 class="element-header"> Transfer funds to OJC account</h6>
                </div>
                <div class="text__descriptyion_wrap mt-2">
          <p>To add funds to your OJC account, please fill out the information below.</p>
        </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="element-wrapper">
                  <div class="element-box">
                    <form id="formValidate2" novalidate="true">
                      <div class="row">
                      <div class="mt-2 pb-2 col-xl-6 col-md-12 col-12">
                          <div class="wrap__input__v2 form-control w-100 ml-auto mr-auto h-100 p-0">
                            <div id="dollarText" class="extra__fild__input">Transfer Amount</div>
                            <input class="hided-input text-center w-100 ml-auto mr-auto h-100" data-val="true" data-val-number="The field Donation Amount must be a number." data-val-range="A minimum amount of $5 is required"
                                data-val-range-max="79228162514264337593543950335" data-val-range-min="1" data-val-required="Amount is Required"
                                id="donation_amount" name="DonationAmount" type="text" value="0">
                            <script>
                              jQuery(document).ready(function ($) {
                                $("#donation_amount").trigger("click");
                                $('#donation_amount').priceFormat({
                                  prefix: '$ ',
                                  thousandsSeparator: '',
                                });
                              });
                            </script>
                          </div>
                        </div>
                        <div class="mt-2 pb-2 col-xl-6 col-md-12 col-12">
                          <div class="wrap__input__v2 form-control w-100 ml-auto mr-auto h-100 p-0">
                            <div id="dollarText" class="extra__fild__input"> Transfer Date</div>
                            <input class="single-daterange form-control" data-val="true" data-val-date="The field Donation Date must be a date." data-val-required="The Donation Date field is required."
                              id="donation_date" name="DonationDate" type="text" value=" 12/21/17">
                              <img id="arrowDownDate" src="/img/down.svg" alt="">
                            <script>
                              jQuery(document).ready(function ($) {
                                var d = new Date();
                                var month = d.getMonth()+1;
                                var day = d.getDate();
                                var output =  
                                    ((''+month).length<2 ? '0' : '') + month + '/' +
                                    ((''+day).length<2 ? '0' : '') + day + '/' + d.getFullYear();
                                $("#donation_date").attr("value", output);
                              });
                            </script>
                          </div>
                        </div>
                        
                      </div>
                      <fieldset class="form-group">
                        <div class="row">
                          <div class="col-sm-12">
                            <legend>
                              <span>Transfer funds FROM this account </span>
                            </legend>
                          </div>



                          <div class="col-sm-12">


                            <div class="form-group">
                              <label> Select from the list or Enter a new account </label>
                              <select id="bank_list" name="SelectedBankAccountID" class="form-control">
                                <option value="0">Select a bank account</option>
                              </select>
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>




                          </div>
                          <div <div="" class="col-sm-6">
                            <div class="form-group">
                              <label> Mail Recipt To:</label>
                              <input class="form-control" id="mailToReceipt" name="MailToReceipt" type="text" value="">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account Name</label>
                              <input id="accountName" name="AccountName" type="text" value="Dummy Account" class="form-control">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Routing Number</label>
                              <input class="form-control" data-val="true" data-val-length="Routing No is 9 digits" data-val-length-max="9" data-val-length-min="9"
                                data-val-required="Bank Routing Number is required" id="routingNo" name="RoutingNo" type="text"
                                value="">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Account Number</label>
                              <input class="form-control" data-val="true" data-val-required="Bank Account Number is required" id="accountNo" name="AccountNo"
                                type="text" value="">
                              <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Transfer Now</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--------------------
              START - Chat Popup Box
              -------------------->

            <!--------------------
              END - Chat Popup Box
              -------------------->
          </div>
        </div>
      </div>
    </div>

</div>