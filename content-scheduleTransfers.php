<!-- <div class="content-w order__books__wraper">
  <div class="content-box">
    <div class="element-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div style="max-height: 50px;" class="element-wrapper">
            <h6 class="element-header"> RECURRING DONATION</h6>
          </div>
        </div>
      </div>
      <br>
      <div class="element-box">
        <form id="formValidate" novalidate="true">
          <div class="form-desc">
            Please enter the amount and the day of the month or week you wish to donate each month/week.
          </div>
          <fieldset class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label> Donation Amount</label>
                  <input class="form-control" data-val="true" data-val-number="The field Donation Amount must be a number." data-val-range="The minimum amount elegible is $100"
                    data-val-range-max="999999999" data-val-range-min="100" data-val-required="Amount you wish to donate is required"
                    id="recurr_amt" name="RecurrAmt" type="text" value="0.00">

                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Select how often you wish to donate, Monthly or Weekly</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">

                      <label>
                        <input checked="checked" class="radio" id="Interval" name="Interval" style="width:auto;background:none;border:none"
                          type="radio" value="Monthly">Monthly</label>
                      <label>
                        <input class="radio" id="Interval" name="Interval" style="width:auto;background:none;border:none" type="radio"
                          value="Weekly">Weekly</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group width__inner__form_full__width">
                  <label>Enter a day of the Month you wish to donate</label>
                  <input class="form-control" data-val="true" data-val-number="The field DayOfMonth must be a number." data-val-required="The DayOfMonth field is required."
                    id="recurr_day_of_month" name="DayOfMonth" type="text" value="0">

                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label> Select a account from where to processes the donations</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">

                      <div class="form-group">
                        <select class="form-control" data-val="true" data-val-number="The field SelectedBankAccountID must be a number." data-val-required="The SelectedBankAccountID field is required."
                          id="bank_list" name="SelectedBankAccountID"></select>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <div class="form-buttons-w">
            <button class="btn btn-primary" type="submit"> Set Recurring Donation</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->

<!-- -->

<div class="content-w">
  <div class="content-box">

    <div class="row">
      <div class="col-lg-12">
        <div style="max-height: 50px;" class="element-wrapper">
          <h6 class="element-header"> Schedule transfers to OJC account</h6>

        </div>
        <div class="text__descriptyion_wrap mt-2">
          <p>To schedule adding funds to your OJC account, please fill out the information below.</p>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-12">
        <div class="element-wrapper">
          <div class="element-box">
            <form id="formValidate" novalidate="true">

              <!-- Paste same from  -->
              <div class="row">
                <div class="mt-2 pb-2 col-xl-6 col-md-12 col-12">
                  <div class="wrap__input__v2 form-control w-100 ml-auto mr-auto h-100 p-0">
                    <div id="dollarText" class="extra__fild__input">Monthly Donation Amount</div>
                    <input class="hided-input text-center w-100 ml-auto mr-auto h-100" type="text" value="" id="price1"
                      name="donation amount" placeholder="$ 0.00">
                    <script>
                      jQuery(document).ready(function ($) {
                        $("#price1").trigger("click");
                        $('#price1').priceFormat({
                          prefix: '$ ',
                          thousandsSeparator: '',
                        });
                      });
                    </script>
                  </div>
                </div>
                <div id="sheduleOnDay2" class="mt-2 pb-2 col-xl-3 col-md-6 col-12">
                  <div class="wrap__amount__donate__now w-100 text-center">
                    <div id="dollarText" class="extra__fild__input">Schedule on day of each month</div>
                    <div class="form-group">
                      <select id="choise" class="form-control">
                        <option value="0">Month</option>
                        <option value="1">Week</option>
                      </select>
                      <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                  </div>
                </div>
                <div id="sheduleOnDay" class="mt-2 pb-2 col-xl-3 col-md-6 col-12">
                  <div class="wrap__amount__donate__now w-100 text-center">
                    <div id="dollarText" class="extra__fild__input">Schedule on day of each month</div>

                    <div class="custom-select">
                      <input type="text" class="form-control schedtransInput" id="weekinput" aria-describedby="emailHelp"
                        placeholder="01" min="1" max="31">
                      <div id="dateInputClick"></div>
                      <div id="takeDate" class="drop__show hide__data">
                        <div class="daterangepicker dropdown-menu ltr single opensright show-calendar" style="top: 861.594px; left: 332px; right: auto; display: block;">
                          <div class="calendar left single" style="display: block;">
                            <div class="daterangepicker_input"><input class="input-mini form-control active" type="text"
                                name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar"
                                style="display: none;"></i>
                              <div class="calendar-time" style="display: none;">
                                <div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i>
                              </div>
                            </div>
                            <div class="calendar-table">
                              <table class="table-condensed">
                                <tbody>
                                  <tr class="p-mon ">
                                    <td class="weekend off available" data-title="r0c0">26</td>
                                    <td class="off available" data-title="r0c1">27</td>
                                    <td class="off available" data-title="r0c2">28</td>
                                    <td class="available" data-title="r0c3">1</td>
                                    <td class="available" data-title="r0c4">2</td>
                                    <td class="available" data-title="r0c5">3</td>
                                    <td class="weekend available" data-title="r0c6">4</td>
                                  </tr>
                                  <tr class="p-mon ">
                                    <td class="weekend available" data-title="r1c0">5</td>
                                    <td class="available" data-title="r1c1">6</td>
                                    <td class="available" data-title="r1c2">7</td>
                                    <td class="available" data-title="r1c3">8</td>
                                    <td class="available" data-title="r1c4">9</td>
                                    <td class="available" data-title="r1c5">10</td>
                                    <td class="weekend available" data-title="r1c6">11</td>
                                  </tr>
                                  <tr class="p-mon ">
                                    <td class="weekend available" data-title="r2c0">12</td>
                                    <td class="available" data-title="r2c1">13</td>
                                    <td class="available" data-title="r2c2">14</td>
                                    <td class="available" data-title="r2c3">15</td>
                                    <td class="available" data-title="r2c4">16</td>
                                    <td class="available" data-title="r2c5">17</td>
                                    <td class="weekend available" data-title="r2c6">18</td>
                                  </tr>
                                  <tr class="p-mon ">
                                    <td class="weekend available" data-title="r3c0">19</td>
                                    <td class="available" data-title="r3c1">20</td>
                                    <td class="available" data-title="r3c2">21</td>
                                    <td class="available" data-title="r3c3">22</td>
                                    <td class="available" data-title="r3c4">23</td>
                                    <td class="available" data-title="r3c5">24</td>
                                    <td class="weekend available" data-title="r3c6">25</td>
                                  </tr>
                                  <tr class="p-mon ">
                                    <td class="weekend available" data-title="r4c0">26</td>
                                    <td class="available" data-title="r4c1">27</td>
                                    <td class="available" data-title="r4c2">28</td>
                                    <td class="available" data-title="r4c3">29</td>
                                    <td class="available" data-title="r4c4">30</td>
                                    <td class="available" data-title="r4c5">31</td>
                                    <td class="weekend off available" data-title="r4c6">1</td>
                                  </tr>
                                  
                                  <tr class="p-week d-none ">
                                    <td class=" available" data-title="r5c0">sun</td>
                                    <td class="available" data-title="r5c1">mon</td>
                                    <td class="available" data-title="r5c2">tue</td>
                                    <td class="available" data-title="r5c3">wed</td>
                                    <td class="available" data-title="r5c4">thu</td>
                                    <td class="available" data-title="r5c5">fri</td>
                                    <td class=" available" data-title="r5c6">sat</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="ranges" style="display: none;">
                            <div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button>
                              <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div>
                          </div>
                        </div>

                      </div>
                      <!--
                       <select>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>

                      </select> 
                      -->
                    </div>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
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
                      <input class="form-control" data-val="true" data-val-length="Routing No is 9 digits"
                        data-val-length-max="9" data-val-length-min="9" data-val-required="Bank Routing Number is required"
                        id="routingNo" name="RoutingNo" type="text" value="">
                      <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Account Number</label>
                      <input class="form-control" data-val="true" data-val-required="Bank Account Number is required"
                        id="accountNo" name="AccountNo" type="text" value="">
                      <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="form-buttons-w">
                <button class="btn btn-primary" type="submit">Schedule Recurring Transfers</button>
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

