
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data:{
        password: true,
        passwordvalue: ''
    },
    methods: {
        changeFunction: function(e) {
			if ($('#vtype option:selected').val() == 0) {
				$('#vname').empty();
				$('#vname').append('<option value="0">Select any Vazhipad Type</option>');
			}
			else {
                $('#vname').empty();
                $('#vname').append('<option value="0">Select any Prathishta</option>');
                $('#pra option:first').html('Select any');
                $('#pra option:first').attr('selected', 'selected');
			}
		},
        prathishta: function(e) {
            if ($('#vtype option:selected').val() != 0) {
                $.ajax({
                    url: "/online_vazhipad/ajax",
                    method: 'POST',
                    data: {
                        _token: $('form input[name="_token"]').val(),
                        prathishtas_id: e.target.value,
                        vtypes_id: $('#vtype option:selected').val()
                    },
                    success: function(result) {
                        $('#vname').empty();
                        $('#vname').append('<option value="0" price="0">Select any</option>');
                        $.each(result, function(index, value) {
                            $('#vname').append('<option value="' + value.id + '" price="' + value.price + '">' + value.name + '</option>');
                        });
                    }
                });
            }
            else {
                $('#pra option:first').removeAttr('selected');
                $('#pra option:first').html('Select any Vazhipad type');
                $('#pra option:first').attr('selected', 'selected');
            }
        },
		priceFunction: function(e) {
			$('#price').html($('#vname option:selected').attr('price'))
		},
		clearPrice: function() {
			$('#price').html(0);
            $('#vname').html('<option value="0">Select any Vazhipad Type</option>');
		},
        passwordCheck: function(e) {
            e.preventDefault();
            if (this.passwordvalue == "admin123") {
                this.password = false;
            }
        },
        checkDate: function(e) {
            var toDate = document.getElementById('toDate').value;
            var fromDate = document.getElementById('fromDate').value;
            var validate = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
            var data = {
                toDate: toDate,
                fromDate: fromDate
            };
            if (fromDate.match(validate) && toDate.match(validate)) {
                axios.post('/admin/cashbooks/check', data).then(response => {
                    $('#tbody1').empty();
                    for (var i = 0; i < response.data.income.length; i++) {
                        $('#tbody1').append("<tr><td>" + response.data.income[i].id + "</td><td>" + response.data.income[i].type + "</td><td>" + response.data.income[i].amount + "</td></tr>");
                    }
                    $('#totalincome').html(response.data.incomesum);
                    $('#tbody2').empty();
                    for (var i = 0; i < response.data.expense.length; i++) {
                        $('#tbody2').append("<tr><td>" + response.data.expense[i].id + "</td><td>" + response.data.expense[i].head + "</td><td>" + response.data.expense[i].amount + "</td><td>" + response.data.expense[i].discription + "</td></tr>");
                    }
                    $('#totalexpenses').html(response.data.expensesum);
                    if (response.data.incomesum >= response.data.expensesum) {
                        $('#final1').html('Income over Expenses : ');
                        $('#final2').html(response.data.incomesum - response.data.expensesum);
                    }
                    else {
                        $('#final1').html('Expenses over Income : ');
                        $('#final2').html(response.data.expensesum - response.data.incomesum);
                    }
                });
            }
        }
    }
});
