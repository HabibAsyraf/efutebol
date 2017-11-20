var Listing = function(options) {
	var disClass = this;
	disClass.settings = null;
	
	var getListingHandler = function(cusUrl) {
		showLoading(disClass.settings.listingClass + ' table');
		$.ajax({
			url: baseUrl+cusUrl,
			async: false,
			error: function(){
				toastr.error("Request takes more time than usual. Please reload the page");
			},
			success: function(result){
				if(result == "session_expired")
					location.href = baseUrl + "admin/login/errorLogout";
				else{
					$(disClass.settings.listingClass).html(result);
					initSort();
					hideLoading(disClass.settings.listingClass + ' table');
				}
			}
		});
	}
	
	var searchHanlder = function() {
		$("body").on('click', disClass.settings.listingClass + ' .btn-search', function(e) {
			$(disClass.settings.listingClass + ' .submit-type').val($(this).data('type'));
			$(disClass.settings.listingClass + ' .search-form').ajaxSubmit({
				error: function(){
					toastr.error("Request takes more time than usual. Please reload the page");
				},
				success:function(result){
					if(result == "session_expired")
						location.href = baseUrl + "admin/login/errorLogout";
					else{
						$(disClass.settings.listingClass).html(result);
						initSort();
					}
				}
			});
		});
		
		$("body").on('keypress', disClass.settings.listingClass + ' .search-form input', function(e) {
			if(e.which == 13) {
				$(disClass.settings.listingClass + ' .submit-type').val("search");
				$(disClass.settings.listingClass + ' .search-form').ajaxSubmit({
					error: function(){
						toastr.error("Request takes more time than usual. Please reload the page");
					},
					success:function(result){
						if(result == "session_expired")
							location.href = baseUrl + "admin/login/errorLogout";
						else{
							$(disClass.settings.listingClass).html(result);
							initSort();
						}
					}
				});
				return false;
			}
		});
	}
	
	var sortingHandler = function() {
		$("body").on('click', disClass.settings.listingClass + ' .col-sort, ' + disClass.settings.listingClass + ' .col-sort-asc, ' + disClass.settings.listingClass + ' .col-sort-desc', function(){
			var me = $(this).data('col');
			$(disClass.settings.listingClass + " .sort-by").val(me);
			$(disClass.settings.listingClass + ' .form-sorting').ajaxSubmit({
				error: function(){
					toastr.error("Request takes more time than usual. Please reload the page");
				},
				success:function(result){
					if(result == "session_expired")
						location.href = baseUrl + "admin/login/errorLogout";
					else{
						getListingHandler(result);
					}
				}
			});
		});
	}
	
	var paginationHandler = function() {
		$("body").on('click', disClass.settings.listingClass + " .pagination a", function(e){
			e.preventDefault();
			var theURL = $(this).attr('href');
			if(theURL != '#'){
				$.ajax({
					url: theURL, 
					success: function(result){
						if(result == "session_expired")
							location.href = baseUrl + "admin/login/errorLogout";
						else{
							$(disClass.settings.listingClass).html(result);
							initSort();
						}
					}
				});
			}
		});
	}
	
	return {
		//main function to initiate the module
		init: function(options) {
			disClass.settings = $.extend({
				listingClass: ".div-listing",
				mainUrl: "",
				mainFormUrl: ""
			}, options );
			
			if(disClass.settings.mainUrl != ''){
				getListingHandler(disClass.settings.mainUrl);
				searchHanlder();
				paginationHandler();
				sortingHandler();
			}
			else{
				toastr.error("Can't load this page. Error has been occured!");
			}
			
			$('.btn-save-modal').on('click', function(){
				$('.modal-form form').ajaxSubmit({
					dataType: 'json',
					beforeSend: function(){
						showLoading('.modal-form');
					},
					error: function(){
						hideLoading('.modal-form');
						toastr.error("Request takes more time than usual. Please reload the page");
					},
					success:function(result){
						if(result['result'] == "session_expired")
							location.href = baseUrl + "admin/login/errorLogout";
						else{
							hideLoading('.modal-form');
							if(result['result'] == "success"){
								// $('.modal-form').find('.div-error-msg').html(result['message']);
								// $('.modal-form').find('.admin_level_id').val(result['admin_level_id']);
								$('.modal-form').modal('hide');
								toastr.success("Record has been saved");
							}
							else{
								$('.modal-form').find('.div-error-msg').html(result['message']);
							}
							getListingHandler(disClass.settings.mainUrl);
						}
					}
				});
			});
			
			$('.btn-add-modal').on('click', function(){
				if(disClass.settings.mainFormUrl != ""){
					if(disClass.settings.mainFormUrl == "admin/admin_level/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="checkbox"]').prop('checked', false);
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add Admin Level');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/branch/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						$('.modal-form').find('.remarks').val('Selected branches only');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add Branch');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/department/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add Department');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/service_category/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add Service Category');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/general_location/form"){
						$('.modal-form').find('select').val('');
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add General Location');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/perks/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add Perks');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/merchant_admin_control/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add Merchant Admin Control');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/merchant_country/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add Merchant Country');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else if(disClass.settings.mainFormUrl == "admin/merchant_state/form"){
						$('.modal-form').find('input[type="text"]').val('');
						$('.modal-form').find('input[type="hidden"]').val('');
						
						//enabling
						$('.modal-form').find('input, select').prop('disabled', false);
						$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
						
						$('.modal-form').find('input').trigger('change');
						$('.modal-form').find('.modal-title').html('Add State Country');
						$('.modal-form').find('.div-error-msg').html("");
						
						$('.modal-form').modal('show');
					}
					else
						toastr.error("Request takes more time than usual. Please reload the page");
				}
				else
					toastr.error("Request takes more time than usual. Please reload the page");
			});
			
			$('body').on('click', '.btn-edit-modal', function(){
				if(disClass.settings.mainFormUrl != ""){
					var info = $(this).data('info');
					$.ajax({
						url: baseUrl + disClass.settings.mainFormUrl + '/' + info,
						dataType: 'json',
						beforeSend: function(){
							showLoading('body');
							$('.modal-form').find('.div-error-msg').html("");
						},
						error: function(){
							hideLoading('body');
							toastr.error("Request takes more time than usual. Please reload the page");
							// alert("Request takes more time than usual. Please reload the page");
						},
						success: function(result){
							if(result['result'] == "session_expired")
								location.href = baseUrl + "admin/login/errorLogout";
							else{
								if(disClass.settings.mainFormUrl == "admin/admin_level/form"){
									$('.modal-form').find('.admin_level_id').val(result['admin_level_id']);
									$('.modal-form').find('.admin_number').val(result['admin_number']);
									$('.modal-form').find('.admin_level_name').val(result['admin_level_name']);
									$('.modal-form').find('.can_view').prop('checked', result['can_view']);
									$('.modal-form').find('.can_edit').prop('checked', result['can_edit']);
									$('.modal-form').find('.can_add').prop('checked', result['can_add']);
									$('.modal-form').find('.can_suspend').prop('checked', result['can_suspend']);
									$('.modal-form').find('.can_delete').prop('checked', result['can_delete']);
									$('.modal-form').find('.control_other_admin').val(result['control_other_admin']);
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Admin Level Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/branch/form"){
									$('.modal-form').find('.branch_id').val(result['branch_id']);
									$('.modal-form').find('.branch_id2').val($.strPad(result['branch_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.branch_name').val(result['branch_name']);
									$('.modal-form').find('.short_branch_name').val(result['short_branch_name']);
									$('.modal-form').find('.remarks').val(result['remarks'] != "" ? result['remarks'] : 'Selected branches only');
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Branch Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/department/form"){
									$('.modal-form').find('.department_id').val(result['department_id']);
									$('.modal-form').find('.department_id2').val($.strPad(result['department_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.department_name').val(result['department_name']);
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Department Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/service_category/form"){
									$('.modal-form').find('.service_category_id').val(result['service_category_id']);
									$('.modal-form').find('.service_category_id2').val($.strPad(result['service_category_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.service_category_name').val(result['service_category_name']);
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Service Category Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/general_location/form"){
									$('.modal-form').find('.general_location_id').val(result['general_location_id']);
									$('.modal-form').find('.general_location_id2').val($.strPad(result['general_location_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.location').val(result['location']);
									$('.modal-form').find('.state').val(result['state']);
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('General Location Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/perks/form"){
									$('.modal-form').find('.perks_id').val(result['perks_id']);
									$('.modal-form').find('.perks_id2').val($.strPad(result['perks_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.perks_name').val(result['perks_name']);
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Perks Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/merchant_admin_control/form"){
									$('.modal-form').find('.merchant_admin_control_id').val(result['merchant_admin_control_id']);
									$('.modal-form').find('.merchant_admin_control_id2').val($.strPad(result['merchant_admin_control_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.merchant_admin_control_name').val(result['merchant_admin_control_name']);
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Merchant Admin Control Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/merchant_country/form"){
									$('.modal-form').find('.merchant_country_id').val(result['merchant_country_id']);
									$('.modal-form').find('.merchant_country_id2').val($.strPad(result['merchant_country_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.merchant_country_name').val(result['merchant_country_name']);
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Merchant Country Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/merchant_state/form"){
									$('.modal-form').find('.merchant_state_id').val(result['merchant_state_id']);
									$('.modal-form').find('.merchant_state_id2').val($.strPad(result['merchant_state_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.merchant_state_name').val(result['merchant_state_name']);
									
									//enabling
									$('.modal-form').find('input, select').prop('disabled', false);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').show();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Merchant State Details');
								}
								
								hideLoading('body');
								$('.modal-form').modal('show');
							}
						}
					});
				}
				else{
					hideLoading('body');
					toastr.error("Request takes more time than usual. Please reload the page");
				}
			});
			
			$('body').on('click', '.btn-modal-view-only', function(){
				if(disClass.settings.mainFormUrl != ""){
					var info = $(this).data('info');
					$.ajax({
						url: baseUrl + disClass.settings.mainFormUrl + '/' + info,
						dataType: 'json',
						beforeSend: function(){
							showLoading('body');
							$('.modal-form').find('.div-error-msg').html("");
						},
						error: function(){
							hideLoading('body');
							toastr.error("Request takes more time than usual. Please reload the page");
							// alert("Request takes more time than usual. Please reload the page");
						},
						success: function(result){
							if(result['result'] == "session_expired")
								location.href = baseUrl + "admin/login/errorLogout";
							else{
								if(disClass.settings.mainFormUrl == "admin/admin_level/form"){
									$('.modal-form').find('.admin_level_id').val(result['admin_level_id']);
									$('.modal-form').find('.admin_number').val(result['admin_number']);
									$('.modal-form').find('.admin_level_name').val(result['admin_level_name']);
									$('.modal-form').find('.can_view').prop('checked', result['can_view']);
									$('.modal-form').find('.can_edit').prop('checked', result['can_edit']);
									$('.modal-form').find('.can_add').prop('checked', result['can_add']);
									$('.modal-form').find('.can_suspend').prop('checked', result['can_suspend']);
									$('.modal-form').find('.can_delete').prop('checked', result['can_delete']);
									$('.modal-form').find('.control_other_admin').val(result['control_other_admin']);
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Admin Level Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/branch/form"){
									$('.modal-form').find('.branch_id').val(result['branch_id']);
									$('.modal-form').find('.branch_id2').val($.strPad(result['branch_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.branch_name').val(result['branch_name']);
									$('.modal-form').find('.short_branch_name').val(result['short_branch_name']);
									$('.modal-form').find('.remarks').val(result['remarks'] != "" ? result['remarks'] : 'Selected branches only');
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Branch Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/department/form"){
									$('.modal-form').find('.department_id').val(result['department_id']);
									$('.modal-form').find('.department_id2').val($.strPad(result['department_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.department_name').val(result['department_name']);
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Department Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/service_category/form"){
									$('.modal-form').find('.service_category_id').val(result['service_category_id']);
									$('.modal-form').find('.service_category_id2').val($.strPad(result['service_category_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.service_category_name').val(result['service_category_name']);
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Service Category Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/general_location/form"){
									$('.modal-form').find('.general_location_id').val(result['general_location_id']);
									$('.modal-form').find('.general_location_id2').val($.strPad(result['general_location_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.location').val(result['location']);
									$('.modal-form').find('.state').val(result['state']);
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('General Location Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/perks/form"){
									$('.modal-form').find('.perks_id').val(result['perks_id']);
									$('.modal-form').find('.perks_id2').val($.strPad(result['perks_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.perks_name').val(result['perks_name']);
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Perks Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/merchant_admin_control/form"){
									$('.modal-form').find('.merchant_admin_control_id').val(result['merchant_admin_control_id']);
									$('.modal-form').find('.merchant_admin_control_id2').val($.strPad(result['merchant_admin_control_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.merchant_admin_control_name').val(result['merchant_admin_control_name']);
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Merchant Admin Control Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/merchant_country/form"){
									$('.modal-form').find('.merchant_country_id').val(result['merchant_country_id']);
									$('.modal-form').find('.merchant_country_id2').val($.strPad(result['merchant_country_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.merchant_country_name').val(result['merchant_country_name']);
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Merchant Country Details');
								}
								else if(disClass.settings.mainFormUrl == "admin/merchant_state/form"){
									$('.modal-form').find('.merchant_state_id').val(result['merchant_state_id']);
									$('.modal-form').find('.merchant_state_id2').val($.strPad(result['merchant_state_id'], 4, "0", "STR_PAD_LEFT"));
									$('.modal-form').find('.merchant_state_name').val(result['merchant_state_name']);
									
									//disabling
									$('.modal-form').find('input, select').prop('disabled', true);
									$('.modal-form').find('.modal-footer').find('.btn-save-modal').hide();
									
									$('.modal-form').find('input').trigger('change');
									$('.modal-form').find('.modal-title').html('Merchant State Details');
								}
								
								hideLoading('body');
								$('.modal-form').modal('show');
							}
						}
					});
				}
				else{
					hideLoading('body');
					toastr.error("Request takes more time than usual. Please reload the page");
				}
			});
		}
	};
}();