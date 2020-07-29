@extends('layouts.app')
@section('content')
<form action="">
    <div class="container-box">
        <div class="frm">
            <br>
            <h1 class="page-title"><span>Corporate Membership Application Form</span></h1>
            <br><br>
            <div class="ta-c">
                <div style="display: inline-block;">
                    <div class="ta-c" style="height: 40px" style="display: inline-block;">
                        <label class="control control-checkbox">
                            <input type="radio" name="app-type" />
                            <div class="control_indicator"></div>
                            New Applicant
                        </label>
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div style="display: inline-block;">
                    <div class="ta-c" style="height: 40px">
                        <label class="control control-checkbox">
                            <input type="radio" name="app-type" />
                            <div class="control_indicator"></div>
                            Renewal
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="" class="input-lbl">Company</label>
                    <input type="text" class="input1">
                </div>

                <div class="col-sm-6">
                    <label for="" class="input-lbl">Contact Name</label>
                    <input type="text" class="input1">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="" class="input-lbl">Address</label>
                    <input type="text" class="input1">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label for="" class="input-lbl">Phone</label>
                    <input type="text" class="input1">
                </div>

                <div class="col-sm-4">
                    <label for="" class="input-lbl">Fax</label>
                    <input type="text" class="input1">
                </div>

                <div class="col-sm-4">
                    <label for="" class="input-lbl">Website</label>
                    <input type="text" class="input1">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <label for="" class="input-lbl">Specialties</label>
                    <input type="text" class="input1">
                </div>
            </div>

            <h2 class="sub-title">List up to FIVE employees to be members of the association:</h2>


            <?php for ($i=1; $i < 6; $i++) { ?>

            <div class="input-groub">
                <h1>Employee <?=$i?></h1>
                <div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="" class="input-lbl">Name</label>
                            <input type="text" class="input1">
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="input-lbl">Title</label>
                            <input type="text" class="input1">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <label for="" class="input-lbl">Address</label>
                            <input type="text" class="input1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="" class="input-lbl">Phone</label>
                            <input type="text" class="input1">
                        </div>

                        <div class="col-sm-4">
                            <label for="" class="input-lbl">Fax</label>
                            <input type="text" class="input1">
                        </div>

                        <div class="col-sm-4">
                            <label for="" class="input-lbl">Email</label>
                            <input type="text" class="input1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label for="" class="input-lbl">Professional Licenses</label>
                            <input type="text" class="input1">
                        </div>

                        <div class="col-sm-6">
                            <label for="" class="input-lbl">State(s)</label>
                            <input type="text" class="input1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <table class="inputs-table">
                                <tr>
                                    <th style="padding-right: 0;">Degree</th>
                                    <th>Major</th>
                                    <th>Graduation Date</th>
                                    <th>College/University</th>
                                </tr>
                                <tr>
                                    <td style="padding-right: 0;">
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-right: 0;">
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-right: 0;">
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
            <br>
            <h2 class="sub-title">Please select the committees that each employee is interested in joining:</h2>
            <table class="inputs-table">
                <tr>
                    <th style="padding-right: 0;">Employee</th>
                    <th>IT and Communication</th>
                    <th>Education and Career Enhancement</th>
                    <th>Membership</th>
                    <th>Outreach</th>
                    <th>Activities</th>
                </tr>
                <?php for ($i=1; $i < 6; $i++) { ?>
                <tr>
                    <td>
                        <input type="text">
                    </td>
                    <td style="padding-right: 0;">
                        <div class="ta-c" style="height: 40px">
                            <label class="control control-checkbox">
                                <input type="checkbox" />
                                <div class="control_indicator"></div>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="ta-c" style="height: 40px">
                            <label class="control control-checkbox">
                                <input type="checkbox" />
                                <div class="control_indicator"></div>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="ta-c" style="height: 40px">
                            <label class="control control-checkbox">
                                <input type="checkbox" />
                                <div class="control_indicator"></div>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="ta-c" style="height: 40px">
                            <label class="control control-checkbox">
                                <input type="checkbox" />
                                <div class="control_indicator"></div>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="ta-c" style="height: 40px">
                            <label class="control control-checkbox">
                                <input type="checkbox" />
                                <div class="control_indicator"></div>
                            </label>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </table>

            <hr class="mhr1">
            <p style="font-size: 19px;">
                Annual membership fee for a corporate is $250. Please send a check with the application form to
                AAAEA-DC,
                6801 Oak Hall Lane, P.O. BOX 6064, Columbia, MD 21045.
                Membership fee is due before the end of each calendar year. New members enrolled on or after October 1st
                of
                each year will not need to renew their membership until the end of the year after.
            </p>
            <hr class="mhr1">
            <div class="ta-c">
                <button class="btn1">Submit Now</button>
            </div>
        </div>
        <br><br>
    </div>
</form>

<style>
    .page {
        background: #f8f8f8;
    }
</style>
@endsection