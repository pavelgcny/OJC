<div class="content-w">
  <div class="content-box">
    <div class="row">
      <div class="col-lg-12">
        <div style="max-height: 50px;" class="element-wrapper">
          <h6 class="element-header"> RECURRING DONATION</h6>
        </div>
        <div class="text__descriptyion_wrap mt-2">
          <p>Please enter the amount and the day of the month or week you wish to donate each month/week.</p>
        </div>
        <div class="element-wrapper">
          <div class="element-box">
            <form action="/account/recurringpayment" method="post" novalidate="novalidate" _lpchecked="1"><input name="__RequestVerificationToken"
                type="hidden" value="_juFj1tz8f_Hk5PCIoV818IzCTFpR-UlQJjyoLCZP0mVyvGFaXf9Qtxt-nkt6Pob_zaCjY2XCA_rfd66WFG0rvlAS3QiIfj4YbpZRng1rWGUgqM1amf-yUTIqW86Uly3_H6415wZXGuSIMiS3UUejw2"><input
                data-val="true" data-val-number="The field RecurringPaymentID must be a number." data-val-required="The RecurringPaymentID field is required."
                id="RecurringPaymentID" name="RecurringPaymentID" type="hidden" value="0">
              <p>Please enter the amount and the day of the month or week you wish to donate each month/week.</p>
              <br>
              <label class="required" for="RecurrAmt">Donation Amount</label>
              <div>
                <input class="input-text form-control" data-val="true" data-val-number="The field Donation Amount must be a number."
                  data-val-range="The minimum amount elegible is $100" data-val-range-max="999999999"
                  data-val-range-min="100" data-val-required="Amount you wish to donate is required" id="recurr_amt"
                  name="RecurrAmt" type="text" value="0.00">
                <span class="field-validation-valid" data-valmsg-for="RecurrAmt" data-valmsg-replace="true" style="color:red;!important"></span>
              </div>
              <br>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Select how often you wish to donate, Monthly or Weekly</label>
                <div class="col-sm-8">

                  <div class="form-check">
                    <label class="form-check-label"><input class="form-check-input" id="Interval" name="Interval" type="radio"
                        value="Weekly">Weekly</label>
                  </div>

                  <div class="form-check">
                    <label class="form-check-label"><input checked="checked" class="radio form-check-input" id="Interval"
                        name="Interval" type="radio" value="Monthly">Monthly</label>
                  </div>

                </div>
              </div>

              <div id="day_of_month_div">
                <label id="interval_label_month">Enter a day of the Month you wish to donate</label>
                <input class="form-control" data-val="true" data-val-number="The field DayOfMonth must be a number."
                  data-val-required="The DayOfMonth field is required." id="recurr_day_of_month" name="DayOfMonth" type="text"
                  value="0">
                <span class="field-validation-valid" data-valmsg-for="DayOfMonth" data-valmsg-replace="true" style="color:red;!important"></span>
              </div>

              <br>
              <label for="Select_a_account_from_where_to_processes_the_donations">Select a account from where to
                processes the donations</label>
              <div>
                <select class="form-control">
                  <option>
                    Select account
                  </option>
                  <option>
                    New York
                  </option>
                  <option>
                    California
                  </option>
                  <option>
                    Boston
                  </option>
                  <option>
                    Texas
                  </option>
                  <option>
                    Colorado
                  </option>
                </select>
                <!-- <select data-val="true" data-val-number="The field SelectedBankAccountID must be a number."
                  data-val-required="The SelectedBankAccountID field is required." id="bank_list" name="SelectedBankAccountID"></select>
                <span class="field-validation-valid required" data-valmsg-for="SelectedBankAccountID"
                  data-valmsg-replace="true"></span> -->
              </div>


<div class="form-buttons-w">
<input type="submit" data-confirm="You're about to schedule a recurring donation. Are you sure you want to continue?"
                name="" class="btn btn-primary" value="Set Recurring Donation" >
          </div>


             
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-12">
      </div>
    </div>
  </div>
</div>