<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
{% if hide.exists %}
<div class="container mt-4">
    <div class="row">
        <h1 style="text-align: center;">Personal Details</h1>
            <hr>
        <div class="col-md-4">
            <div class="profile-img">
                {% if user.application.student_profile.url %}
                <img src="{{user.application.student_profile.url}}" alt="" width="310px" height="270px">
                {% endif %}
            </div>
        </div>
        <div class="col-md-8">
            <div class="profile-tab">
                <div class="tab-pane">
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Course :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.course}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Full Name :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.name}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email ID :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.email}}</p>
                        </div>
                    </div>
                    {% if user.application.phone_no %}
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone Number :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.phone_no}}</p>
                        </div>
                    </div>
                    {% endif %}
                    <div class="row">
                        <div class="col-md-6">
                            <label>Address :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.address}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<hr>
<div class="container mt-4">
    <div class="row">
        <h1 style="text-align: center;">Educational Details</h1>
            <hr>
        <div class="col-md-4">
            <div class="profile-img">
                <h3>10th Std Details</h3>
            </div>
        </div>
        <div class="col-md-8">
            <div class="profile-tab">
                <div class="tab-pane">
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>SSC Percentage :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.ssc_percentage}}%</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>SSC Marksheet :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.ssc_marksheet.url}}">View SSC Marksheet</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>SSC Passing Certificate :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.ssc_passing_certificate.url}}"> View SSC Passing Certificate</a></p>
                        </div>
                    </div>
                    {% if user.application.phone_no %}
                    <div class="row">
                        <div class="col-md-6">
                            <label>SSC Leaving Certificate :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.ssc_leaving_certificate.url}}">View SSC Leaving Certificate</a></p>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
</div>
<hr>
 
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <h3>12th Std Details</h3>
            </div>
        </div>
        <div class="col-md-8">
            <div class="profile-tab">
                <div class="tab-pane">
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>HSC Percentage :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.hsc_percentage}}%</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>HSC Marksheet :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.hsc_marksheet.url}}">View HSC Marksheet</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>HSC Passing Certificate :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.hsc_passing_certificate.url}}">View HSC Marksheet</a></p>
                        </div>
                    </div>
                    {% if user.application.phone_no %}
                    <div class="row">
                        <div class="col-md-6">
                            <label>HSC Leaving Certificate :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.hsc_leaving_certificate.url}}">View HSC Leaving Certificate</a></p>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
</div>
<hr>
 
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <h3>CET and JEE Scorecard</h3>
            </div>
        </div>
        <div class="col-md-8">
            <div class="profile-tab">
                <div class="tab-pane">
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>CET Percentile :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.cet_percentile}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>CET Scorecard :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.cet_scorecard.url}}">View CET Scorecard</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>JEE Percentile :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{user.application.jee_percentile}}</p>
                        </div>
                    </div>
                    {% if user.application.phone_no %}
                    <div class="row">
                        <div class="col-md-6">
                            <label>JEE Scorecard :</label>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{user.application.jee_scorecard.url}}">View JEE Scorecard</a></p>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
</div>
<hr>
<h4>Click here to edit the application</h4><a href="/edit_application/" class="btn btn-secondary" style="width: 20rem;">Edit Application</a>
<br><br>
{% else %}
<div class="container mt-4">
    <form action="/addmission_form/" method="POST" enctype="multipart/form-data"> {% csrf_token %}
    {{form.as_p}}
    <button type="submit">Submit</button>
    </form>
</div>
{% endif %}
</body>
</html>
