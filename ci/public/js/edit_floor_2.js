$(document).ready(function(){
	$('.shelf-form').hide();

	$('#delete').click(function(){
		alert("DELETE MODE");

		$('.i').click(function(){

			var send_d = {
				number: $(this).text(),
				floor: $(this).attr('floor'),
				zone: $(this).attr('zone')
			};

			$.ajax({
				url : 'http://localhost/ci/welcome/delete',
				type:'post',
				data:send_d,
				success:function(status,data){
					console.log(status);
					console.log(data);

					$('.shelf-form').hide();
					alert("Delete Finished");
					window.location.reload();
				
				},
				error:function(a,b,c){
					console.log(a);
					console.log(b);
					console.log(c);
				}
			});

		});
	});

	//add mode
	$('#add').click(function(){
		
		
		alert("ADD MODE");
		$('.shelf-form').show();

		$('#reset').click(function(){
			$('.shelf-number').val("");
			$('.shelf-min').val("");
			$('.shelf-max').val("");
		    $('.shelf-floor').val("");
			$('.shelf-system').val("");
			$('.shelf-zone').val("");
		});

		$('#cancel').click(function(){
			$('.shelf-form').hide();
		});

		$('#submit').click(function(){
			// ajax here
			var ll = $(".ll").length;
			var lr = $(".lr").length;
			var r = $(".r").length;
			var d = $(".d").length;

			var send_d = {
				number: $('.shelf-number').val(),
				min: $('.shelf-min').val(),
				max: $('.shelf-max').val(),
				floor: "2",
				zone: $('select[name=zone]').val(),
				system : $('.shelf-system').val(),
				
			};
			var full = 'no';
			switch($('select[name=zone]').val()){
				case 'left_l':if(ll >= 25)full = 'yes'; break;
				case 'left_r':if(lr >= 25) full = 'yes';break;
				case 'right':if(r >= 20)  full = 'yes';break;
				case 'down':if(d >= 17)  full = 'yes';break;
			}
			

			if(full=='yes'){ //zone is not full
				alert('selected zone is full');
				$('.shelf-number').val("");
				$('.shelf-zone').val("");
				window.location.reload();	
			}

			else{
				$.ajax({
					url : 'http://localhost/ci/welcome/add',
					type:'post',
					data:send_d,
					success:function(status,data){
						console.log(status);
						console.log(data);

						$('.shelf-form').hide();
						alert("Update Finished");
						window.location.reload();
					
					},
					error:function(a,b,c){
						alert("Unfinished ")
					}
				});
			}
			

		});
	});



	//edit mode
	$('#edit').click(function(){
			alert("EDIT MODE");
			$('.i').click(function(){
			
			var number = $(this).text();
			var min = $(this).attr('min');
			var max = $(this).attr('max');
			 var floor = $(this).attr('floor');
			var system = $(this).attr('system');
			var zone = $(this).attr('zone');

			$('.shelf-number').val(number);
			$('.shelf-min').val(min);
			$('.shelf-max').val(max);
		    $('.shelf-floor').val(floor);
			$('.shelf-system').val(system);
			$('.shelf-zone').val(zone);
			$('.shelf-oldnumber').val(number);

			
			$('.shelf-form').show();
			$('.shelf-floor').hide();

		});

		$('#reset').click(function(){
			$('.shelf-number').val("");
			$('.shelf-min').val("");
			$('.shelf-max').val("");
		    $('.shelf-floor').val("");
			$('.shelf-system').val("");
			$('.shelf-zone').val("");
		});

		$('#cancel').click(function(){
			$('.shelf-form').hide();
		});

		$('#submit').click(function(){
			// ajax here


			var send_d = {
				number: $('.shelf-number').val(),
				min: $('.shelf-min').val(),
				max: $('.shelf-max').val(),
				floor: $('.shelf-floor').val(),
				zone: $('select[name=zone]').val(),
				system : $('.shelf-system').val(),
				oldnumber: $('.shelf-oldnumber').val()
			};

			$.ajax({
				url : 'http://localhost/ci/welcome/update',
				type:'post',
				data:send_d,
				success:function(status,data){
					console.log(status);
					console.log(data);

					$('.shelf-form').hide();
					alert("Update Finished");
					window.location.reload();
				
				},
				error:function(a,b,c){
					console.log(a);
					console.log(b);
					console.log(c);
				}
			});
			
		});
	});
});