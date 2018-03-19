$(document).ready(function(){

	$(document).on("click", ".edit-answer", function(){

		var $this = $(this);
		var $answerId = $this.data("id");
		var $question_id = $this.data("question");

		var $answerString = $this.data("answer");

		swal({
			title: 'Zmena odpovede',
			input: 'text',
			showCancelButton: true,
			confirmButtonText: 'Uložiť',
			cancelButtonText: 'Zrušiť',
			inputValue: $answerString,
			showLoaderOnConfirm: true,
			inputValidator: (value) => {
				return !value && 'Zadajte odpoveď'
			},
			preConfirm: function(){
				return new Promise((resolve) => {
			      
			        resolve();
			      
			    })
			},
			allowOutsideClick: () => !swal.isLoading()
		}).then((result) => {

			if (result.value) {

				axios.post(base_url + "/update-questoin-answer/" + $answerId, {
					'new_answer': result.value
				}).then(function(axios_result){

					var $course_id = $("#course_id").val();
					var $test_id = $("#test_id").val();

					axios.get(base_url + "/admin/courses/" + $course_id + "/tests/" + $test_id +"/questions")
					.then(function(question_data){

						var moj_name = String("answers_" + $question_id);

						$("#answers_" + $question_id).html(question_data.data[moj_name]);


					});

				});
	
			}
		})

	});

});