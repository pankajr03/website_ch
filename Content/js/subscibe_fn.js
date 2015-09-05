	jQuery(document).ready(function() {
			$('.subscribeForm').bootstrapValidator({
			message: "Not a Valid",
			feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				email: {
					message: "Not a Valid",
					validators: {
						notEmpty: {
							message: "Required field can't be empty."
						},
						emailAddress: {}
							
					}
				}
			}
        });

		$('.subscribeForm').validator().on('submit', function (e) {
		  if (e.isDefaultPrevented()) {
			  alert ('yes') ; 
			// handle the invalid form...
		  } else {
			alert ('no..');
			// everything looks good!
		  }
		})
		validated.bs.validator
	});