<script>
  // Customize dropdown
  jQuery(document).ready(function ($) {
    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 0; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var y, i, k, s, h;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          h = this.parentNode.previousSibling;
          for (i = 0; i < s.length; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              for (k = 0; k < y.length; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }

    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }

    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/

    document.addEventListener("click", closeAllSelect);

  });
</script>




<script>
  // Customize dropdown
  jQuery(document).ready(function ($) {

    /* Toggle class Show calendar  */
    $("#dateInputClick").click(function () {
      $("#takeDate").toggleClass("hide__data");
    });
    

    /* Click avalible date active   */
    $(".available").click(function () {
      $(".available").removeClass("active");
      $(this).toggleClass("active");
      var dateFromCal = $(this).text();
      console.log(dateFromCal);
      $("#weekinput").val(dateFromCal);
  });

/* Change Val Mon or Date */
$( "#choise" ).change(function() {
  var monthVal = $(".monthly__weekly__drop > .select-selected").text();

if (this.value == 1) {
  $(".p-week").removeClass("d-none");
  $(".p-mon").addClass("d-none");
  $("#sheduleOnDay input").val("Mon");
  
} else {
  $(".p-mon").removeClass("d-none");
  $(".p-week").addClass("d-none");
  $("#sheduleOnDay input").val("1");
  }
});

 /* Close modal window after choised date */
 $(".available").click(function () {
   $(".drop__show").addClass("hide__data");
     });
  });


/* Code for Internet Explorer */
/* Sample function that returns boolean in case the browser is Internet Explorer*/
function isIE() {
  ua = navigator.userAgent;
  /* MSIE used to detect old browsers and Trident used to newer ones*/
  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
  
  return is_ie; 
}
/* Create an alert to show if the browser is IE or not */
if (isIE()){
  $("#takeDate").addClass("d-none-exlor");
$(".p-mon").click(function(){
  $("#takeDate").addClass("d-none-exlor");
});
$(".p-week").click(function(){
  $("#takeDate").addClass("d-none-exlor");
});
/* Change Val Mon or Date */
$( "#choise" ).change(function() {
  var monthVal = $(".monthly__weekly__drop > .select-selected").text();
  $("#takeDate").removeClass("d-none-exlor");
if (this.value == 1) {
 // $(".p-week").removeClass("d-none-exlor");
 // $(".p-mon").addClass("d-none-exlor");
 $("#takeDate > div").addClass("d-none-exlor");
 
} else {
 // $(".p-mon").removeClass("d-none-exlor");
 // $(".p-week").addClass("d-none-exlor");

  }
});


}else{
    // alert('It is NOT InternetExplorer');
}

</script>