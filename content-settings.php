<div class="content-w order__books__wraper">
    <div class="content-box">
        <div class="element-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div style="max-height: 50px;" class="element-wrapper">
                        <h6 class="element-header"> YOUR ACCOUNT SETTINGS</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="element-box">
                <div class="table-responsive">
                    <table class="table table-lightborder">
                        <thead>
                            <tr>
                                <th> DAF Account Name: </th>
                                <th class="text-right">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="user-with-avatar">
                                        <img alt="" src="img/avatar1.jpg"><span class="d-none d-xl-inline-block">John
                                            Mayers</span>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <a href="account.php">
                                        <button class="mr-2 mb-2 btn btn-primary" type="button"> Edit</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h5 class="form-header">
                    Your Addresses:
                </h5>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="webgrid-header">
                            <th scope="col">
                                Address </th>
                            <th scope="col">
                                Mail certificate books </th>
                            <th scope="col">
                                Used to mail receipts </th>
                            <th scope="col">
                            </th>
                            <th scope="col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="webgrid-row-style">
                            <td class="col2Width">1303 53rd St #303<br>Brooklyn, NY 11219</td>
                            <td><input name="chkbox" type="checkbox" disabled="" value="value" checked=""></td>
                            <td><input name="chkbox" type="checkbox" disabled="" value="value" checked=""></td>
                            <td><a href="edit">Edit</a></td>
                            <td><a href="/settings/confirmation/NAAAADAAAAA%3d?type=101">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
                <a href="edit">
                <button class="mr-2 mb-2 btn btn-primary" type="button" onclick="location.href = 'settings/mailingaddress?clientAddressId=0';">Add
                    mailing address</button></a>
                <h5 class="form-header">
                    Your EMail Addresses:
                </h5>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="webgrid-header">
                            <th scope="col">
                                Email </th>
                            <th scope="col">
                                Used to email Treshold Alerts </th>
                            <th scope="col">
                                Used to email Receipts and Confirmation Alerts </th>
                            <th scope="col">
                                Used to email Statements </th>
                            <th scope="col">
                            </th>
                            <th scope="col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="webgrid-row-style">
                            <td class="col2Width">es@ojcfund.org</td>
                            <td><input name="chkbox" type="checkbox" disabled="" value="value" checked=""></td>
                            <td><input name="chkbox" type="checkbox" disabled="" value="value" checked=""></td>
                            <td><input name="chkbox" type="checkbox" disabled="" value="value" checked=""></td>
                            <td><a href="email">Edit</a></td>
                            <td><a href="/settings/confirmation/NQAAADkAAAA%3d?type=201">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
                <a href="email">
                <button class="mr-2 mb-2 btn btn-primary" type="button" onclick="location.href = 'settings/EmailAddress?clientEmailAddressId=0';">Add
                    Email Address</button></a>
                <h5 class="form-header">
                    Your Bank Accounts:
                </h5>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="webgrid-header">
                            <th scope="col">
                                Account Name </th>
                            <th scope="col">
                                Account Number </th>
                            <th scope="col">
                                Bank Routing Number </th>
                            <th scope="col">
                                Receipt Name </th>
                            <th scope="col">
                                Used for automatic donations </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
                <a href="bank">
                <button class="mr-2 mb-2 btn btn-primary" type="button" onclick="location.href = 'settings/bankaccount?acctId=0';">Add
                    Bank Account</button></a>
            </div>
        </div>
    </div>
</div>