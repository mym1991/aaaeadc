@extends('layouts.app')
@section('content')
<form action="">
<div class="container-box">
    <div class="frm">
        <br>
        <h1 class="page-title"><span>Individual Membership Application Form</span></h1>
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
                <label for="" class="input-lbl">Name</label>
                <input type="text" class="input1">
            </div>

            <div class="col-sm-6">
                <label for="" class="input-lbl">Title</label>
                <input type="text" class="input1">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label for="" class="input-lbl">Company</label>
                <input type="text" class="input1">
            </div>

            <div class="col-sm-6">
                <label for="" class="input-lbl">Company Address</label>
                <input type="text" class="input1">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <label for="" class="input-lbl">Personal Address</label>
                <input type="text" class="input1">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <label for="" class="input-lbl">Work Phone</label>
                <input type="text" class="input1">
            </div>

            <div class="col-sm-4">
                <label for="" class="input-lbl">Work Fax</label>
                <input type="text" class="input1">
            </div>

            <div class="col-sm-4">
                <label for="" class="input-lbl">Work Email</label>
                <input type="text" class="input1">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <label for="" class="input-lbl">Personal Phone</label>
                <input type="text" class="input1">
            </div>

            <div class="col-sm-4">
                <label for="" class="input-lbl">Personal Fax</label>
                <input type="text" class="input1">
            </div>

            <div class="col-sm-4">
                <label for="" class="input-lbl">Personal Email</label>
                <input type="text" class="input1">
            </div>
        </div>

        <h2 class="sub-title">New Members: Please complete the sections below:</h2>

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
        <br>
        <table class="inputs-table">
            <tr>
                <th style="padding-right: 0;">Professional Licensing</th>
                <th>State(s)</th>
                <th>Professional Licensing</th>
                <th>State(s)</th>
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
        <h2 class="sub-title">Please select the committees that you are interested in joining:</h2>
        <div class="row">
            <div class="col-sm-6">
                <div style="display: inline-block;">
                    <div class="ta-c" style="height: 40px">
                        <label class="control control-checkbox">
                            <input type="checkbox" />
                            <div class="control_indicator"></div>
                            Education & Career Enhancement
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="display: inline-block;">
                    <div class="ta-c" style="height: 40px">
                        <label class="control control-checkbox">
                            <input type="checkbox" />
                            <div class="control_indicator"></div>
                            Membership
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="display: inline-block;">
                    <div class="ta-c" style="height: 40px">
                        <label class="control control-checkbox">
                            <input type="checkbox" />
                            <div class="control_indicator"></div>
                            Activities
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div style="display: inline-block;">
                    <div class="ta-c" style="height: 40px">
                        <label class="control control-checkbox">
                            <input type="checkbox" />
                            <div class="control_indicator"></div>
                            IT & Communication
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="display: inline-block;">
                    <div class="ta-c" style="height: 40px">
                        <label class="control control-checkbox">
                            <input type="checkbox" />
                            <div class="control_indicator"></div>
                            Outreach
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <hr class="mhr1">
        <p style="font-size: 19px;">Annual membership fee for individuals is $50. Please send a check with the
            application form to AAAEA-DC,
            6801 Oak Hall Lane, P.O. BOX 6064, Columbia, MD 21045.
            Membership fee is due before the end of each calendar year. New members enrolled on or after October 1st
            of
            each year will not need to renew their membership until the end of the year after. </p>
        <hr class="mhr1">
        <div class="ta-c">
            <button class="btn1">Submit Now</button>
        </div>
    </div>
    <br><br>
</div>
</form>

<style>
.page{
    background: #f8f8f8;
}
</style>
@endsection