<div class="content-w order__books__wraper">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div style="max-height: 50px;" class="element-wrapper">
                        <h6 class="element-header text-uppercase"> Update Bank Account Info</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="element-box">
                        <form id="formValidate" novalidate="novalidate">
                            <div class="form-group">
                                <label for=""> AccountName</label><input class="form-control" placeholder="AccountName"
                                    required="required" type="text">
                            </div>
                            <div class="form-group">
                                <label for="">BankName</label><input class="form-control" placeholder="BankName" type="text">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="">Your Account Number</label><input class="form-control" placeholder="Your Account Number" type="number">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="">Bank Routing Number</label><input class="form-control" placeholder="Your Account Number" type="number">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>

                             <div class="form-group">
                                <label for="">Your Receipt Name</label><input class="form-control" placeholder="Your Receipt Name" type="text">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>

                            
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" type="checkbox">Use for automatic withdrawal
</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit"> Save Changes</button>
                                    <button class="btn btn-primary mr-auto" type="submit"> Cancel Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 onboarding-modal">
                <?php include 'content-rightside.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>