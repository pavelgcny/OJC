<div class="content-w">
  <div class="content-box">
    <div class="row">
      <div class="col-lg-12">
        <div style="max-height: 50px;" class="element-wrapper">
          <h6 class="element-header"> Add new charity</h6>
        </div>
        <div class="text__descriptyion_wrap mt-2">
          <p>To add a new charity to your database, enter the information below, or click to search on the IRS database</p>
        </div>
        <div class="element-wrapper">
      <div class="element-box">
        <form id="formValidate" novalidate="true"> 
			  <div class="form-group">  
            <div class="help-block form-text with-errors form-control-feedback"></div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Enter EIN</label>
                <input class="form-control" data-val="true" data-val-regex="This is not a valid EIN number" data-val-regex-pattern="^[0-9]{2}\-?\d{7}$" data-val-required="EIN is required" id="reco_EIN" name="EIN" type="text" value="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Dont have the EIN?</label>
                <div class="rec__deiv__disp__block"><button class="btn btn-primary w-100" type="button" id="search_org" onclick="search_org_indb_irs()">Search the IRS database</button></div></div>
            </div>
          </div>

<div class="row">
  <div class="col-sm-6">
                <div class="form-group">
                  <label> Charity Name </label>
                 <input autocomplete="off" class="form-control" data-val="true" data-val-required="Charity Organization Is Required" id="charity_name" name="CharityName" type="text" value="">
                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Address Line 1</label>
                 <input autocomplete="off" class="form-control" data-val="true" data-val-required="Address is required" id="address1" name="CharityAddress.Address1" type="text" value="">
                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
              </div>
          </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label> City</label>
                <input autocomplete="off" class="form-control" data-val="true" data-val-required="City is required" id="city" name="CharityAddress.City" type="text" value="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>State</label>
                  <div class="input-group">
                    
                   <input autocomplete="off" class="form-control" data-val="true" data-val-required="State is required" id="state" name="CharityAddress.State" type="text" value="">
                  </div>
                </div>
              </div>
				 <div class="col-sm-4">
                <div class="form-group">
                  <label>Zip Code</label>
                  <div class="input-group">
                    
                   <input autocomplete="off" class="form-control" data-val="true" data-val-required="Zip Code is required" id="postal_code" name="CharityAddress.PostalCode" type="text" value="">
                  </div>
                </div>
              </div>
            </div>

<div class="form-buttons-w">
  <button class="btn btn-primary" type="submit">Add New Charity</button>
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
