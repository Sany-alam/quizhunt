$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // showing questions in table
    showQuestions();

    $("#addQuestion").click(function() {
        question = $("#question").val();
        option1 = $("#option1").val();
        option2 = $("#option2").val();
        option3 = $("#option3").val();
        option4 = $("#option4").val();
        coption = $("#coption").val();
        var formData= new FormData();
        formData.append('question',question);
        formData.append('option1',option1);
        formData.append('option2',option2);
        formData.append('option3',option3);
        formData.append('option4',option4);
        formData.append('coption',coption);
        $.ajax({
            processData: false,
            contentType: false,
            type:'POST',
            url:"addQuestion",
            data: formData,
            success:function(data,status){
                $("#question").val("");
                $("#option1").val("");
                $("#option2").val("");
                $("#option3").val("");
                $("#option4").val("");
                $("#coption").val("");
                showQuestions();
            },
        });
    });
});


function delQue(id) {
    formdata= new FormData();
    formdata.append('queid',id);
    $.ajax({
        processData: false,
        contentType: false,
        type:'POST',
        url:"deleteQuestion",
        data: formdata,
        success:function(data,status){
            showQuestions();
        },
    });
}


function showQuestions() {
    formdata= new FormData();
    $.ajax({
        processData: false,
        contentType: false,
        type:'POST',
        url:"showQuestion",
        data: formdata,
        success:function(data,status){
            $("#question-rows").html(data);
        },
    });
}
