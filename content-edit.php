<div class="content-w order__books__wraper">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div style="max-height: 50px;" class="element-wrapper">
                        <h6 class="element-header text-uppercase"> Update Your Mailing Address</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="element-box">
                        <form id="formValidate" novalidate="novalidate">
                            <div class="form-group">
                                <label for=""> Address Line 1</label><input class="form-control" placeholder="Address Line 1"
                                    required="required" type="address-line3">
                            </div>
                            <div class="form-group">
                                <label for="">City</label><input class="form-control" placeholder="City" type="address-level2">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="">State</label><input class="form-control" placeholder="State" type="address-level1">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="">Zip</label><input class="form-control" placeholder="Zip"
                                    data-val-required="Zip Code is required" type="postal-code">
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" type="checkbox">Mail
                                        Certificate Books</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" type="checkbox">Mail
                                        Receipt</label>
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