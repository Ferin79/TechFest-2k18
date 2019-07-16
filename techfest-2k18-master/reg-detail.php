<!DOCTYPE html>
<html lang="en">

  <!-- Mirrored from demo.themeum.com/html/triangle/1.1/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 15:08:47 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration Details | GTU Techfest 2018</title>
    <?php require_once './inc-links.php'; ?>
  </head><!--/head-->

  <body>
    <?php require_once './inc-header.php'; ?>
    <!--/#header-->
    <?php require_once './scrollButton.php'; ?>

    <section id="page-breadcrumb">
      <div class="vertical-center sun">
        <div class="container">
          <div class="row">
            <div class="action">
              <div class="col-sm-12">
                <h1 class="title">Registration</h1>
                <p>Verify your Registration details for <b> Non-GTU Events. </b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/#action-->

    <section class="container">
      <br/>
      <div class="row">
        <div class="col-sm-5">
          <div class="contact-form bottom">
            <div class="form-group">
              <input type="text" name="search" class="form-control" id="enrollment_no" required="required" placeholder="Enter 12 digit Enrollment number">
            </div>
            <div class="form-group">
              <button name="submit" id="get-detail" class="btn btn-success">Get Registration Detail</button>
            </div>
          </div>
        </div>
        <div class="col-sm-7" id="alert-container">
          <div class="alert fade in" id="alert-container" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4 id="alert-title"></h4>
            <p id="alert-message"></p>
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-5">
          <h2 class="text-primary">Participant Detail</h2>
          <table class="table table-responsive table-hover" >
            <tbody>
              <tr>
                <th>Enrollment No : </th>
                <td id="data-eno"></td>
              </tr>
              <tr>
                <th>Name : </th>
                <td id="data-name"></td>
              </tr>
              <tr>
                <th>College Name : </th>
                <td id="data-college"></td>
              </tr>
              <tr>
                <th>Email : </th>
                <td id="data-email"></td>
              </tr>
              <tr>
                <th>Contact No : </th>
                <td id="data-contact"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-7">
          <h2 class="text-primary">Event Detail</h2>
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Date of Registration</th>
                <th>Registration Code</th>
                <th>Name of Event</th>
              </tr>
            </thead>
            <tbody id="data-events">
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <?php require_once './inc-footer.php'; ?>
    <!--/#footer-->

    <?php require_once './inc-scripts.php'; ?>
    <script>
      $('document').ready(function () {
        $("#get-detail").click(function () {
          sendRequest();
        });
        $(document).keypress(function (e) {
          if (e.which === 13) {
            sendRequest();
          }
        });
        var sendRequest = function () {
          //reset previus detail
          $('#data-eno').html("");
          $('#data-name').html("");
          $('#data-college').html("");
          $('#data-email').html("");
          $('#data-contact').html("");
          $('#data-events').html("");
          var enroll_no = $('#enrollment_no').val();
          //validate enrollment number
          if (enroll_no.search(/(^[0-9]{12}$)/) === -1) {
            showAlert('Error', 'Invalid enrollment number', 'alert-danger');
            $('#enrollment_no').val("");
            return;
          }
          var param = {
            'enrollment_no': enroll_no
          };
          console.log(param);
          $.ajax({
            headers: {
              'Access-Control-Allow-Origin': '*'
            },
            type: "POST",
            url: 'http://techfest.ckpcet.ac.in/reports/my-registration',
            data: param,
            success: function (data, textStatus, xhr) {
              var response = data.response;
              $('#enrollment_no').val("");
              if (response.status === false) {
                showAlert('Warning', 'No registration detail found for this enrollment number', 'alert-warning');
                return;
              }
              showAlert('Success', 'Registration detail received', 'alert-info');
              var registration = response.participants[enroll_no];
              $('#data-eno').html(registration.enrollment_no);
              $('#data-name').html(registration.name);
              $('#data-college').html(registration.college);
              $('#data-email').html(registration.email);
              $('#data-contact').html(registration.contact_no);
              var events = registration.registrations;
              var tbl = $('#data-events');
              for (var i in events) {
                var event = events[i].event;
                var reg_code = events[i].code;
                var date = events[i].date;
                var tr = $('<tr></tr>');
                tr.append('<td>' + date + '</td>');
                tr.append('<td>' + reg_code + '</td>');
                tr.append('<td>' + event + '</td>');
                tr.appendTo(tbl);
              }
            }
          });
        }
        var showAlert = function (title, message, type) {
          var alert_cont = $('#alert-container');
          var alert_box = jQuery('<div/>', {
            'class': 'alert ' + type
          });
          jQuery('<button/>', {
            'type': 'button',
            'class': 'close',
            'data-dismiss': 'alert',
            'aria-hidden': 'true',
            'text': 'x'
          }).appendTo(alert_box);
          jQuery('<h4/>', {
            'text': title
          }).appendTo(alert_box);
          jQuery('<p/>', {
            'text': message
          }).appendTo(alert_box);
          alert_box.appendTo(alert_cont);
          setTimeout(function () {
            alert_box.hide("fade-out");
          }, 3000);
        }
      });
    </script>
  </body>
</html>
