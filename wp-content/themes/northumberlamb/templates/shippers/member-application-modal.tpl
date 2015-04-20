<!-- ADD SAMPLE MODAL -->
<div id="member-application-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Northumberlamb Membership Application</h4>
            </div>
            <div class="modal-body application-modal">
                <div>
                    <p>I hereby apply for membership in Northumberland Lamb Marketing Co-operative Ltd. I agree
                        to abide by the Constitution and By-Laws of the Association, and to act at all times in a
                        manner supportive to the Association.</p><br/>

                    <p>I understand that, to remain a member in good standing, I will be expected to offer my lambs
                        to NorthumberLamb before selling them to other buyers, although this does not apply to the
                        sale of “freezer lambs” directly to retail customers.</p><br/>

                    <p>Membership applications are approved by the Board of Directors. Applicants must have
                        shipped lambs for at least one year. The quality of the lamb shipped, the shipper’s
                        cooperativeness and dependability are all factors considered by the Board when reviewing
                        the application.</p><br/>

                    <p>A note outlining your flock size, lambing practices (in or out-of-season lambing), and the
                        number of lambs we might expect to receive from you will help the Board in the review of the
                        application.</p><br/>
                </div>
                <form class="form-horizontal" id="memberForm" method="post" action="../../functions.php">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtFirstNameMF">First Name</label>
                        <div class="col-md-6">
                            <input id="txtFirstNameMF" name="txtFirstNameMF" placeholder="" class="form-control input-md" type="text" required>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtLastNameMF">Last Name</label>
                        <div class="col-md-6">
                            <input id="txtLastNameMF" name="txtLastNameMF" placeholder="" class="form-control input-md" type="text" required>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtAddressMF">Address</label>
                        <div class="col-md-6">
                            <input id="txtAddressMF" name="txtAddressMF" placeholder="" class="form-control input-md" type="text" required>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtPostalCodeMF">Postal Code</label>
                        <div class="col-md-6">
                            <input id="txtPostalCodeMF" name="txtPostalCodeMF" placeholder="A1A 1A1" class="form-control input-md" type="text" required>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtPhoneMF">Telephone</label>
                        <div class="col-md-6">
                            <input id="txtPhoneMF" name="txtPhoneMF" placeholder="9025551234" class="form-control input-md" type="text" required>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="txtEmailMF">Email</label>
                        <div class="col-md-6">
                            <input id="txtEmailMF" name="txtEmailMF" placeholder="email@example.com" class="form-control input-md" type="text" required>

                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="memberFormSubmit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /ADD SAMPLE MODAL -->