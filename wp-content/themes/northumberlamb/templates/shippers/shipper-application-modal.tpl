<div id="shipper-application-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NorthumberLamb Shipper Application</h4>
            </div>
            <div class="modal-body application-modal">
                <div>
                    <p>I am interested in shipping lambs to NorthumberLamb and would like to find out more about the
                        process and eligibility. </p>
                </div>

                <form class="form-horizontal" id="shipperForm" method="post" action="../../functions.php">
                    <fieldset>

                        <!-- Form Name -->
                        <legend></legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtNameSF">Name</label>

                            <div class="col-md-6">
                                <input id="txtNameSF" name="txtNameSF" class="form-control input-md"
                                       maxlength="30" type="text" required>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtFarmNameSF">Farm Name</label>

                            <div class="col-md-6">
                                <input id="txtFarmNameSF" name="txtFarmNameSF"
                                       class="form-control input-md" maxlength="50" type="text" required>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtAddressSF">Address</label>

                            <div class="col-md-6">
                                <input id="txtAddressSF" name="txtAddressSF"
                                       class="form-control input-md" maxlength="100" type="text" required>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtPostalCodeSF">Postal Code</label>

                            <div class="col-md-6">
                                <input id="txtPostalCodeSF" name="txtPostalCodeSF" placeholder="A1A 1A1"
                                       class="form-control input-md" maxlength="7" type="text" required>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtHomePhoneSF">Home Phone</label>

                            <div class="col-md-6">
                                <input id="txtHomePhoneSF" name="txtHomePhoneSF" placeholder="9025551234"
                                       class="form-control input-md" maxlength="16" type="text">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtCellPhoneSF">Cell Phone</label>

                            <div class="col-md-6">
                                <input id="txtCellPhoneSF" name="txtCellPhoneSF" placeholder="9025551234"
                                       class="form-control input-md" maxlength="16" type="text">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtEmailSF">Email</label>

                            <div class="col-md-6">
                                <input id="txtEmailSF" name="txtEmailSF" placeholder="email@example.com"
                                       class="form-control input-md" maxlength="50" type="text">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtflockSizeSF">Flock Size</label>

                            <div class="col-md-6">
                                <input id="txtFlockSizeSF" name="txtFlockSizeSF"
                                       class="form-control input-md" maxlength="10" type="text">

                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="rdoLambingPracticeSF">Lambing Practice</label>

                            <div class="col-md-6">
                                <div class="radio">
                                    <label for="rdoLambingPracticeInSF">
                                        <input name="rdoLambingPracticeSF" value="in" checked="checked" type="radio">
                                        In-Season
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="rdoLambingPracticeOutSF">
                                        <input name="rdoLambingPracticeSF" value="out" type="radio">
                                        Out-Of-Season
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Multiple Radios (inline) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="rdoReadyToShipSF">Do you currently have lambs ready
                                to ship?</label>

                            <div class="col-md-6">
                                <label class="radio-inline" for="rdoReadyToShipYesSF">
                                    <input name="rdoReadyToShipSF" value="yes" checked="checked" type="radio"
                                           onclick="txtNumOfLambsSF.disabled=false">
                                    Yes
                                </label>
                                <label class="radio-inline" for="rdoReadyToShipNoSF">
                                    <input name="rdoReadyToShipSF" value="no" type="radio"
                                           onclick="txtNumOfLambsSF.value='';txtNumOfLambsSF.disabled=true">
                                    No
                                </label>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtHowManySF">How Many?</label>

                            <div class="col-md-6">
                                <input id="txtNumOfLambsSF" name="txtNumOfLambsSF"
                                       class="form-control input-md" maxlength="10" type="text">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtExpectingLambsSF">When are you expecting to have more
                                lambs ready?</label>

                            <div class="col-md-6">
                                <input id="txtExpectingLambsSF" name="txtExpectingLambsSF"
                                       class="form-control input-md" maxlength="10" type="text">
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtCommentsSF">Comments</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="txtCommentsSF" name="txtCommentsSF"
                                          maxlength="500"></textarea>
                            </div>
                        </div>

                        <strong>Reference:</strong>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtReferenceNameSF">Name</label>

                            <div class="col-md-6">
                                <input id="txtReferenceNameSF" name="txtReferenceNameSF" placeholder="Reference Name"
                                       class="form-control input-md" maxlength="25" type="text">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="txtReferencePhoneNumberSF">Contact Number</label>

                            <div class="col-md-6">
                                <input id="txtReferencePhoneNumberSF" name="txtReferencePhoneNumberSF"
                                       placeholder="Reference Contact" class="form-control input-md" maxlength="16"
                                       type="text">

                            </div>
                        </div>

                    </fieldset>
                    <hr>
                    <div>
                        <strong>Only producers who abide by the Canadian Sheep Federation best practices <a href="http://www.cansheep.ca/" id="shipper-modal-link" target="_blank">www.cansheep.ca/</a>
                            need apply. We will be on contact with you at our earliest convienence.</strong>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="btnShipperFormSubmit" name="shipperFormSubmit">
                    Submit
                </button>
            </div>
            </form>

            <!-- <form>
            <div class="input-group">
             <span class="input-group-addon" id="basic-addon0"><i class="fa fa-user"></i></span>
             <input id="txtName" type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon0">
           </div>
           <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
            <input id="txtFarmName" type="text" class="form-control" placeholder="Farm Name" aria-describedby="basic-addon1">
          </div>
          <div class="input-group">
           <span class="input-group-addon" id="basic-addon2"><i class="fa fa-globe"></i></span>
           <input id="txtAddress" type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon2">
         </div>
         <div class="input-group">
          <span class="input-group-addon" id="basic-addon3"><i class="fa fa-globe"></i></span>
          <input id="txtPostalCode" type="text" class="form-control" placeholder="Postal Code" aria-describedby="basic-addon3">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon4"><i class="fa fa-phone"></i></span>
          <input id="txtHomePhone" type="text" class="form-control" placeholder="(H)" aria-describedby="basic-addon4">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon5"><i class="fa fa-phone"></i></span>
          <input id="txtCellPhone" type="text" class="form-control" placeholder="(C)" aria-describedby="basic-addon5">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon"><i class="fa fa-question"></i></span>
          <input id="txtFlockSize" type="number" class="form-control" placeholder="Flock Size" aria-describedby="basic-addon">
        </div>
        <div>
          Lambing Practice: Do you lamb...
          <div class="radio">
            <label><input id="rdoInSeason" type="radio" name="optradio">In-Season</label>
          </div>
          <div class="radio">
            <label><input id="rdoOutSeason" type="radio" name="optradio">Out-Of-Season</label>
          </div>
        </div>
        <div>
          Do you currently have lambs ready to ship?
          <div class="radio">
            <label><input id"rdoRTSyes" type="radio" name="optradio">Yes</label>
          </div>
          <div class="radio">
            <label><input id="rdoRTSno" type="radio" name="optradio">No</label>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addo"><i class="fa fa-question"></i></span>
            <input id="txtNumOfLambs" type="number" class="form-control" placeholder="How Many?" aria-describedby="basic-addo">
          </div>
        </div>
        <div>
          Do you expect to have more ready in the next:
          <div class="radio">
            <label><input id="rdoOneMonth" type="radio" name="optradio">Month</label>
          </div>
          <div class="radio">
            <label><input id="rdoTwoMonths" type="radio" name="optradio">Two Months</label>
          </div>
        </div>
        <div class="input-group">
         <span class="input-group-addon" id="basic-addon6"><i class="fa fa-globe"></i></span>
         <input id="txtLocation" type="text" class="form-control" placeholder="Location" aria-describedby="basic-addon6">
       </div>
       <div class="col-lg-12">
         <textarea id="txtComments" class="form-control" rows="6" placeholder="Additional Comments"></textarea>
       </div>
       <div>
        Reference:
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon7"><i class="fa fa-user"></i></span>
          <input id="txtReferenceName" type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon7">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon8"><i class="fa fa-phone"></i></span>
          <input id="txtReferencePhoneNumber" type="text" class="form-control" placeholder="Contact Number" aria-describedby="basic-addon8">
        </div>
      </div>
      <div>
        <strong>Only producers who abide by the Canadian Sheep Federation best practices <a href"http://www.cansheep.ca/">www.cansheep.ca/</a> need apply. We will contact you within 24 hours OR you can call Michael Isenor at 902-895-4262 .</strong>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form> -->
        </div>
    </div>
</div>


<!-- /ADD SAMPLE MODAL -->