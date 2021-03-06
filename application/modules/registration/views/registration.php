<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANC Registration</title>
    <link href="<?=asset_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-md-4 full-height reg-con-1">
                <img src="<?=asset_url('img/NF Logo.png')?>" id="reg-logo-1">
                <img src="<?=asset_url('img/text-logo.png')?>" id="reg-logo-2">

                <img src="<?=asset_url('img/Siklab.png')?>" id="reg-logo-3">

                <p class="footer-text">
                    <a href="https://twitter.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i> @nfjpiaofficial
                    </a>
                    <span class="separator">|</span>
                    <a href="https://www.facebook.com/nfjpia" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i> /nfjpia
                    </a>
                    <span class="separator">|</span>
                    <a href="https://www.instagram.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i> @nfjpiaofficial
                    </a>
                    <br>
                    <span class="copyright">Copyright © 2015, All rights reserved. | Powered by IITS</span>
                </p>

            </div>
            <div class="col-md-8 full-height reg-con-2">
                <div id="reg-option" class="full-height">
                    <h2 class="reg-h-1 bold-1">Welcome to NFJPIA Annual National Convention</h2>
                    <br>
                    <h3>Step 1</h3>
                    <h4>Register and fill out pertinent information.</h4>
                    <button type="button" name="op-reg" class="btn btn-success btn-lg">Register</button>
                    <br>
                    <br>
                    <br>
                    <h3>Step 2 </h3>
                    <h5>(Skip this step if you are paying on-site)</h5>
                    <h4>Confirm your bank deposit payments.</h4>
                    <button type="button" name="op-con" class="btn btn-warning btn-lg">Confirm Payment</button>
                </div>
                <div id="reg-module" class="col-md-8 full-height hide-module">
                    <form id="registrationFormFull" method="POST" Accept-Charset="utf-8" enctype="multipart/form-data">
                    <h3 class="reg-h-1 bold-1">Registration</h3>
                    <p class="reg-p-1">Welcome to registration for Annual National Convention. Please take a moment to complete all of the information below as carefully and completely as possible.</p>
                    <br>
                    <div class="alert alert-danger formMessage" style="display:none">

                    </div>
                    <div class="reg-form reg-form-1" id="reg-form-1-id">
                        <h4 class="bold-1">Group Leader Information</h4>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <div class="form-inline">
                                <input name="group_member_list[0][member_type]" type="hidden" value="1" required>
                                <input name="group_member_list[0][first_name]" class="form-control reg-input-inline" type="text" placeholder="First Name" required>
                                <input name="group_member_list[0][last_name]" class="form-control reg-input-inline" type="text" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Position</label>
                            <select name="group_member_list[0][local_chapter_position_ID]" class="form-control localChapterPosition" required>
                            </select>
                        </div>
                        <div id="regionalChapterRegion" class="form-group" style="display:none">
                            <label class="control-label">Region</label>
                            <select name="local_chapter_region"  class="form-control" >
                                <option value="null">None</option>
                                <option >NCR</option>
                                <option>Region 1 & CAR</option>
                                <option>Region 2</option>
                                <option>Region 3</option>
                                <option>Region 4</option>
                                <option>Region 5</option>
                                <option>Region 6</option>
                                <option>Region 7</option>
                                <option>Region 8</option>
                                <option>Region 9</option>
                                <option>Region 10 & CARAGA</option>
                                <option>Region 11</option>
                                <option>Region 12 & SOCCSKSARGEN</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>
                            <input name="group_member_list[0][contact_number]" class="form-control" type="number" placeholder="Cell No. or Tel. No." required  max="99999999999">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Complete Address</label>
                            <input name="group_member_list[0][complete_address]" type="text" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <input name="group_member_list[0][email_address]" type="email" class="form-control" placeholder="name@email.com" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Valid ID</label>
                            <input name="images[0]" type="file" required>
                            <p class="help-block">Upload a scanned copy of valid ID.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">T-shirt Size</label>
                            <select name="group_member_list[0][tshirt_size]" class="form-control" required>
                                <option value="XXS">XXS (25"x17")</option>
                                <option value="XS">XS (26"x18")</option>
                                <option value="S">S (27"x19")</option>
                                <option value="M">M (28"x20")</option>
                                <option value="L">L (29"x21")</option>
                                <option value="XL">XL (30"x22")</option>
                                <option value="2XL">2XL(31"x23")</option>
                                <option value="3XL">3XL (32"x24")</option>
                            </select>
                        </div>

                        <br>
                        <div class="form-group">
                            <!--<a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>-->
                            <button type="submit" id="button-step1" class="btn btn-success reg-btn-right reg-btn-next"  disabled="">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
                        </div>
                    </div>

                    <div class="reg-form reg-form-2 hide-module" id="reg-form-2-id">
                        <h4 class="bold-1">Local Chapter Information</h4>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">Local Chapter (School/University)</label>
                            <input name="local_chapter_description" type="text" class="form-control" placeholder="School/University" required>
                            <input name="local_chapter_chapter_type" value="1" type="hidden" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Local Chapter Address</label>
                            <input name="local_chapter_address" type="text" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Region</label>
                            <select name="local_chapter_region"  class="form-control" id="select2" required>
                                <option >NCR</option>
                                <option>Region 1 & CAR</option>
                                <option>Region 2</option>
                                <option>Region 3</option>
                                <option>Region 4</option>
                                <option>Region 5</option>
                                <option>Region 6</option>
                                <option>Region 7</option>
                                <option>Region 8</option>
                                <option>Region 9</option>
                                <option>Region 10 & CARAGA</option>
                                <option>Region 11</option>
                                <option>Region 12 & SOCCSKSARGEN</option>

                            </select>
                        </div>

                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <!--<a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>-->
                            <button type="submit" id="button-step2" class="btn btn-success reg-btn-right reg-btn-next" disabled>Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
                        </div>
                    </div>

                    <div class="reg-form reg-form-3 hide-module">
                        <h4 class="bold-1">Choose an event to participate</h4>
                        <hr>
                        <div  class="form-group nonAcademicEvent control-checkbox">
                            <label>Events Participating In (Limit of 2 Academic, 2 Non-Academic Events)</label>
                            <label class="control-label">Non-Academic Events</label>
                        </div>
                        <div  class="form-group academicEvent control-checkbox">
                            <label class="control-label">Academic Events</label>
                        </div>
                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <button id="button-step3" type="button" class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
                        </div>
                    </div>

                    <div class="reg-form reg-form-4 hide-module" id="reg-form-4-id">
                        <h4 class="bold-1">Group Members</h4>
                        <hr>
                        <div class="table-responsive">
                            <table id="groupMemberTable" class="table table-striped reg-table-member">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Position</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="noGroupMember">
                                        <td colspan="5" style="text-align:center; font-weight: bold">No members added yet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <a id="reg-add-member" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Group Member</a>
                        </div>
                        <div id="reg-form-member-id" class="reg-form-member btn-form-con hide-module"  row_index="0" novalidate>
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <div class="form-inline">
                                    <input class="form-control reg-input-inline fname" type="text" placeholder="First Name" required>
                                    <input class="form-control reg-input-inline lname" type="text" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Position</label>
                                <select class="form-control localChapterPosition" id="Position" required>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Contact Number</label>
                                <input class="form-control contact" type="number" placeholder="Cell No. or Tel. No." required max="99999999999">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Complete Address</label>
                                <input type="text" class="form-control address" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email Address</label>
                                <input type="email" class="form-control emailadd" placeholder="name@email.com" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Valid ID</label>
                                <div id="memberIdentificationCardList">
                                    
                                </div>
                                <p class="help-block">Upload a scanned copy of valid ID.</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label">T-shirt Size</label>
                                <select class="form-control" id="shirtSize" required>
                                    <option value="XXS">XXS (25"x17")</option>
                                    <option value="XS">XS (26"x18")</option>
                                    <option value="S">S (27"x19")</option>
                                    <option value="M">M (28"x20")</option>
                                    <option value="L">L (29"x21")</option>
                                    <option value="XL">XL (30"x22")</option>
                                    <option value="2XL">2XL(31"x23")</option>
                                    <option value="3XL">3XL (32"x24")</option>
                                </select>
                            </div>
                            <div class="form-group nonAcademicEvent control-checkbox">
                                <label>Events Participating In (Limit of 2 Academic, 2 Non-Academic Events)</label>
                                <label class="control-label">Non-Academic Events</label>
                            </div>
                            <div class="form-group academicEvent control-checkbox">
                                <label class="control-label">Academic Events</label>

                            </div>
                            <br>
                            <div class="form-group">
                                <!--<a class="btn btn-success btn-form-save">Save</a>
                                <a class="btn btn-warning btn-form-cancel">Cancel</a>-->
                                <button id="saveGroupMember" type="submit" class="btn btn-success btn-form-save" >Save</button>
                                <button id="updateGroupMember" type="submit" class="btn btn-success btn-form-save" style="display: none">Update</button>
                                <button id="cancelGroupMember" type="button" class="btn btn-warning btn-form-cancel">Cancel</button>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <button id="button-step4" type="button" class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
                        </div>
                    </div>

                    <div class="reg-form reg-form-5 hide-module">
                        <h4 class="bold-1">Implementing Rules and Regulation Links</h4>
                        <hr>
                        <div class="form-group">
                            <label>IRR 1</label>
                            <a href="http://tinyurl.com/ANCAcadsIRR" target="_blank"> NATIONAL ACADEMIC LEAGUE</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>IRR 2</label>
                            <a href="http://tinyurl.com/ANCNonAcadsIRR" target="_blank"> NON-ACADEMIC TOURNAMENT</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>IRR 3</label>
                            <a href="http://tinyurl.com/ANCCineJpiaIRR" target="_blank"> SHORT FILM FESTIVAL</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>IRR 4</label>
                            <a href="http://tinyurl.com/ANCAtTESTIRR" target="_blank"> ACCOUNTANCY TEAM EXTEMPORANEOUS SPEAKING TOURNAMENT</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>IRR 5</label>
                            <a href="http://tinyurl.com/DigiJPIArtistPacket" target="_blank"> DIGITAL JPIARTIST</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>IRR 6</label>
                            <a href="http://tinyurl.com/YEA2016AppForms​" target="_blank"> YEAR END AWARDS</a>
                            <br>
                        </div>
                        <br>

                        <h4 class="bold-1">Registration Fee</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="reg-display-table">
                                <tr>
                                    <td width="85%">Registration Fee for JPIANS</td>
                                    <td>₱ 5,600.00</td>
                                </tr>
                                <tr>
                                    <td>Registration Fee for Non-JPIANS (LC Advisers, Faculty)</td>
                                    <td>₱ 5,700.00</td>
                                </tr>
                            </table>
                        </div>
                        <br>

                        <h4 class="bold-1">Bank Details</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="reg-display-table">
                                <tr>
                                    <td width="65%">BDO Savings</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Account Number:</td>
                                    <td><b>010 260 007 285</b></td>
                                </tr>
                                <tr>
                                    <td>Account Name:</td>
                                    <td><b>NFJPIA INC.</b></td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <p>* <i>Send and upload a copy of your deposit slips with your Registration No. at <b>Payment Confirmation</b> in home page.</i></p>
                        <br>

                        <h4 class="bold-1">Agreements</h4>
                        <hr>
                        <div id="agreement" class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input name="first_agreement" value="true" type="checkbox"> I have reviewed my entries and agree to pay the billed amount at the specified bank account before April 29, 2016 to confirm our group’s participation.
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="second_agreement" value="true" type="checkbox"> I acknowledge that until our registration is confirmed, our accommodation and kits are not guaranteed.
                                </label>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <button id="submitRegistration" type="submit" class="btn btn-success reg-btn-right reg-btn-submit" disabled="">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div id="con-module" class="col-md-8 full-height hide-module">
                    <h3 class="reg-h-1 bold-1">Payment Confirmation</h3>
                    <p class="reg-p-1">Verifying your registration for Annual National Convention. Please take a moment to complete all of the information below as carefully and completely as possible.</p>

                    <form method="POST">
                        <div class="alert alert-danger formMessage" style="display:none">

                        </div>
                        <div class="reg-form reg-form-1">
                            <div class="form-group">
                                <label class="control-label">Registration Number</label>
                                <input name="registration_number" class="form-control" type="number" placeholder="XXXXXX">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Scanned Deposit Slip</label>
                                <input id="depositSlipFile" name="images[]" type="file">
                                <p class="help-block">Upload a scanned copy of your deposit slips.</p>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success reg-btn-right reg-btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="success-module" class="fulll-height hide-module">
                    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                    <br>
                    <h3><b>Successfully Done!</b></h3>
                    <h4>Get the latest updates! Follow us on our social networking sites!</h4>

                    <a href="https://twitter.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i> @nfjpiaofficial
                    </a>
                    <a href="https://www.facebook.com/nfjpia" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i> /nfjpia
                    </a>
                    <a href="https://www.instagram.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i> @nfjpiaofficial
                    </a>
                    <br>
                    <div id="registrationNumberMessage" style="display:none">
                        <h3>Registration Number : <b id="registrationNumber">1</b></h3>
                        <h4>Please take note of you registration number. It will be needed for the next step! <a href="./registration">Go to first page</a></h4>
                    </div>
                    <div id="confirmationMessage" style="display:none">
                        <h4>We will send your confirmation pass through your email one we had confirmed your payment slip.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prototype" style="display:none">
        <div class="eventItem checkbox reg-checkbox">
            <label>
                <input type="checkbox" class="checkbox"> <span class="eventDescription">Cup 1 - Basic Accounting</span>
            </label>
        </div>
        <table>
            <tr
                class="groupMember"
                contact_number=""
                complete_address=""
                email_address=""
                tshirt_size=""
                member_type="2"
                local_chapter_position_ID=""
                academic_event_participation=""
                non_academic_event_participation=""
                >
                <td class="groupMemberFirstName">Mark</td>
                <td class="groupMemberLastName">Otto</td>
                <td class="groupMemberLocalChapterPositionDescription" >Local Chapter Adviser</td>
                <td>
                    <a class="btn btn-info btn-xs editMember">edit</a>
                </td>
                <td>
                    <a class="btn btn-danger btn-xs removeMember">remove</a>
                </td>
            </tr>

            <tr class="noGroupMember">
                <td colspan="5" style="text-align:center; font-weight: bold">No members added yet</td>
            </tr>
        </table>
        <input class="memberIdentificationCard" type="file" name="" required>
    </div>
    <script type="text/javascript" src="<?=asset_url()?>js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?=asset_url()?>js/jquery.form.min.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/validator.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>/js/initial.min.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/custom.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/scrollTo.js"></script>
</body>

</html>
