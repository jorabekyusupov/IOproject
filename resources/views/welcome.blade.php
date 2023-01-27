<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">IO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        </ul>
                        <form class="d-flex" role="search" id="selectStudentFrom">
                            <div class="form-floating">
                                <select class="form-select" id="selectStudent"
                                        aria-label="Floating label select example">
                                    <option selected disabled>Please Select</option>
                                    <option value="0">Jorabek</option>
                                    <option value="1">Sardor</option>
                                </select>
                                <label for="selectStudent">Student</label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form class=" cl-12" role="search" id="selectQuestionForm">
                <div class="form-floating">
                    <select class="form-select col-12" id="selectQuestion" aria-label="Floating label select example">
                        <option selected disabled>Please Select</option>

                    </select>
                    <label for="selectQuestionForm">Savollar</label>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <form class=" cl-12" role="search" id="selectQuestionForm2">
                <div class="form-floating">
                    <select class="form-select col-12" id="selectQuestion2" aria-label="Floating label select example">
                        <option selected disabled>Please Select</option>

                    </select>
                    <label for="selectQuestion2" id="selectQuestion2Label"></label>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success " id="mainAnswer" role="alert">
                A simple success alert—check it out!
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery-3.6.3.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    let selectQuestionForm = $('#selectQuestionForm');
    let selectStudentForm = $('#selectStudentFrom');
    let selectQuestion = $('#selectQuestion');
    let selectStudent = $('#selectStudent');
    let selectQuestion2 = $('#selectQuestion2');
    let selectQuestionForm2 = $('#selectQuestionForm2');
    let studentType = selectStudent.val();
    let mainAnswer = $('#mainAnswer');
    let htmlBody = $('html');
    let selectQuestion2Label = $('#selectQuestion2Label');

    selectQuestionForm.hide();
    selectQuestionForm2.hide();
    mainAnswer.hide();
    selectStudent.change(function () {
        let studentType = $(this).val();
        selectQuestionForm.hide();
        selectQuestionForm2.hide();
        mainAnswer.hide();

        $.ajax({
            url: "{{ route('get-question') }}",
            type: 'GET',
            data: {
                studentType: studentType
            },
            success: function (data) {
                selectQuestionForm.show();
                selectQuestion.empty();

                data.questions.forEach(function (item) {
                    // if id = 0 disabled option
                    if (item.id === 0) {
                        selectQuestion.append(`<option disabled value="${item.id}">${item.answer}</option>`);
                    }
                    selectQuestion.append(`<option  value="${item.id}">${item.answer}</option>`);
                });
            }

        });
    });

    selectQuestion.change(function () {
        let questionId = $(this).val();
        let studentType = selectStudent.val();
        selectQuestionForm2.show();
        mainAnswer.hide();

        if (questionId == 0) {
            selectQuestionForm2.hide();
        }
        else {
            $.ajax({
                url: "{{ route('get-answer') }}",
                type: 'GET',
                data: {
                    studentType: studentType,
                    questionId: questionId
                },
                success: function (data) {
                    console.log(data.answers);
                    selectQuestion2.empty();
                    selectQuestion2Label.text(data.answers.question);
                    selectQuestion2.append(`<option disabled selected>Javobni tanlang</option>`);
                    data.answers.answers.forEach(function (item) {
                        $('#selectQuestion2').append(`<option value="${item.id}">${item.answer}</option>`);
                    });
                }

            });
        }

    });

    selectQuestion2.change(function () {
        let parentQuestionId = selectQuestion.val();
        let questionId = $(this).val();
        let studentType = selectStudent.val();
        mainAnswer.hide();

        $.ajax({
            url: "{{ route('get-main-answer') }}",
            type: 'GET',
            data: {
                studentType: studentType,
                questionId: questionId,
                parentQuestionId: parentQuestionId

            },
            success: function (data) {
                mainAnswer.show();
                mainAnswer.empty();
                mainAnswer.append(data.answer);
            }

        });
    });
</script>
</body>
</html>
